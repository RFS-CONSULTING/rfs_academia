<!-- This example requires Tailwind CSS v2.0+ -->
<template>
<!-- This example requires Tailwind CSS v2.0+ -->

<div class="max-w-screen-xl mx-auto px-4">
    <div class="mx-4 flex flex-wrap">
        <div v-for="userFormation in userFormations" :key="userFormation.id" style="margin-bottom:10px;"
        class="w-full p-4 sm:w-1/1 lg:w-1/1 block hover:bg-gray-50 bg-white shadow sm:rounded-lg">
            <Link :href="route('formation.index',userFormation.formation.id)">
                <div class="">
                    <p class="text-lg text-sm font-medium text-green-600 truncate">{{ userFormation.formation.title}}</p>
                </div>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <div class="w-full bg-gray-200 rounded-full">
                        <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-l-full" v-bind:style="'width:'+userFormation.formation.progression+'%;'"> 
                            {{userFormation.formation.progression}}%
                        </div>
                    </div>
                </div>
            </Link>
        </div>
    </div>
</div>
</template>

<script>
import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

const ListFormations = defineComponent({
    name: 'ListFormations',
    components:{
        Link
    },
    props:{
        userFormations:Array
    }
})
//console.log(ListFormations)
export default ListFormations;
</script>