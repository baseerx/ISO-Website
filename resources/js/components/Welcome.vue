<template>
    <v-app>
        <Section></Section>
        <v-main>
            <Slider></Slider>
            <DataBanner :totalavb="totalAvailablity"></DataBanner>
<!--            <Dashboard @fetchFromLine="getData"></Dashboard>-->
            <DashboardNew @fetchFromLine="getData"></DashboardNew>
            <DiscosMap></DiscosMap>
            <WeatherMain></WeatherMain>
            <Mission></Mission>
            <Footer></Footer>
        </v-main>
    </v-app>
</template>
<script>
import Header from "./Header";
import Footer from "./Footer";
import ContentSection from "./Content";
import Section from "./Section";
import Dashboard from "./Dashboard";
import DashboardNew from "./DashboardNew";
import Slider from "./Slider";
import DataBanner from "./DataBanner";
import DiscosMap from "./DiscosMap";
import DiscosChart from "./DiscosChart";
import Mission from "./Mission";
import WeatherTable from "./WeatherTable";
import WeatherMain from "./WeatherMain";

export default {
    components: {
        Header,
        Footer,
        ContentSection,
        Section,
        Dashboard,
        DashboardNew,
        Slider,
        DataBanner,
        DiscosMap,
        DiscosChart,
        Mission,
        WeatherTable,
        WeatherMain
    },
    data() {
        return {
            totalAvailablity: 0
        }
    },
    methods: {
        getData(d) {
            this.totalAvailablity = d;
        }
    }
}
</script>
