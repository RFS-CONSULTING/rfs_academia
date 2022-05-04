<template>
    <app-layout title="single videos">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$__('Tutoriel video')}}
            </h2>
        </template>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <bread-crumb v-bind:pages="[{'name':formation.title,href:'/formations/'+tutos.formation_id},
            {'name':'Videos',href:'/formations/'+tutos.formation_id+'/videos'},
            {'name':tutos.title,href:''}]"></bread-crumb>
            <h1 class="text-2xl font-semibold text-gray-900">{{ "tutoriel :"+ tutos.title }}</h1>
            <iframe v-bind:src="tutos.video_path" frameborder="0" width="853" height="480"></iframe>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    
    let SingleVideo = defineComponent({
        components: {
            AppLayout,
            BreadCrumb
        },
        props:{
            tutos:Object,
            formation:Object
        }
    })
    export default SingleVideo;
</script>
