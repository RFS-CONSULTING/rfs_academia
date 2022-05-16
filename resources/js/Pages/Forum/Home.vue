<template>
    <app-layout title="Formations">
        <div>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                En Développement
            </h2>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    const Home = defineComponent({
        components: {
            AppLayout,
        },
        props:{
        }
    })
export default Home;
</script>
