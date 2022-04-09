<template>
    <app-layout title="Formations">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $__("Training") }}
            </h2>
        </template>
        <div>
            
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
