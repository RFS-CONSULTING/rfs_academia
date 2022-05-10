<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <br>
  <div class="max-w-screen-xl mx-auto px-4">
    <div class="mx-4 flex flex-wrap">
        <div v-for="exercice in exercices" :key="exercice.id" style="margin-bottom:10px;"
        class="w-full p-4 sm:w-1/1 lg:w-1/1 block hover:bg-gray-50 bg-white shadow sm:rounded-lg">
            <Link :href="route('module.quiz.show',[module.id,formation.id,exercice.id])">
                <div class="">
                    <p class="text-lg text-sm font-medium text-green-600 truncate">
                      {{ exercice.name}}
                    </p>
                </div>
            </Link>
        </div>
    </div>
</div>
</template>

<script>
 import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

const ListQuizForModule = defineComponent({
    name: 'ListQuizForModule',
    components:{
        Link
    },
    props:{
        exercices:Array,
        module:Object,
        formation:Object
    },
    // created(){
    //     console.log(this.datas)
    // }
})

export default ListQuizForModule;
</script>