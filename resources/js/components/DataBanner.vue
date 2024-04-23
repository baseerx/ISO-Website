<template>
    <div class="pb-0 mb-0">
        <v-alert
            color="#1568a5"
        >
            <v-row>
                <v-col cols="3">
                    <v-card
                        color="#043E96"
                        dark
                    >
                        <v-card-title class="text-h5">
                            Today's Snapshot
                        </v-card-title>

                        <v-card-subtitle>AS OF {{ this.forecastDemand.drawn_time }}</v-card-subtitle>

                    </v-card>
                </v-col>
                <v-col cols="3">
                    <v-card
                        color="#043E96"
                        dark
                    >
                        <v-card-title class="text-h5">
                            {{ this.totalAvailableCapacity }}
                        </v-card-title>

                        <v-card-subtitle>Available Capacity (MW)</v-card-subtitle>

                    </v-card>
                </v-col>
                <v-col cols="3">
                    <v-card
                        color="#043E96"
                        dark
                    >
                        <v-card-title class="text-h5">
                            {{this.forecastDemand.totalLoad}}
                        </v-card-title>

                        <v-card-subtitle>FORECASTED PEAK DEMAND (MW)</v-card-subtitle>

                    </v-card>
                </v-col>
                <v-col cols="3">
                    <v-card
                        color="#043E96"
                        dark
                    >
                        <v-card-title class="text-h5">
                            {{this.yesterdayforecastDemand.totalLoad}}
                        </v-card-title>
                        <v-card-subtitle>YESTERDAY'S PEAK DEMAND (MW)</v-card-subtitle>
                    </v-card>
                </v-col>
            </v-row>
        </v-alert>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "DataBanner",
            ippsData: [],
            totalAvailableCapacity: 0,
            forecastDemand:{},
            yesterdayforecastDemand:{}

        }
    },
    mounted() {
        this.getData();
        this.peakDemand();
        this.yesterdaypeakDemand();
    },
    methods: {
        getData() {
            axios.get('https://smdapi.azurewebsites.net/npcc/get_npcc_data', {headers: {"Authorization": `32e06722cc36c9eb21d7046b85070b9c`}})
                .then(response => {
                    this.ippsData = response.data;
                    // const key = 'IppName';
                    // const arrayUniqueByKey = [...new Map(this.ippsData.map(item =>
                    //     [item[key], item])).values()];
                    // let len = Object.keys(arrayUniqueByKey).length;
                    this.compileData()
                })
                .catch(error => console.log(error));
        },
        peakDemand() {
            axios.get('api/dbanner')
                .then(response => {
                    this.forecastDemand=_.maxBy(response.data, 'totalLoad')
                }).catch(error => console.log(error))
        },
        yesterdaypeakDemand() {
            axios.get('api/dbanner/1')
                .then(response => {
                    this.yesterdayforecastDemand=_.maxBy(response.data, 'totalLoad')
                    // console.log(this.yesterdayforecastDemand.totalLoad)
                }).catch(error => console.log(error))
        },
        compileData() {
            this.ippsData.forEach((item) => {
                if (item.HOURLY_DATA_TYPE == 'DAC') {
                    item.detailsList.forEach((a) => {
                        let t = a.TARGET_HOUR;

                        if (t == '23:00') {
                            this.totalAvailableCapacity = parseInt(this.totalAvailableCapacity) + parseInt(a.AVAILABILITY);
                        }

                    })
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
