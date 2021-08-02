import Vue from 'vue';
import VueRouter from 'vue-router';
import Welcome from '../App.vue'
import Create from '../pages/Create.vue'; 
import Login from '../components/auth/Login.vue'; 

Vue.use(VueRouter);

const routes = new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/app',
            component: Welcome,
            name: Welcome,
            meta: {requiresAuth: true}
        }, 
        {
            path:'/login',
            component:Login,
            meta: {guest: true}
        }, 
        {
            path:'/create',
            component: Create,
            name: Create,
            meta: {requiresAuth: true}
        }, 

    ]
});
export default routes;