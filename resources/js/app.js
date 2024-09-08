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
import Vuex from 'vuex'
import VeeValidate from "vee-validate";


Vue.mixin(httpMixin);
Vue.mixin(commonMixin);
Vue.use(Vuex);

Vue.use(VeeValidate, {
    events : 'index.js',
    fieldsBagName : ''
})

import Toast from 'vue-toastification';
import 'vue-toastification/dist/index.css';

Vue.use(Toast);



const router = new VueRouter({
    mode: 'history',
    routes: route,
    linkActiveClass: 'active'
});
import {store as storeData} from "./store";
const store = new Vuex.Store(storeData)



const vue = new Vue({
    el : '#app',
    components : {App},
    router,axios,store

});

