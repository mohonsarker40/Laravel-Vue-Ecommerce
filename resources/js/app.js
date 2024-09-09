import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import App from './App.vue'
import route from './routes'

import axios from 'axios'
import VueAxios from 'vue-axios'
import httpMixin from './mixin/httpMixin.js'
import commonMixin from './mixin/commonMixin'
import Vuex from 'vuex'
import VeeValidate from "vee-validate";
// import { defineRule } from 'vee-validate';


Vue.use(VueAxios, axios);
Vue.mixin(httpMixin);
Vue.mixin(commonMixin);
Vue.use(Vuex);
Vue.use(VeeValidate, {
    events : 'input',
    fieldsBagName : ''
});

//global vee-validate
// defineRule('required', value => {
//     if (!value || !value.length) {
//         return 'This field is required';
//     }
//     return true;
// });
// defineRule('email', value => {
//     if (!value || !value.length) {
//         return true;
//     }
//     // Check if email
//     if (!/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/.test(value)) {
//         return 'This field must be a valid email';
//     }
//     return true;
// });


//toast
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

