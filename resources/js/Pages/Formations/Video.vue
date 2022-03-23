<template>
    <app-layout title="Formations video">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Formation videos: 
            </h2>
            <div>
                
            </div>
        </template>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {Link} from '@inertiajs/inertia-vue3'

    export default defineComponent({
        props: ['sessions'],
        components: {
            AppLayout,
            Link
        },
        props:{
          tutos_videos:Array
        }
    })
</script>
