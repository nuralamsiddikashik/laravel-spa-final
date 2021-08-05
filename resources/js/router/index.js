import Vue from 'vue';
import VueRouter from 'vue-router';
import Welcome from '../App.vue';
import Login from '../components/auth/Login.vue'; 
import CreateCategory from '../pages/category/create.vue';
import CategoryList from '../pages/category/CategoryList.vue'; 
import EditCategory from '../pages/category/EditCategory.vue';


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
            component: CreateCategory,
            name: "create-category",
            meta: {requiresAuth: true}
        }, 
        {
            path:'/category-list',
            component: CategoryList,
            name: "category-list",
            meta: {requiresAuth: true}
        }, 
        {
            path:'/edit/:id',
            component: EditCategory,
            name: "edit-category",
            meta: {requiresAuth: true}
        }, 

    ]
});
export default routes;