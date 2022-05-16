<!-- This example requires Tailwind CSS v2.0+ -->
<template>
<app-layout title="Formations">
  <br>
  <div class="max-w-screen-xl mx-auto px-4">
    <div class="mx-4 flex flex-wrap">
        <div style="margin-bottom:10px;" class="w-full p-4 sm:w-1/1 lg:w-1/1 block bg-white shadow sm:rounded-lg">
            <h2>Vous avez obtenu {{cotes}}/{{total}}</h2>
            <h2>Corrections</h2>
            <div v-for="question in questions" :key="question.id">
                <h2># {{question.question}}</h2>
                <div class="max-w-screen-xl mx-auto px-4">
                    <div class="mx-4 flex flex-wrap">
                    <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                        <h2>- {{question.reponse}}</h2>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>
</app-layout>
</template>

<script>
import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue'

const ResultatQuiz = defineComponent({
    name: 'ResultatQuiz',
    components:{
        Link,
        AppLayout
    },
    data:()=>{
      return {
      }
    },
    props:{
        total:Number,
        cotes:Number,
        questions:Array
    },
    methods:{
    },
    created(){
    }
})
export default ResultatQuiz;
</script>