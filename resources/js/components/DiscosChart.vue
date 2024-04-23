<template>
    <div>
        <highcharts :constructorType="'mapChart'" class="hc" :options="chartOptions" ref="chart"></highcharts>
    </div>
</template>

<script>
import worldMap from '@highcharts/map-collection/custom/world.geo.json'

export default {
    data() {
        return {
            chartOptions: {
                chart: {
                    map: worldMap
                },
                title: {
                    text: 'Highmaps basic demo'
                },
                subtitle: {
                    text: 'Source map: <a href="http://code.highcharts.com/mapdata/custom/world.js">World, Miller projection, medium resolution</a>'
                },
                mapNavigation: {
                    enabled: true,
                    buttonOptions: {
                        alignTo: 'spacingBox'
                    }
                },
                colorAxis: {
                    min: 0
                },
                series: [{
                    name: 'Random data',
                    states: {
                        hover: {
                            color: '#BADA55'
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    },
                    allAreas: false,
                    data: [
                        ['pk', 85]
                    ]
                }]
            }
        };
    }
};
</script>
