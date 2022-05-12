<template>
    <app-layout title="Formations">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $__("Training") }}
            </h2>
        </template>
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="mx-4 flex flex-wrap">
                <div class="w-full p-4 sm:w-2/3 lg:w-2/3">
                    <h1 class="max-w-6xl mx-auto mt-8 px-4 text-2xl leading-6 font-bold text-gray-900 sm:px-6 lg:px-8">Explorez</h1>
                </div>
                <div class="w-full p-4 sm:w-1/3 lg:w-1/3">
                    <list-formations v-bind:courses="courses"></list-formations>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {Link} from '@inertiajs/inertia-vue3'
    import ListFormations from '@/Components/ListFormations.vue'

    const Home = defineComponent({
        components: {
            AppLayout,
            Link,
            ListFormations
        },
        props:{
           courses:Array
        }
    })
export default Home;
</script>
