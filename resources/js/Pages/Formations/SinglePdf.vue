<template>
    <app-layout title="Pdf">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$__('Pdf')}}
            </h2>
        </template>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <bread-crumb v-bind:pages="[{'name':formation.title,href:'/formations/'+tutos.formation_id},
            {'name':'Lecture',href:'/formations/'+tutos.formation_id+'/pdf'},
            {'name':tutos.title,href:''}]"></bread-crumb>
            <h1 class="text-2xl font-semibold text-gray-900">{{ "tutoriel :"+ tutos.title }}</h1>
            <div v-html="tutos.content"></div>
            <!-- <pdf :resize="true" v-bind:src="'http://127.0.0.1:8001/storage/'+tutos.pdf_path" :page="1">
                <template>
                loading content here...
                </template>
            </pdf> -->
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
            tutos:Object,
            formation:Object
        },
        created() {
            axios.get('/test').then((response) => {
                console.log('g')
            })
        } 
    })
    export default SinglePdf;
</script>
