<template>
    <apexchart type="donut" height="380" :options="chartOptions" :series="series"></apexchart>
</template>

<script>
export default {
    data() {
        return {
            ippsData:[],
            availabilityCapacity: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            series: [],
            chartOptions: {
                chart: {
                    type: 'donut',
                },
                fill: {
                    type: 'gradient',

                    colors: ['#4a90fb','#6fe497','#f0af19','#e7415e','#775dd0']

                },
                labels: ['Gas - Full', 'Complex ( -- ) RFO', 'RFO - Full', 'RLNG - Full', 'Complex ( -- ) RLNG','Gas (3GT ST) - Full','Coal - Half','Coal - Full','RLNG & HSD - Full','Complex ( -- ) GAS'],
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: 'Fuel Mix',
                    align: 'left'
                },
                legend: {
                    position: 'bottom',
                }
            }
        }
    },
    mounted(){
     this.fuelmixData();
    },
    methods:{
        fuelmixData() {
            axios.get('https://smdapi.azurewebsites.net/npcc/get_npcc_data', {headers: {"Authorization": `32e06722cc36c9eb21d7046b85070b9c`}})
                .then(response => {
                    this.ippsData = response.data;
                    this.compileData()
                })
                .catch(error => console.log(error));
        },
        compileData() {
            this.ippsData.forEach((item) => {
                if (item.HOURLY_DATA_TYPE=='DAC') {
                    item.detailsList.forEach((a) => {
                        switch (a.FUEL_TYPE) {
                            case 'Gas - Full':
                                this.availabilityCapacity[0] = this.availabilityCapacity[0] + 1;
                                break;
                            case 'Complex ( -- ) RFO':
                                this.availabilityCapacity[1] = this.availabilityCapacity[1] + 1;
                                break;
                            case 'RFO - Full':
                                this.availabilityCapacity[2] = this.availabilityCapacity[2] + 1;
                                break;
                            case 'RLNG - Full':
                                this.availabilityCapacity[3] = this.availabilityCapacity[3] + 1;
                                break;
                            case 'Complex ( -- ) RLNG':
                                this.availabilityCapacity[4] = this.availabilityCapacity[4] + 1;
                                break;
                            case 'Gas (3GT ST) - Full':
                                this.availabilityCapacity[5] = this.availabilityCapacity[5] + 1;
                                break;
                            case 'Coal - Half':
                                this.availabilityCapacity[6] = this.availabilityCapacity[6] + 1;
                                break;
                            case 'Coal - Full':
                                this.availabilityCapacity[7] = this.availabilityCapacity[7] + 1;
                                break;
                            case 'RLNG & HSD - Full':
                                this.availabilityCapacity[8] = this.availabilityCapacity[8] + 1;
                                break;
                            case 'Complex ( -- ) GAS':
                                this.availabilityCapacity[9] = this.availabilityCapacity[9] + 1;
                                break;
                        }
                    })
                }
            });
            this.series = this.availabilityCapacity;

        }
    }
}
</script>

<style scoped>

</style>
