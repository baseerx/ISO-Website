<template>
    <apexchart type="pie" height="300" :options="chartOptions" :series="series"></apexchart>
</template>

<script>
export default {
    data() {
        return {
            series: [5648,739,465],
            chartOptions: {
                chart: {
                    height: 300,
                    type: 'donut',
                },
                fill:{
                    type:'gradient',
                },
                labels: ['Hydel', 'Wind', 'Solar'],
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: 'Renewables',
                    align: 'left'
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    floating: true,
                    offsetY: -25,
                    offsetX: -5
                }
            }
        }
    }
}
</script>

<style scoped>

</style>
