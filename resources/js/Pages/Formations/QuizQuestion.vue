<template>
    <app-layout title="Formations">
        <div>
            <bread-crumb v-bind:pages="[{'name':formation.title,'href':'/formations/'+formation.id},
            {'name':module.name},{'name':'Quiz',href:'/module/'+module.id+'/'+formation.id+'/quiz'},{'name':quiz.name}]"></bread-crumb>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                En Développement (QuizQuestion)
            </h2>
            <single-quiz v-bind:questions="questions" v-bind:quiz="quiz"></single-quiz>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    import SingleQuiz from '@/Components/SingleQuiz.vue'
    const QuizQuestion = defineComponent({
        components: {
            AppLayout,
            BreadCrumb,
            SingleQuiz
        },
        props:{
            formation:Object,
            questions:Array,
            module:Object,
            quiz:Object
        },
        created(){
            // console.log(this.$props)
        }
    })
export default QuizQuestion;
</script>
