<template>
    <app-layout title="Pdf">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$__('Pdf')}}
            </h2>
        </template>
        <div class="max-w-screen-xl mx-auto px-4">
             <bread-crumb v-bind:pages="[{'name':formation.title,href:'/formations/'+formation.id},
            {'name':module.name+'(Lecture)',href:'/module/'+module.id+'/'+formation.id+'/lecture'},
            {'name':tuto.title}]"></bread-crumb>

            <div class="mx-4 flex flex-wrap">
              <div style="width:70%;">
                <h1 class="text-2xl font-semibold text-gray-900">{{ "tutoriel :"+ tuto.title }}</h1>
                <div v-html="tuto.content"></div>
              </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    import pdf from 'pdfvuer'
    import axios from 'axios'
    
    let SinglePdf = defineComponent({
        components: {
            AppLayout,
            pdf,
            BreadCrumb
        },
        props:{
            tuto:Object,
            formation:Object,
            module:Object
        },
        // created() {
        //     axios.get('/test').then((response) => {
        //         console.log('g')
        //     })
        // } 
    })
    export default SinglePdf;
</script>
