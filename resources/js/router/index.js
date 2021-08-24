// Vue and VueRouter Load 
import Vue from 'vue';
import VueRouter from 'vue-router';

// Dashboard Component Load 
import Welcome from '../App.vue';
import Login from '../components/auth/Login.vue'; 
import CreateCategory from '../pages/category/create.vue';
import CategoryList from '../pages/category/CategoryList.vue'; 
import EditCategory from '../pages/category/EditCategory.vue';
// Short Service Component 
import CreatService from '../pages/service/Create.vue';
import ServiceList from '../pages/service/ServiceList.vue'; 
import editService from '../pages/service/editService.vue';
import addAbout from '../pages/about/about.vue';

// Services Component 
import CreateService from '../pages/services/add.vue'; 
import ServicesList from '../pages/services/services.vue'; 
// Frontend contact list show 
import ContactListShow from '../pages/contact/contactList.vue';


Vue.use(VueRouter);

const routes = new VueRouter({
    mode:'history',
    linkExactActiveClass: 'is-active',
    routes:[
     
        {
            path:'/app/login',
            component:Login,
            meta: {guest: true}
        }, 
        {
            path:'/app',
            component: Welcome,
            name: Welcome,
            meta: {requiresAuth: true}
        }, 
        {
            path:'/app/create',
            component: CreateCategory,
            name: "create-category",
            meta: {requiresAuth: true}
        }, 
        {
            path:'/app/category-list',
            component: CategoryList,
            name: "category-list",
            meta: {requiresAuth: true}
        }, 
        {
            path:'/app/category-edit/:id',
            component: EditCategory,
            name: "category-edit",
            meta: {requiresAuth: true}
        }, 
        {
            path:'/app/add-service',
            component: CreatService,
            name: "add-service",
            meta: {requiresAuth: true}
        }, 
        {
            path:'/app/service-list',
            component: ServiceList,
            name: "service-list",
            meta: {requiresAuth: true}
        }, 
        {
            path:'/app/edit-service/:id',
            component: editService,
            name: "edit-service",
            meta: {requiresAuth: true}
        }, 
        {
            path:'/app/contact-list',
            component: ContactListShow,
            name: "contact-list",
            meta: {requiresAuth: true}
        }, 
        {
            path:'/app/about-list',
            component: addAbout,
            name: "about",
            meta: {requiresAuth: true}
        }, 

        {
            path:'/app/add-service-two',
            component: CreateService,
            name: "create-service",
            meta: {requiresAuth: true}
        }, 

        {
            path:'/app/services-list',
            component: ServicesList,
            name: "services-list",
            meta: {requiresAuth: true}
        }, 

    ]
});
export default routes;