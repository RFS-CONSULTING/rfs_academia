<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <br>
  <ul role="list" class="space-y-3">
    
    <li v-for="data in datas" :key="data.id" 
    class="bg-white shadow px-4 py-4 sm:px-6 sm:rounded-md">
        <!-- {{console.log(data)}} -->
      <!-- <Link :href="route('formation.single.pdf',data.id)"> -->
        <p class="text-lg text-sm font-medium text-green-600">
            {{data.title}}
        </p>
      <!-- </Link> -->
    </li>
    
  </ul>
</template>

<script>
 import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

const ListData = defineComponent({
    name: 'ListData',
    components:{
        Link
    },
    props:{
        datas:Array
    },
    // created(){
    //     console.log(this.datas)
    // }
})

export default ListData;
</script>