<template>
    <app-layout title="Formations">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $__("Training") }}
            </h2>
        </template>


        <div style="margin-top:-20px;">
            <bread-crumb v-bind:pages="[{'name':formation.title}]"></bread-crumb>
            <formation-resume v-bind:formation="formation"></formation-resume>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {Link} from '@inertiajs/inertia-vue3'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    import FormationResume from '@/Components/FormationResume.vue'

    const HomeForUser = defineComponent({
        components: {
            AppLayout,
            Link,
            BreadCrumb,
            FormationResume,
        },
        props:{
           formation:Object,
        }
    })
export default HomeForUser;
</script>
