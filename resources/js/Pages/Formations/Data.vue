<template>
    <app-layout title="Formations">
        <div>
            <bread-crumb v-bind:pages="[{'name':formation.title,'href':'/formations/'+formation.id},
           {'name':'Données'}]"></bread-crumb>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                En Développement (data)
            </h2>
            <list-data v-bind:datas="datas"></list-data>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    import ListData from '@/Components/ListData.vue'
    
    const Data = defineComponent({
        components: {
            AppLayout,
            BreadCrumb,
            ListData
        },
        props:{
            formation:Object,
            datas:Array
        }
    })
export default Data;
</script>
