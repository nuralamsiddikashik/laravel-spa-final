require('./bootstrap');
import Vue from 'vue';

// Use to route for frontend 
import routes from './front-route/index';

// Use to vue-toastr alert 
import CxltToastr from 'cxlt-vue2-toastr'
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'

var toastrConfigs = {
    position: 'top right',
    showDuration: 1000, 
    timeOut:5000,
    closeButton:true, 
    showMethod: 'fadeIn', 
    hideMethod:'fadeOut'
}
Vue.use(CxltToastr, toastrConfigs)



const app = new Vue({
    el: '#content', 
    router:routes,

});