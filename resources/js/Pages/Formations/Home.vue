<template>
    <app-layout title="Formations">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Formation: 
            </h2>
        </template>
        <div>
            <Link :href="route('formation.pdf',formation_id)">
                pdf
            </Link>
        </div>
        <div>
            <Link :href="route('formation.video',formation_id)">
                videos
            </Link>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {Link} from '@inertiajs/inertia-vue3'

    const Home = defineComponent({
        components: {
            AppLayout,
            Link
        },
        props:{
           formation_id:String,
        }
    })
export default Home;
</script>
