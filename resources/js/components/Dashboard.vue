<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <LineChart @fetchData="getTotalAvailablity"></LineChart>
<!--                <LineChartNew></LineChartNew>-->
            </div>
            <div class="col-4">
                <DonutChart></DonutChart>
<!--                <DonutChartNew></DonutChartNew>-->
            </div>
            <div class="col-4">
                <LineChartVRE></LineChartVRE>
            </div>
        </div>
    </div>
</template>
<script>
import {GChart} from "vue-google-charts";
import LineChart from "./LineChart";
import LineChartNew from "./LineChartNew";
import DonutChart from "./DonutChart";
import PieChart from "./PieChart";
import LineChartVRE from "./LineChartVRE";
import DonutChartNew from "./DonutChartNew";

export default {
    name: "App",
    components: {
        GChart,
        LineChart,
        DonutChart,
        LineChartNew,
        PieChart,
        LineChartVRE,
        DonutChartNew
    },
    data() {
        return {
            PieChartData: [
                ['Installed', 'Percentage Share'],
                ['Total Hydal', 9874],
                ['Coal', 4770],
                ['Gas', 4529],
                ['RLNG', 7325],
                ['RFO', 6274],
                ['Nuclear', 2490],
                ['Baggase', 364],
                ['Wind', 1235],
                ['Solar', 400],
            ],
            PieChartOptions: {
                height: 400,
                width: 500,
                is3D: true,
                title: "Fuel Mix",
            },
            LineChartData: [
                ["Time", "System Demand", "Generation Requirement"],
                [1, 22561.63, 20293.49],
                [2, 22259.10, 20042.27],
                [3, 21853.46, 19797.6],
                [4, 21411.03, 19201.81],
                [5, 21184.01, 19011.4],
                [6, 21072.06, 18782.04],
                [7, 21324.13, 18514.96],
                [8, 21504.54, 18835.18],
                [9, 22152.43, 19686.25],
                [10, 22537.91, 19787.85],
                [11, 22683.79, 19864.71],
                [12, 23060.06, 20335.59],
                [13, 23433.88, 20335.39],
                [14, 23412.97, 20539.94],
                [15, 23525.40, 21004.88],
                [16, 23528.70, 21129.86],
                [17, 23523.96, 20947.74],
                [18, 23100.98, 20624.66],
                [19, 23098.73, 20548.69],
                [20, 23271.46, 20671.13],
                [21, 23334.43, 20739.99],
                [22, 23472.44, 20782.07],
                [23, 23402.19, 20557.61],
                [24, 23099.05, 20629.61]
            ],
            LineChartOptions: {
                height: 400,
                width: 600,
                title: "System Demand Vs Generation Requirement",

            }

        };
    },
    methods:{
        getTotalAvailablity(data){
            this.$emit('fetchFromLine',data)
        }
    }
};
</script>

<style scoped>
.my-galery {
    background: url(/img/bg/map.png);
}
</style>
