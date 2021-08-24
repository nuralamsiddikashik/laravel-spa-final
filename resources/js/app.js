require('./bootstrap');
import Vue from 'vue';
import routes from './router/index';


// Use to alert system toastr 
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



// Auth system code 
function loggedIn(){
    return localStorage.getItem('token')
}
routes.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        // this route requires auth, check if logged in
        // if not, redirect to login page.
        if (!loggedIn()) {
            next({
            path: '/app/login',
            })
        } else {
            next()
        }
    } else if(to.matched.some(record => record.meta.guest)) {
        if (loggedIn()) {
            next({
            path: '/app',
            })
        } else {
            next()
        }
    } else {
        next() // make sure to always call next()!
    }
})

const app = new Vue({
    el: '#app', 
    router:routes,
 
});