<template>
    <app-layout title="Pdf">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$__('Pdf')}}
            </h2>
        </template>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">{{ "tutoriel :"+ tutos.title }}</h1>
            <template>
            <pdf src="tutos.pdf_path" :page="1">
                <template>
                loading content here...
                </template>
            </pdf>
            </template>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import pdf from 'pdfvuer'
    
    let SinglePdf = defineComponent({
        components: {
            AppLayout,
            pdf
        },
        props:{
            tutos:Object
        }
    })
    export default SinglePdf;
</script>
