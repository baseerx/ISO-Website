<template>
    <v-app>
        <v-container class="pt-10 mt-15">
            <Section></Section>
            <v-main>
                <div class="container mt-15">
                    <div class="mt-15">
                        <v-row justify="space-around">
                            <v-col lg-12>
                                <v-card width="100%">
                                    <v-img
                                        height="200px"
                                        src="/img/banner/discos.jpg"
                                    >
                                        <v-card-title class="white--text mt-8">
                                            <v-avatar size="56">
                                                <img
                                                    alt="user"
                                                    src="https://cdn.pixabay.com/photo/2020/06/24/19/12/cabbage-5337431_1280.jpg"
                                                >
                                            </v-avatar>
                                            <h2 class="ml-3 text-primary">
                                                DISCOS
                                            </h2>
                                        </v-card-title>
                                    </v-img>

                                    <v-card-text>
                                        <div class="row">
                                            <div class="col-12">
                                                <v-autocomplete
                                                    v-model="discoName"
                                                    :items="items"
                                                    deletable-chips
                                                    dense
                                                    filled
                                                    rounded
                                                    small-chips
                                                    label="TYPE DISCOS NAME.."
                                                ></v-autocomplete>
                                                <div class="card" v-show="flag">
                                                    <div class="card-header bg-info text-white text-uppercase">
                                                        {{ this.discoName }}
                                                    </div>
                                                    <div class="card-body">
                                                        <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="font-weight-bold text-uppercase ml-8 mb-2">
                                            {{ this.discoName!==""?this.discoName:"" }}
                                        </div>
                                        <v-timeline
                                            align-top
                                            dense
                                            v-show='this.discoName!==""'
                                        >
                                            <v-timeline-item
                                                v-for="discos in specificDisco"
                                                :key="discos.time"
                                                :color="discos.color"
                                                small
                                            >
                                                <div>
                                                    <div class="font-weight-normal">
                                                        <strong>{{ discos.from }}</strong>
                                                    </div>
                                                    <a :href="discos.link">{{ discos.discos }}</a>
                                                </div>
                                            </v-timeline-item>
                                        </v-timeline>
                                    </v-card-text>
                                </v-card>
                            </v-col>
                        </v-row>
                    </div>
                </div>
            </v-main>
        </v-container>
        <Footer></Footer>
    </v-app>
</template>

<script>
import Section from "./Section";
import Footer from "./Footer";
import moment from "moment";

export default {
    components: {
        Section,
        Footer
    },
    data: () => ({
        discoDetail: [
            {
                from: 'FESCO',
                discos: `Faisalabad Electric Supply Company`,
                link: 'http://fesco.com.pk/',
                color: 'deep-purple lighten-1',
            },
            {
                from: 'GEPCO',
                discos: 'Gujranwala Electric Power Company',
                link: 'http://gepco.com.pk/',
                color: 'green',
            },
            {
                from: 'HESCO',
                discos: 'Hyderabad Electric Supply Company',
                link: 'http://hesco.gov.pk/',
                color: 'red lighten-1',
            },
            {
                from: 'SEPCO',
                discos: 'Sukkur Electric Power Company',
                link: 'http://sepco.com.pk/',
                color: 'blue lighten-1',
            },
            {
                from: 'IESCO',
                discos: 'Islamabad Electric Supply Company',
                link: 'http://iesco.com.pk/',
                color: 'yellow lighten-1',
            },
            {
                from: 'KESC',
                discos: 'Karachi Electric Supply Company',
                link: 'http://ke.com.pk/',
                color: 'purple lighten-1',
            },
            {
                from: 'LESCO',
                discos: 'Lahore Electric Supply Company',
                link: 'http://lesco.gov.pk/',
                color: 'lime lighten-1',
            },
            {
                from: 'MEPCO',
                discos: 'Multan Electric Power Company',
                link: 'http://mepco.com.pk/',
                color: 'cyan lighten-1',
            },
            {
                from: 'PESCO',
                discos: 'Peshawar Electric Power Company',
                link: 'http://pesco.com.pk/',
                color: 'teal lighten-1',
            },
            {
                from: 'QESCO',
                discos: 'Quetta Electric Supply Company',
                link: 'http://qesco.com.pk/',
                color: 'lime lighten-1',
            },
            {
                from: 'TESCO',
                discos: 'Tribal Electric Supply Company',
                link: 'http://tesco.gov.pk/',
                color: 'deep-purple lighten-1',
            },
        ],
        specificDisco:[],
        chartOptions: {
            chart: {
                height: 350,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#0b69b7', '#f60e22'],
            stroke: {
                curve: 'smooth'
            },
            title: {
                text: 'Demand/Drawn  (' + moment().format('DD-MMM-YYYY') + ')',
                align: 'left'
            },
            grid: {
                borderColor: '#1568a5',
                row: {
                    colors: ['#bacdec', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'],
                title: {
                    text: 'Time (Hours)'
                }
            },
            yaxis: {
                title: {
                    text: 'MW'
                },
                min: 50,
                max: 2500
            },
            legend: {
                show: true,
                showForSingleSeries: true,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5
            }
        },
        items: ['fesco', 'gepco', 'hesco', 'pesco', 'sepco', 'tesco', 'qesco', 'lesco', 'iesco', 'mepco', 'kesc'],
        discoName: "",
        flag: false,
        series: [],
        totaldrawnLoad: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        totaldemandLoad: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    }),
    mounted() {
    },
    watch: {
        discoName(name) {
            this.flag = true;
            this.specificDisco.push(_.find(this.discoDetail, {from:this.discoName.toUpperCase()}));
            this.fetchdemandData(name);
            this.fetchdrawnData(name);

        }
    },
    methods: {
        fetchdemandData() {
            axios.get('api/discos/demand')
                .then(response => {
                    let discos=_.map(response.data,this.discoName);
                    response.data.forEach((item,key) => {
                        let timelapse = item.drawn_time.split(':')[1];
                        let i = item.drawn_time.split(' ')[1].split(':')[0];
                        i = i < 10 ? i.toString()[1] : i;
                        if (timelapse > 50 && timelapse < 59)
                            ++i;

                        this.totaldemandLoad[i] = discos[key];
                    })
                })
                .catch(error => console.log(error))
        },
        fetchdrawnData() {
            axios.get('api/discos/loaddrawn')
                .then(response => {
                    let discos=_.map(response.data,this.discoName);
                    response.data.forEach((item,key) => {
                        let timelapse = item.drawn_time.split(':')[1];
                        let i = item.drawn_time.split(' ')[1].split(':')[0];
                        i = i < 10 ? i.toString()[1] : i;
                        if (timelapse > 50 && timelapse < 59)
                            ++i;

                        this.totaldrawnLoad[i] = discos[key];
                    })
                    this.series = [{
                        name: "Drawn Load ",
                        data: this.totaldrawnLoad
                    }, {
                        name: "Demand Load ",
                        data: this.totaldemandLoad
                    }]
                })
                .catch(error => console.log(error))
        }
    }
}
</script>

<style scoped>

</style>
