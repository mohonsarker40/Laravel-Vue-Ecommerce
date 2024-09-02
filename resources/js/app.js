import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import App from './App.vue'
import route from './routes'

import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios);

import httpMixin from './mixin/httpMixin.js'
import commonMixin from './mixin/commonMixin'
Vue.mixin(httpMixin);
Vue.mixin(commonMixin);

// import toastr from 'toastr';
// import 'toastr/build/toastr.min.css';
// Vue.use(toastr);




const router = new VueRouter({
    mode: 'history',
    routes: route,
    linkActiveClass: 'active'
});

const vue = new Vue({
    el : '#app',
    components : {App},
    router,axios

});

