<template>
  <div class="container">
      <div class="card w-100">
          <div class="card-header bg-info text-white">
              NCC Data
          </div>
         <div class="card-body">
             <div class="row">
                 <div class="col-6">
                     <apexchart type="line" height="350" :options="chartoneOptions" :series="seriesOne"></apexchart>
                 </div>
                 <div class="col-6">
                     <apexchart type="line" height="350" :options="charttwoOptions" :series="seriesTwo"></apexchart>
                 </div>
             </div>
         </div>
      </div>
  </div>
</template>

<script>
import moment from 'moment';

export default {
    data() {
        return {
            seriesOne:[
                {
                    name: "Total Generation",
                    data: [10547,10037,9613.498,9598.3,9383.7,9523.4,9592.997,10526,11329,11695,11887,11640,11779,11754,11651,11743,12028,12421,12740,12498,12139,11800,11188,10476]
                }
            ],
            seriesTwo:[
                {
                    name: "System Demand",
                    data: [11575.64,11257.3,11171.65,11039.13,11153.69,11770.9,12774.64,13599.76,13703.91,14014.22,14024.51,14193.58,14374.06,14196.21,14126.6,14131.51,14541.29,14761.18,14660.02,14441.23,13733.74,13212.39,12594.84,12168.36]
                }
            ],
            chartoneOptions: {
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
                colors: [ '#cd0808'],
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: 'Generation (' + moment().format('DD-MMM-YYYY') + ')',
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
                        text: 'Energy'
                    },
                    min: 1000,
                    max: 20000
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
            charttwoOptions: {
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
                    text: 'Demand (' + moment().format('DD-MMM-YYYY') + ')',
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
                        text: 'Energy'
                    },
                    min: 1000,
                    max: 20000
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
        }
    },
    mounted() {

        //  Fire.$on('updateGraph',()=>{
        //      this.fetchToken();
        //      this.fetchUpdatedData();
        //  })


    },
    created() {

    },
    watch: {},
    methods:{

    }
}
</script>

<style scoped>

</style>
