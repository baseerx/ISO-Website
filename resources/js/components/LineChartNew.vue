<template>
    <div>
        <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>
    </div>
</template>

<script>
import moment from 'moment';

export default {
    data() {
        return {
            totalGeneration:[],
            series: [],
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
                colors: ['#0b69b7'],
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: 'Total Generation (' + moment().format('DD-MMM-YYYY') + ')',
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
                        text: 'Generation (MW)'
                    },
                    min: 5000,
                    max: 15000
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
            currentHour: 0
        }
    },
    mounted() {
        this.getGenerationData();


        //  Fire.$on('updateGraph',()=>{
        //      this.fetchToken();
        //      this.fetchUpdatedData();
        //  })
    },
    created() {
    },
    watch: {},
    methods: {

        getGenerationData() {
            let dt = moment().format("YYYY-MM-DD");
            axios.get('api/ncp/'+dt)
                .then(response => {
                    let dataRefined=_.values(_.omit(response.data[0], ['id','date']));
                    this.totalGeneration=dataRefined;
                    this.series = [
                        {
                            name: "Total Generation",
                            data: this.totalGeneration
                        }
                    ]
                })
                .catch(error => console.log(error))
        }
    }
}
</script>

<style scoped>

</style>
