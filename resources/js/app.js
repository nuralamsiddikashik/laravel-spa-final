require('./bootstrap');
import Vue from 'vue';
import routes from './router/index';

const app = new Vue({
    el: '#app', 
    router:routes,

});