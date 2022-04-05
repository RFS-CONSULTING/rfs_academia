<template>
    <app-layout title="Pdf">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$__('Pdf')}}
            </h2>
        </template>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Pdf</h1>
            <list-tutos-pdf v-bind:tutos_pdf="tutos_pdf"></list-tutos-pdf>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import ListTutosPdf from '@/Components/ListTutosPdf.vue'

    
    let Pdf = defineComponent({
        components: {
            AppLayout,
            ListTutosPdf
        },
        props:{
            tutos_pdf:Array
        }
    })
    export default Pdf;
</script>
