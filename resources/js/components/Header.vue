<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-center" style="background-color: #1568a5">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Header" aria-controls="Header" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  d-flex justify-content-center" id="Header">
                <v-btn
                    text
                    link
                    color="white"
                    to="/"
                >
                    Home
                </v-btn>
                <v-menu
                    open-on-hover
                    bottom
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            text
                            color="white"
                            v-bind="attrs"
                            v-on="on"
                        >
                            About Us
                        </v-btn>
                    </template>

                    <v-list-item class="bg-light" link v-for="(menu,index) in AboutUsMenus" :key="index" :to="menu.route">
                        <v-list-item-title>{{menu.title}}</v-list-item-title>
                    </v-list-item>
                </v-menu>
                <v-menu
                    open-on-hover
                    bottom
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            text
                            color="white"
                            v-bind="attrs"
                            v-on="on"
                        >
                            System Operations
                        </v-btn>
                    </template>
                    <v-list-item class="bg-light" link v-for="(menu,index) in SystemOperationsMenus" :key="index" :to="menu.route">
                        <v-list-item-title>{{menu.title}}</v-list-item-title>
                    </v-list-item>
                </v-menu>
                <v-menu
                    open-on-hover
                    bottom
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            text
                            color="white"
                            v-bind="attrs"
                            v-on="on"
                        >
                            System Planning
                        </v-btn>
                    </template>
                    <v-list-item class="bg-light" link v-for="(menu,index) in SystemPlaningMenus" :key="index" :to="menu.route">
                        <v-list-item-title>{{menu.title}}</v-list-item-title>
                    </v-list-item>
                </v-menu>
                <v-menu
                    open-on-hover
                    bottom
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            text
                            color="white"
                            v-bind="attrs"
                            v-on="on"
                        >
                            Stack Holders
                        </v-btn>
                    </template>
                    <v-list-item class="bg-light" link v-for="(menu,index) in SectorParticipanteMenus" :key="index" :to="menu.route">
                        <v-list-item-title>{{menu.title}}</v-list-item-title>
                    </v-list-item>
                </v-menu>
                <v-menu
                    open-on-hover
                    bottom
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            text
                            color="white"
                            v-bind="attrs"
                            v-on="on"
                        >
                            Library
                        </v-btn>
                    </template>
                    <v-list-item class="bg-light" link v-for="(menu,index) in LibraryMenus" :key="index" :to="menu.route">
                        <v-list-item-title>{{menu.title}}</v-list-item-title>
                    </v-list-item>
                </v-menu>
                <v-menu
                    open-on-hover
                    bottom
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            text
                            color="white"
                            v-bind="attrs"
                            v-on="on"
                        >

                            Committee & Groups
                        </v-btn>
                    </template>
                    <v-list-item class="bg-light" link v-for="(menu,index) in CGMenus" :key="index" :to="menu.route">
                        <v-list-item-title>{{menu.title}}</v-list-item-title>
                    </v-list-item>
                </v-menu>
                <v-menu
                    open-on-hover
                    bottom
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            text
                            color="white"
                            v-bind="attrs"
                            v-on="on"
                        >

                            Market & Operations
                        </v-btn>
                    </template>
                    <v-list-item class="bg-light" link v-for="(menu,index) in MOpenus" :key="index" :to="menu.route">
                        <v-list-item-title>{{menu.title}}</v-list-item-title>
                    </v-list-item>
                </v-menu>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    data () {
        return {
            name: "Header",
            AboutUsMenus: [
                {title: 'Our Mission & Vision', route: 'mission'},
                {title: 'Who We Are', route: 'who'},
                {title: 'Key Responsibilities', route: 'key'},
                {title: 'Organogram', route: 'organogram'},
                {title: 'BOD', route: 'bod'},
                {title: 'Team NPCC', route: 'tnpcc'},
                {title: 'Key Coporate Documents', route: 'kcdoc'},
                {title: 'Rules & Regulations', route: 'rules'},
                {title: 'Career', route: 'career'},
                {title: 'Trainings/Webinars', route: 'trainings'},
                {title: 'Contact Us', route: 'contactus'},
                {title: 'FAQS', route: 'faqs'},
            ],
            SystemOperationsMenus: [
                {title: 'Hierarchy', route: 'hierarchy'},
                {title: 'Functions', route: 'functions'}
            ],
            SystemPlaningMenus: [
                {title: 'Hierarchy', route: 'hierarchy'},
                {title: 'Functions', route: 'functions'},
                {title: 'Plan & Studies', route: 'pstudies'},
                {title: 'System Forecast', route: 'sforecast'},
                {title: 'Transmission Planing', route: 'tplanning'}
            ],
            SectorParticipanteMenus: [
                {title: 'Discos', route: 'discos'},
                {title: 'CPPA-G', route: 'cppa'},
                {title: 'MOE (Power Division)', route: 'moe'},
                {title: 'Nepra', route: 'nepra'},
                {title: 'PPIB', route: 'ppib'},
                {title: 'AEDB', route: 'aedb'},
                {title: 'SNGPL', route: 'sngpl'},
                {title: 'GHCL', route: 'ghcl'},
                {title: 'Wapda Hydel Power', route: 'whp'},
            ],
            LibraryMenus: [
                {title: 'Annual Plant Outage Schedule', route: 'aoutage'},
                {title: 'Annual Generation Plan', route: 'agen'},
                {title: 'Annual Fuel Plan', route: 'afplan'},
                {title: 'Annual/Monthly/Daily Transmission System Shutdown Plan', route: 'amdreport'},
                {title: 'Monthly Losses Report', route: 'mlreport'},
                {title: 'LDs Report', route: 'lds'},
                {title: 'SCADA Activity Report', route: 'scada'},
                {title: 'Load Management Report', route: 'loadreport'},
                {title: 'Out of Merit Generation from Reliabilility Must Run Plants', route: 'mgen'},
                {title: 'PCB Daily Reports', route: 'dreports'},
                {title: 'PCB Monthly Reports', route: 'mreports'}
            ],
            CGMenus: [
                {title: 'Committee', route: 'committee'},
                {title: 'News Room', route: 'nroom'},

            ],
            MOpenus: [
                {title: 'Real Time Charts', route: 'rtcharts'},
                {title: 'Market Data & Reports', route: 'mdreports'},
                {title: 'Market Performance', route: 'mperformance'},
                {title: 'Transmission Operations & Services', route: 'toservices'},
            ],
        }
    },

    methods: {

    }
}
</script>

<style>

</style>
