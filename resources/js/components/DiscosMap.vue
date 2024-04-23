<template>
    <div class="bg-img p-0 m-0 container-fluid">
        <div class="d-flex justify-content-center">
            <div class="p-0 w-100">
                <div id="container"></div>
            </div>
            <div class="p-0 w-100">
                <div class="h-100" id="scontainer"></div>
            </div>
        </div>
    </div>
</template>

<script>
import DiscosChart from "./DiscosChart";

export default {
    components: {
        DiscosChart
    },
    data() {
        return {
            name: "DiscosMap"
        }
    },
    mounted() {
        // this.fetchToken();
this.displayChart()
    },
    created() {
    },
    methods: {
 displayChart(){
            var data = [
        ['pk-sd', 100],
        ['pk-ba', 200],
        ['pk-jk', 0],
        ['pk-na', 3],
        ['pk-nw', 150],
        ['pk-ta', 50],
        ['pk-is', 75],
        ['pk-pb', 300]
      ];
       Highcharts.mapChart('container', {
                        chart: {
                            map: 'countries/pk/pk-all'
                        },
                        title: {
                            text: 'Pakistan Load Map'
                        },

                        subtitle: {
                            text: 'Data Source: PITC '
                        },

                        mapNavigation: {
                            enabled: true,
                            buttonOptions: {
                                verticalAlign: 'bottom'
                            }
                        },

                        colorAxis: {
                            min: 0
                        },

                        series: [{
                            data: data,
                            name: 'Discos Data',
                            states: {
                                hover: {
                                    color: '#BADA55'
                                }
                            },
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}'
                            }
                        }]
                    });
        // Create the chart

}
,   fetchToken() {
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
                    let tribalTotal=response.data.history.drawn_load_tesco;
                    let nwfpTotal=response.data.history.drawn_load_pesco;
                    let federalTotal=response.data.history.drawn_load_iesco;
                    let punjabTotal=response.data.history.drawn_load_mepco+response.data.history.drawn_load_lesco+response.data.history.drawn_load_fesco+response.data.history.drawn_load_gepco;
                    let balochistanTotal=response.data.history.drawn_load_qesco;
                    let sindhTotal=response.data.history.drawn_load_kesc+response.data.history.drawn_load_sepco+response.data.history.drawn_load_hesco;
                    var data = [
        ['pk-sd', 100],
        ['pk-ba', 200],
        ['pk-jk', 0],
        ['pk-na', 3],
        ['pk-nw', 150],
        ['pk-ta', 50],
        ['pk-is', 75],
        ['pk-pb', 300]
      ];
// Create the chart
                    Highcharts.mapChart('container', {
                        chart: {
                            map: 'countries/pk/pk-all'
                        },
                        title: {
                            text: 'Pakistan Load Map'
                        },

                        subtitle: {
                            text: 'Data Source: PITC '+response.data.history.load_drawn_time
                        },

                        mapNavigation: {
                            enabled: true,
                            buttonOptions: {
                                verticalAlign: 'bottom'
                            }
                        },

                        colorAxis: {
                            min: 0
                        },

                        series: [{
                            data: data,
                            name: 'Discos Data',
                            states: {
                                hover: {
                                    color: '#BADA55'
                                }
                            },
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}'
                            }
                        }]
                    });
                    Highcharts.mapChart('scontainer', {
                        chart: {
                            map: 'countries/pk/pk-all-changed'
                        },

                        title: {
                            text: 'Pakistan Energy Cost Map'
                        },

                        subtitle: {
                            text: 'Data Source: <a href="http://code.highcharts.com/mapdata/countries/pk/pk-all-changed.js">Market Operator</a>'
                        },

                        mapNavigation: {
                            enabled: true,
                            buttonOptions: {
                                verticalAlign: 'bottom'
                            }
                        },

                        colorAxis: {
                            min: 0
                        },

                        series: [{
                            data: data,
                            name: 'Random data',
                            states: {
                                hover: {
                                    color: '#BADA55'
                                }
                            },
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}'
                            }
                        }]
                    });
                })
                .catch(error => console.log(error))
        },
    }
}
</script>

<style scoped>
.bg-img {
    /* The image used */
    background-image: url("/img/bg/map.png");

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    /* Needed to position the navbar */
    position: relative;
}

#container {
    height: 500px;
    min-width: 310px;
    max-width: 800px;
    margin: 0 auto;
}

.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}

</style>
