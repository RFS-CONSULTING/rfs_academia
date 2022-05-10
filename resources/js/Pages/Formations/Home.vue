<template>
    <app-layout title="Formations">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $__("Training") }}
            </h2>
        </template>
        <div>
            <list-formations v-bind:courses="courses"></list-formations>
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
