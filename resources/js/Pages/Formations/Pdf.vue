<template>
    <app-layout title="Pdf">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
           <bread-crumb v-bind:pages="[{'name':formation.title,'href':'/formations/'+formation.id},
           {'name':module.name+'(lecture)'}]"></bread-crumb>
            <list-tutos-pdf v-bind:tutos_pdf="tutos" v-if="tutos.length > 0"></list-tutos-pdf>
            <h1 v-else>Aucun tutoriel pour l'instant</h1>       
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import ListTutosPdf from '@/Components/ListTutosPdf.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    
    let Pdf = defineComponent({
        components: {
            AppLayout,
            ListTutosPdf,
            BreadCrumb
        },
        props:{
            tutos:Array,
            formation:Object,
            module:Object
        }
    })
    export default Pdf;
</script>
