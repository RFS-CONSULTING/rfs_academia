<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <br>
  <div class="max-w-screen-xl mx-auto px-4">
    <div class="mx-4 flex flex-wrap">
        <div v-for="data in datas" :key="data.id" style="margin-bottom:10px;"
        class="w-full p-4 sm:w-1/1 lg:w-1/1 block hover:bg-gray-50 bg-white shadow sm:rounded-lg">
            <a :href="'http://127.0.0.1:8000/storage/'+data.data_path">
                <div class="">
                    <p class="text-lg text-sm font-medium text-green-600 truncate">
                      {{ data.name}}
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>
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
    created(){
        console.log(this.datas)
    }
})

export default ListData;
</script>