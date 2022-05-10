<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <br>
  <div class="max-w-screen-xl mx-auto px-4">
    <div class="mx-4 flex flex-wrap">
      <div style="margin-bottom:10px;"
        class="w-full p-4 sm:w-1/1 lg:w-1/1 block bg-white shadow sm:rounded-lg">
        <div v-for="question in questions" :key="question.id">
          <h2>{{question.question}}</h2>
          <div class="max-w-screen-xl mx-auto px-4">
            <div class="mx-4 flex flex-wrap">
              <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                <div class="md:w-1/3"></div>
                <label class="md:w-1/1 block text-gray-500 font-bold">
                  <span class="text-sm" style="margin-right:10px;">
                    {{question.choix1}}
                  </span>
                  <input class="mr-2 leading-tight" type="radio" v-bind:name="'choix'+question.id">
                </label>
              </div>
              <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                <div class="md:w-1/3"></div>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                  <span class="text-sm" style="margin-right:10px;">
                    {{question.choix2}}
                  </span>
                  <input class="mr-2 leading-tight" type="radio" v-bind:name="'choix'+question.id">
                </label>
              </div>
              <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                <div class="md:w-1/3"></div>
                <label class="md:w-1/1 block text-gray-500 font-bold">
                  <span class="text-sm" style="margin-right:10px;">
                    {{question.choix3}}
                  </span>
                  <input class="mr-2 leading-tight" type="radio" v-bind:name="'choix'+question.id">
                </label>
              </div>
              <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                <div class="md:w-1/3"></div>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                  <span class="text-sm" style="margin-right:10px;">
                    {{question.choix4}}
                  </span>
                  <input class="mr-2 leading-tight" type="radio" v-bind:name="'choix'+question.id">
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="md:flex md:items-center">
          <div class="md:w-1/3"></div>
          <div class="md:w-2/3">
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
              Envoyer
            </button>
          </div>
        </div>
      </div>
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
    props:{
      questions:Array,
      quiz:Object
    },
    // created(){
    //     console.log(this.datas)
    // }
})

export default SingleQuiz;
</script>