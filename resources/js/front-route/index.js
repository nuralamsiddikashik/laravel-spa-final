import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../Home.vue'; 
import About from '../fronted/Pages/About.vue'; 
import Contact from '../fronted/contact/Contact.vue'; 
import Portfolio from '../fronted/portfolio/Portfolio.vue'; 

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
        }, 
        {
            path:"/contact", 
            component:Contact
        }, 
        {
            path:'/portfolio', 
            component:Portfolio
        }

    ]
}); 
export default routes; 