<template>
    <app-layout title="Formations video">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$__('Videos Tutorials')}}
            </h2>
        </template>
         <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Videos</h1>
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

    export default defineComponent({
        props: ['sessions'],
        components: {
            AppLayout,
            Link,
            ListTutosVideos
        },
        props:{
          tutos_videos:Array
        }
    })
</script>
