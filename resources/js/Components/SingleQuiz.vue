<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <br>
  <div class="max-w-screen-xl mx-auto px-4">
    <div class="mx-4 flex flex-wrap">
      <form style="margin-bottom:10px;" :action="route('quiz.process')" method="GET"
        class="w-full p-4 sm:w-1/1 lg:w-1/1 block bg-white shadow sm:rounded-lg">
        <div v-for="question,index in questions" :key="question.id">
          <h2>{{question.question}}</h2>
          <div class="max-w-screen-xl mx-auto px-4">
            <div class="mx-4 flex flex-wrap">
              <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                <div class="md:w-1/3"></div>
                <label class="md:w-1/1 block text-gray-500 font-bold">
                  <span class="text-sm" style="margin-right:10px;">
                    {{question.choix1}}
                  </span>
                  <input class="mr-2 leading-tight" type="radio" 
                  v-bind:name="question.id" v-bind:value="question.choix1"
                  v-model="choix[index]">
                </label>
              </div>
              <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                <div class="md:w-1/3"></div>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                  <span class="text-sm" style="margin-right:10px;">
                    {{question.choix2}}
                  </span>
                  <input class="mr-2 leading-tight" type="radio" 
                  v-bind:name="question.id" v-bind:value="question.choix2"
                  v-model="choix[index]">
                </label>
              </div>
              <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                <div class="md:w-1/3"></div>
                <label class="md:w-1/1 block text-gray-500 font-bold">
                  <span class="text-sm" style="margin-right:10px;">
                    {{question.choix3}}
                  </span>
                  <input class="mr-2 leading-tight" type="radio" 
                  v-bind:name="question.id" v-bind:value="question.choix3"
                  v-model="choix[index]">
                </label>
              </div>
              <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                <div class="md:w-1/3"></div>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                  <span class="text-sm" style="margin-right:10px;">
                    {{question.choix4}}
                  </span>
                  <input class="mr-2 leading-tight" type="radio" 
                  v-bind:name="question.id" v-bind:value="question.choix4"
                  v-model="choix[index]">
                </label>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="envoyer"
            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
      </form>
    </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

const SingleQuiz = defineComponent({
    name: 'SingleQuiz',
    components:{
        Link
    },
    data:()=>{
      return {
        choix:[]
      }
    },
    props:{
      questions:Array,
      quiz:Object
    },
    methods:{
      sendForm:function(questions){
       console.log(this.choix)
      }
    },
    created(){
      // this.questions.forEach(question=>{
      //   this.$data.choix.push({"question_id":question.id,"choix":""});
      // })
    }
})

export default SingleQuiz;
</script>