export default {
    state:{
        categoryData:[],
        servicesData:[],
    }, 
    getters:{
        categories(state){
            return state.categoryData
        },
        services(state){
            return state.servicesData
        }
    },
    actions:{
        getCategories(data){
           axios.get('/api/app/category-list').then(response => {
           data.commit('categories',response.data.categories)
           }).catch(error => {
               console.log(error.message)
           })
        },
        getServices(data){
            axios.get('/api/app/service-list').then(response => {
                data.commit('services',response.data.services)
            }).catch(error => {
                console.log(error.message)
            })
        }
    },
    mutations:{
        categories(state,data){
            return state.categoryData = data
        }, 
        services(state,data){
            return state.servicesData = data
        }
    }
}