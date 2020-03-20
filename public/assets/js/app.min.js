window.Vue = require('vue');
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
require('./jquery');
require('./bootstrap2');
require('./vendor/bootstrap.bundle');
require('./app2');
require('./vendor');
require('./vendor/metismenujs.min');
require('./vendor/jquery.slimscroll');
require('./vendor/feather.min');


Vue.component('app', require('./components/AppComponent.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('residentes', require('./components/ResidentesComponent.vue').default);
Vue.component('estacionamientos', require('./components/EstacionamientosComponent.vue').default);
Vue.component('inmuebles', require('./components/InmueblesComponent.vue').default);

// Vue.component('infinite-loading', require('vue-infinite-loading').default);

import router from './routes'

const app = new Vue({
    el: '#app',
    router
});
