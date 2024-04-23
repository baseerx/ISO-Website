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
            ippsData: [],
            availabilityCapacity: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            totaldrawnLoad: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            totaldemandLoad: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            hourlygenData: [],
            meterCheck:{},
            series: [],
            displayText:"",
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
                colors: ['#0b69b7', '#0a0505', '#f60e22', '#229106'],
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: 'Available Capacity: '+moment().format('DD-MM-YYYY'),
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
                        text: 'Available Capacity'
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
            currentHour: 0
        }
    },
    mounted() {
        this.getGenerationData();
        this.fetchUpdatedData();
        this.fetchDemandData();
        this.genData();

        //  Fire.$on('updateGraph',()=>{
        //      this.fetchToken();
        //      this.fetchUpdatedData();
        //  })
    },
    created() {
        // this.fetchToken()
        setInterval(() => this.fetchToken(), 90000)


    },
    watch: {},
    methods: {
        genData() {
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
        compileData() {
            this.ippsData.forEach((item) => {
                if (item.HOURLY_DATA_TYPE == 'DAC') {
                    item.detailsList.forEach((a) => {
                        let t = a.TARGET_HOUR;
                        switch (t) {
                            case '00:00':
                                this.availabilityCapacity[0] = parseInt(this.availabilityCapacity[0]) + parseInt(a.AVAILABILITY);
                                break
                            case '01:00':
                                this.availabilityCapacity[1] = parseInt(this.availabilityCapacity[1]) + parseInt(a.AVAILABILITY);
                                break
                            case '02:00':
                                this.availabilityCapacity[2] = parseInt(this.availabilityCapacity[2]) + parseInt(a.AVAILABILITY);
                                break
                            case '03:00':
                                this.availabilityCapacity[3] = parseInt(this.availabilityCapacity[3]) + parseInt(a.AVAILABILITY);
                                break
                            case '04:00':
                                this.availabilityCapacity[4] = parseInt(this.availabilityCapacity[4]) + parseInt(a.AVAILABILITY);
                                break
                            case '05:00':
                                this.availabilityCapacity[5] = parseInt(this.availabilityCapacity[5]) + parseInt(a.AVAILABILITY);
                                break
                            case '06:00':
                                this.availabilityCapacity[6] = parseInt(this.availabilityCapacity[6]) + parseInt(a.AVAILABILITY);
                                break
                            case '07:00':
                                this.availabilityCapacity[7] = parseInt(this.availabilityCapacity[7]) + parseInt(a.AVAILABILITY);
                                break
                            case '08:00':
                                this.availabilityCapacity[8] = parseInt(this.availabilityCapacity[8]) + parseInt(a.AVAILABILITY);
                                break
                            case '09:00':
                                this.availabilityCapacity[9] = parseInt(this.availabilityCapacity[9]) + parseInt(a.AVAILABILITY);
                                break
                            case '10:00':
                                this.availabilityCapacity[10] = parseInt(this.availabilityCapacity[10]) + parseInt(a.AVAILABILITY);
                                break
                            case '11:00':
                                this.availabilityCapacity[11] = parseInt(this.availabilityCapacity[11]) + parseInt(a.AVAILABILITY);
                                break
                            case '12:00':
                                this.availabilityCapacity[12] = parseInt(this.availabilityCapacity[12]) + parseInt(a.AVAILABILITY);
                                break
                            case '13:00':
                                this.availabilityCapacity[13] = parseInt(this.availabilityCapacity[13]) + parseInt(a.AVAILABILITY);
                                break
                            case '14:00':
                                this.availabilityCapacity[14] = parseInt(this.availabilityCapacity[14]) + parseInt(a.AVAILABILITY);
                                break
                            case '15:00':
                                this.availabilityCapacity[15] = parseInt(this.availabilityCapacity[15]) + parseInt(a.AVAILABILITY);
                                break
                            case '16:00':
                                this.availabilityCapacity[16] = parseInt(this.availabilityCapacity[16]) + parseInt(a.AVAILABILITY);
                                break
                            case '17:00':
                                this.availabilityCapacity[17] = parseInt(this.availabilityCapacity[17]) + parseInt(a.AVAILABILITY);
                                break
                            case '18:00':
                                this.availabilityCapacity[18] = parseInt(this.availabilityCapacity[18]) + parseInt(a.AVAILABILITY);
                                break
                            case '19:00':
                                this.availabilityCapacity[19] = parseInt(this.availabilityCapacity[19]) + parseInt(a.AVAILABILITY);
                                break
                            case '20:00':
                                this.availabilityCapacity[20] = parseInt(this.availabilityCapacity[20]) + parseInt(a.AVAILABILITY);
                                break
                            case '21:00':
                                this.availabilityCapacity[21] = parseInt(this.availabilityCapacity[21]) + parseInt(a.AVAILABILITY);
                                break
                            case '22:00':
                                this.availabilityCapacity[22] = parseInt(this.availabilityCapacity[22]) + parseInt(a.AVAILABILITY);
                                break
                            case '23:00':
                                this.availabilityCapacity[23] = parseInt(this.availabilityCapacity[23]) + parseInt(a.AVAILABILITY);

                                break
                        }
                    })
                }
            });
            this.$emit('fetchData', this.availabilityCapacity[23])


        },
        fetchToken() {
            let email = 'nppccapi@gmail.com';
            let password = 'pitc@123';


            axios.post("http://117.20.28.190:8082/galaxy/api/login", {
                email: email, password: password, headers: {
                    crossdomain: true
                }
            })
                .then(response => {
                    let token = response.data.token;
                    this.compilePitcData(token);
                })
                .catch(error => console.log(error));
        },
        compilePitcData(token) {
            const config = {
                headers: {Authorization: `Bearer ${token}`}
            };
            axios.get('http://117.20.28.190:8082/galaxy/api/getrecords', config)
                .then(response => {
                    this.storeLoadDrawnRecord(response.data.history);
                })
                .catch(error => console.log(error))
        },
        storeLoadDrawnRecord(d) {
            // console.log(d.drawn_load_time)
            axios.post('api/ldrawn', {
                consumption_id: d.consumption_id,
                drawn_time: d.load_drawn_time,
                fesco: d.drawn_load_fesco,
                gepco: d.drawn_load_gepco,
                hesco: d.drawn_load_hesco,
                iesco: d.drawn_load_iesco,
                kesc: d.drawn_load_kesc,
                lesco: d.drawn_load_lesco,
                mepco: d.drawn_load_mepco,
                pesco: d.drawn_load_pesco,
                qesco: d.drawn_load_qesco,
                sepco: d.drawn_load_sepco,
                tesco: d.drawn_load_tesco
            })
                .then(response => {
                    this.updateLoadDemand(d);
                })
                .catch(error => console.log(error))
        },
        fetchUpdatedData() {
            axios.get('api/ldrawn')
                .then(response => {
                    response.data.forEach((item) => {
                        let timelapse = item.drawn_time.split(':')[1];
                        let i = item.drawn_time.split(' ')[1].split(':')[0];
                        i = i < 10 ? i.toString()[1] : i;
                        if (timelapse > 50 && timelapse < 59)
                            ++i;
                        this.totaldrawnLoad[i] = item.totalLoad;
                    })
                })
                .catch(error => console.log(error))
        },
        updateLoadDemand(d) {
            axios.post('api/ldemand', {
                consumption_id: d.consumption_id,
                drawn_time: d.load_drawn_time,
                fesco: d.demanded_load_fesco,
                gepco: d.demanded_load_gepco,
                hesco: d.demanded_load_hesco,
                iesco: d.demanded_load_iesco,
                kesc: d.demanded_load_kesc,
                lesco: d.demanded_load_lesco,
                mepco: d.demanded_load_mepco,
                pesco: d.demanded_load_pesco,
                qesco: d.demanded_load_qesco,
                sepco: d.demanded_load_sepco,
                tesco: d.demanded_load_tesco
            })
                .then(response => {
                })
                .catch(error => console.log(error))
        },
        fetchDemandData() {
            axios.get('api/ldemand')
                .then(response => {
                    response.data.forEach((item) => {
                        let timelapse = item.drawn_time.split(':')[1];
                        let i = item.drawn_time.split(' ')[1].split(':')[0];
                        i = i < 10 ? i.toString()[1] : i;
                        if (timelapse > 50 && timelapse < 59)
                            ++i;

                        this.totaldemandLoad[i] = item.totalLoad;
                    })
                    // this.getGenerationData();
                })
                .catch(error => console.log(error))
        },
        getGenerationData() {
            axios.get('api/smsdata/generation_hourly_data')
                .then(response => {

                    let timestamp=moment().format('DD-MM-YYYY HH:00:00');

                     this.meterCheck=_.find(response.data, {time:timestamp});
                    response.data.forEach((item) => {
                        let i = item.time.split(' ')[1].split(':')[0];
                        i = i < 10 ? i.toString()[1] : i;
                        this.hourlygenData[i] = item.totalGeneration+'-'+parseInt(item.noOfMetersLive)+'/'+(parseInt(item.totalMeters)+parseInt(item.noOfMetersLive));

                    })
                    // console.log(this.totalMeters)
                    // console.log(this.noOfMetersLive)
                    this.series = [
                        {
                            name: "Drawn Load ",
                            data: this.totaldrawnLoad
                        }, {
                            name: "Demand Load ",
                            data: this.totaldemandLoad
                        }, {
                            name: "Generation Time",
                            data: this.hourlygenData
                        },
                        {
                            name: "DAC ",
                            data: this.availabilityCapacity
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
