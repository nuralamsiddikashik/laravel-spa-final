<template>
    <div id="wrapper">
       <Sidebar/>
        <div id="content-wrapper" class="d-flex flex-column">
           <div id="content">
                <Header/>
           </div>
        </div>
    </div>
</template>

<script>
import Header from './components/Header.vue'; 
import Sidebar from './components/Sidebar.vue'; 
export default{
    name: 'Welcome',
    components:{
        Header,
        Sidebar
    }
}
</script>