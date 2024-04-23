<template>
    <apexchart type="donut" height="380" :options="chartOptions" :series="series"></apexchart>
</template>

<script>
import moment from "moment";

export default {
    data() {
        return {
            fuelMixData:[],
            series: [],
            chartOptions: {
                chart: {
                    type: 'donut',
                },
                fill: {
                    type: 'gradient',

                    colors: ['#4a90fb','#6fe497','#f0af19','#e7415e','#775dd0']

                },
                labels: ['TOTAL HYDEL.', 'TOTAL GENCOS', 'TOTAL IPPs FOSSIL FUEL', 'TOTAL BAGASSE', 'TOTAL NUCLEAR', 'WIND ENERGY', 'SOLAR POWER'],
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
            let dt = moment().format("YYYY-MM-DD");
            axios.get('api/fuelmix/'+dt)
                .then(response => {
                    response.data.forEach(item=>{
                        this.fuelMixData.push(parseInt(item.total.split('.')[0]));
                    })
                    // let dataRefined=_.values(_.omit(response.data[0], ['id','date']));
                    // this.totalGeneration=dataRefined;

                    this.series = this.fuelMixData;
                })
                .catch(error => console.log(error))
        },
    }
}
</script>

<style scoped>

</style>
