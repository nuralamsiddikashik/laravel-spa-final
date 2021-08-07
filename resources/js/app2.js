require('./bootstrap');
import Vue from 'vue';
import routes from './front-route/index';

const app = new Vue({
    el: '#content', 
    router:routes,

});