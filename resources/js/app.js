/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/Welcome.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/Welcome.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vuetify from 'vuetify';
Vue.use(Vuetify);

//Import View Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//Routes
import Router from './routes.js';

import VueApexCharts from 'vue-apexcharts'
Vue.use(VueApexCharts)

import HighchartsVue from 'highcharts-vue'
import Highcharts from "highcharts";
import Maps from "highcharts/modules/map";
Vue.use(HighchartsVue)
Maps(Highcharts);


Vue.component('apexchart', VueApexCharts)

const app = new Vue({
    el: '#app',
    router:Router,
    vuetify: new Vuetify(),
});
