<template>
    <app-layout title="Formations">
        <div>
            <bread-crumb v-bind:pages="[{'name':formation.title,'href':'/formations/'+formation.id},
           {'name':'Quiz'}]"></bread-crumb>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                En Développement (Quiz)
            </h2>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    const Quiz = defineComponent({
        components: {
            AppLayout,
            BreadCrumb
        },
        props:{
            formation:Object
        }
    })
export default Quiz;
</script>
