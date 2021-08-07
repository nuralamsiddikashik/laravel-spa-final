import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../Home.vue'; 
import About from '../fronted/Pages/About.vue'; 

Vue.use(VueRouter);
const routes = new VueRouter({
    mode:'history',
    routes:[
        {
            path:"/",
            component:Home
        },
        {
            path:'/about', 
            component:About
        }

    ]
}); 
export default routes; 