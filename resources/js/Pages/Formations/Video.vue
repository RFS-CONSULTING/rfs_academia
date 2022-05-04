<template>
    <app-layout title="Formations video">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <bread-crumb v-bind:pages="[{'name':formation.title,'href':'/formations/'+formation.id},{'name':'Vidéos'}]"></bread-crumb>
            <list-tutos-videos v-bind:tutos_videos="tutos_videos" v-if="tutos_videos.length > 0"></list-tutos-videos>
            <h1 v-else>Aucun tutoriel pour l'instant</h1>     
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {Link} from '@inertiajs/inertia-vue3'
    import ListTutosVideos from '@/Components/ListTutosVideos.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'

    export default defineComponent({
        props: ['sessions'],
        components: {
            AppLayout,
            Link,
            ListTutosVideos,
            BreadCrumb
        },
        props:{
          tutos_videos:Array,
          formation:Object
        }
    })
</script>
