<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$__('Dashboard')}}
            </h2>
        </template>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
          </div>
          <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <list-formations v-bind:user-formations="userFormations"></list-formations>
          </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import ListFormations from '@/Components/ListFormations.vue'

    
    let Dashboard = defineComponent({
        components: {
            AppLayout,
            ListFormations
        },
        props:{
            userFormations:Array
        }
    })
    //console.log(Dashboard)
    export default Dashboard;
</script>
