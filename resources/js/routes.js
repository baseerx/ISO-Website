import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import VueGoogleCharts from 'vue-google-charts'

Vue.use(VueGoogleCharts);
window.Fire=new Vue();

const routes = [
    { path: '/', component: require('./components/Welcome').default },
    { path: '/who', component: require('./components/WhoWeAre').default },
    { path: '/discos', component: require('./components/Discos').default },
    { path: '/cppa', component: require('./components/Cppa').default },
    { path: '/moe', component: require('./components/Moe').default },
    { path: '/ppib', component: require('./components/Ppib').default },
    { path: '/testchart', component: require('./components/TestCharts').default },
];

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});

export default router
