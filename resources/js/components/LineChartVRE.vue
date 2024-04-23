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
            windSpeed: [0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00],
            Generation: [0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00],
            availableCapacity: [0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00],
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
                colors: ['#77B6EA', '#dd0c0c', '#090606'],
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: 'VRE',
                    align: 'left'
                },
                grid: {
                    borderColor: '#1568a5',
                    row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
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
                        text: '(MW)'
                    },
                    min: 0,
                    max: 1500
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
            currentDate: moment().format('DD-MMM-YYYY'),
        }
    },
    mounted() {
        this.prevdayAvailablityData();
        this.genData();
    },
    created() {
        // this.fetchSmsData();
    },
    methods: {
        prevdayAvailablityData() {
            axios.get('http://smdapi.azurewebsites.net/Forecast/GetPreviousDayAvailability', {headers: {"Authorization": `32e06722cc36c9eb21d7046b85070b9c`}})
                .then(response => {
                    this.compilePrevData(response.data);
                })
                .catch(error => console.log(error));
        },
        genData() {
            axios.get('http://smdapi.azurewebsites.net/Forecast/GetPreviousDayGeneration', {headers: {"Authorization": `32e06722cc36c9eb21d7046b85070b9c`}})
                .then(response => {


                    // const key = 'IppName';
                    // const arrayUniqueByKey = [...new Map(this.ippsData.map(item =>
                    //     [item[key], item])).values()];
                    // let len = Object.keys(arrayUniqueByKey).length;
                    this.compileData(response.data);
                })
                .catch(error => console.log(error));
        },
        compilePrevData(pc) {
            pc.forEach((item) => {
                let t = item.StartTime.split("T")[1];
                switch (t) {
                    case '00:00:00':
                        this.availableCapacity[0] = this.availableCapacity[0] + item.AvailableCapacity;
                        break
                    case '01:00:00':
                        this.availableCapacity[1] = this.availableCapacity[1] + item.AvailableCapacity;
                        break
                    case '02:00:00':
                        this.availableCapacity[2] = this.availableCapacity[2] + item.AvailableCapacity;
                        break
                    case '03:00:00':
                        this.availableCapacity[3] = this.availableCapacity[3] + item.AvailableCapacity;
                        break
                    case '04:00:00':
                        this.availableCapacity[4] = this.availableCapacity[4] + item.AvailableCapacity;
                        break
                    case '05:00:00':
                        this.availableCapacity[5] = this.availableCapacity[5] + item.AvailableCapacity;
                        break
                    case '06:00:00':
                        this.availableCapacity[6] = this.availableCapacity[6] + item.AvailableCapacity;
                        break
                    case '07:00:00':
                        this.availableCapacity[7] = this.availableCapacity[7] + item.AvailableCapacity;
                        break
                    case '08:00:00':
                        this.availableCapacity[8] = this.availableCapacity[8] + item.AvailableCapacity;
                        break
                    case '09:00:00':
                        this.availableCapacity[9] = this.availableCapacity[9] + item.AvailableCapacity;
                        break
                    case '10:00:00':
                        this.availableCapacity[10] = this.availableCapacity[10] + item.AvailableCapacity;
                        break
                    case '11:00:00':
                        this.availableCapacity[11] = this.availableCapacity[11] + item.AvailableCapacity;
                        break
                    case '12:00:00':
                        this.availableCapacity[12] = this.availableCapacity[12] + item.AvailableCapacity;
                        break
                    case '13:00:00':
                        this.availableCapacity[13] = this.availableCapacity[13] + item.AvailableCapacity;
                        break
                    case '14:00:00':
                        this.availableCapacity[14] = this.availableCapacity[14] + item.AvailableCapacity;
                        break
                    case '15:00:00':
                        this.availableCapacity[15] = this.availableCapacity[15] + item.AvailableCapacity;
                        break
                    case '16:00:00':
                        this.availableCapacity[16] = this.availableCapacity[16] + item.AvailableCapacity;
                        break
                    case '17:00:00':
                        this.availableCapacity[17] = this.availableCapacity[17] + item.AvailableCapacity;
                        break
                    case '18:00:00':
                        this.availableCapacity[18] = this.availableCapacity[18] + item.AvailableCapacity;
                        break
                    case '19:00:00':
                        this.availableCapacity[19] = this.availableCapacity[19] + item.AvailableCapacity;
                        break
                    case '20:00:00':
                        this.availableCapacity[20] = this.availableCapacity[20] + item.AvailableCapacity;
                        break
                    case '21:00:00':
                        this.availableCapacity[21] = this.availableCapacity[21] + item.AvailableCapacity;
                        break
                    case '22:00:00':
                        this.availableCapacity[22] = this.availableCapacity[22] + item.AvailableCapacity;
                        break
                    case '23:00:00':
                        this.availableCapacity[23] = this.availableCapacity[23] + item.AvailableCapacity;
                        break
                }
            });
            this.availableCapacity.forEach((aval, index) => {
                this.availableCapacity[index] = aval.toFixed(2);
            })
            // console.log(this.availableCapacity)

        },
        compileData(d) {
            d.forEach((item) => {
                let t = item.StartTime.split("T")[1];
                switch (t) {
                    case '00:00:00':
                        this.windSpeed[0] = this.windSpeed[0] + item.WindSpeed;
                        this.Generation[0] = this.Generation[0] + item.Generation;
                        break
                    case '01:00:00':
                        this.windSpeed[1] = this.windSpeed[1] + item.WindSpeed;
                        this.Generation[1] = this.Generation[1] + item.Generation;
                        break
                    case '02:00:00':
                        this.windSpeed[2] = this.windSpeed[2] + item.WindSpeed;
                        this.Generation[2] = this.Generation[2] + item.Generation;
                        break
                    case '03:00:00':
                        this.windSpeed[3] = this.windSpeed[3] + item.WindSpeed;
                        this.Generation[3] = this.Generation[3] + item.Generation;
                        break
                    case '04:00:00':
                        this.windSpeed[4] = this.windSpeed[4] + item.WindSpeed;
                        this.Generation[4] = this.Generation[4] + item.Generation;
                        break
                    case '05:00:00':
                        this.windSpeed[5] = this.windSpeed[5] + item.WindSpeed;
                        this.Generation[5] = this.Generation[5] + item.Generation;
                        break
                    case '06:00:00':
                        this.windSpeed[6] = this.windSpeed[6] + item.WindSpeed;
                        this.Generation[6] = this.Generation[6] + item.Generation;
                        break
                    case '07:00:00':
                        this.windSpeed[7] = this.windSpeed[7] + item.WindSpeed;
                        this.Generation[7] = this.Generation[7] + item.Generation;
                        break
                    case '08:00:00':
                        this.windSpeed[8] = this.windSpeed[8] + item.WindSpeed;
                        this.Generation[8] = this.Generation[8] + item.Generation;
                        break
                    case '09:00:00':
                        this.windSpeed[9] = this.windSpeed[9] + item.WindSpeed;
                        this.Generation[9] = this.Generation[9] + item.Generation;
                        break
                    case '10:00:00':
                        this.windSpeed[10] = this.windSpeed[10] + item.WindSpeed;
                        this.Generation[10] = this.Generation[10] + item.Generation;
                        break
                    case '11:00:00':
                        this.windSpeed[11] = this.windSpeed[11] + item.WindSpeed;
                        this.Generation[11] = this.Generation[11] + item.Generation;
                        break
                    case '12:00:00':
                        this.windSpeed[12] = this.windSpeed[12] + item.WindSpeed;
                        this.Generation[12] = this.Generation[12] + item.Generation;
                        break
                    case '13:00:00':
                        this.windSpeed[13] = this.windSpeed[13] + item.WindSpeed;
                        this.Generation[13] = this.Generation[13] + item.Generation;
                        break
                    case '14:00:00':
                        this.windSpeed[14] = this.windSpeed[14] + item.WindSpeed;
                        this.Generation[14] = this.Generation[14] + item.Generation;
                        break
                    case '15:00:00':
                        this.windSpeed[15] = this.windSpeed[15] + item.WindSpeed;
                        this.Generation[15] = this.Generation[15] + item.Generation;
                        break
                    case '16:00:00':
                        this.windSpeed[16] = this.windSpeed[16] + item.WindSpeed;
                        this.Generation[16] = this.Generation[16] + item.Generation;
                        break
                    case '17:00:00':
                        this.windSpeed[17] = this.windSpeed[17] + item.WindSpeed;
                        this.Generation[17] = this.Generation[17] + item.Generation;
                        break
                    case '18:00:00':
                        this.windSpeed[18] = this.windSpeed[18] + item.WindSpeed;
                        this.Generation[18] = this.Generation[18] + item.Generation;
                        break
                    case '19:00:00':
                        this.windSpeed[19] = this.windSpeed[19] + item.WindSpeed;
                        this.Generation[19] = this.Generation[19] + item.Generation;
                        break
                    case '20:00:00':
                        this.windSpeed[20] = this.windSpeed[20] + item.WindSpeed;
                        this.Generation[20] = this.Generation[20] + item.Generation;
                        break
                    case '21:00:00':
                        this.windSpeed[21] = this.windSpeed[21] + item.WindSpeed;
                        this.Generation[21] = this.Generation[21] + item.Generation;
                        break
                    case '22:00:00':
                        this.windSpeed[22] = this.windSpeed[22] + item.WindSpeed;
                        this.Generation[22] = this.Generation[22] + item.Generation;
                        break
                    case '23:00:00':
                        this.windSpeed[23] = this.windSpeed[23] + item.WindSpeed;
                        this.Generation[23] = this.Generation[23] + item.Generation;
                        break
                }
            });
            this.windSpeed.forEach((val, index) => {
                let result = (val / 15) * 100;
                this.windSpeed[index] = result.toFixed(2);
            })
            this.Generation.forEach((genval, index) => {
                this.Generation[index] = genval.toFixed(2);
            })
            this.series = [{
                name: "WindSpeed (MF 500)",
                data: this.windSpeed
            }, {
                name: "Generation",
                data: this.Generation
            }, {
                name: "Available Capacity",
                data: this.availableCapacity
            }]
        },
        fetchSmsData() {
            let email = 'npcc@ntdc.gov.pk';
            let password = '1525173';
            axios.post("https://meter.ntdc.com.pk/MetersStatusP/MeteringServices", {
                email: email, password: password, option: 'disco_data', start_time: '27-10-2021  13:00:00'
            })
                .then(response => {
                    console.log(response.data)
                })
                .catch(error => console.log(error));

        },

    }
}
</script>

<style scoped>

</style>
