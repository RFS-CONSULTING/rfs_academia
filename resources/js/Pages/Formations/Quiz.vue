<template>
    <app-layout title="Formations">
        <div>
            <bread-crumb v-bind:pages="[{'name':formation.title,'href':'/formations/'+formation.id},
           {'name':'Quiz'}]"></bread-crumb>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                En Développement (Quiz)
            </h2>
            <list-quiz-for-module v-bind:module="module"
             v-bind:exercices="exercices" v-bind:formation="formation"></list-quiz-for-module>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    import ListQuizForModule from '@/Components/ListQuizForModule.vue'
    const Quiz = defineComponent({
        components: {
            AppLayout,
            BreadCrumb,
            ListQuizForModule
        },
        props:{
            formation:Object,
            module:Object,
            exercices:Array
        }
    })
export default Quiz;
</script>
