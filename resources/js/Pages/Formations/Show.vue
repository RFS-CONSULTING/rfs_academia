<template>
    <app-layout title="Formations">
        <div>
            <!-- <bread-crumb v-bind:pages="[{'name':formation.title},{'name':'Ressources'},
           {'name':'Données'}]"></bread-crumb> -->
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                En Développement (Show)
            </h2>

            <div class="max-w-screen-xl mx-auto px-8">
                <div class="mx-4 flex flex-wrap bg-white shadow-md rounded-md ">
                    <div  class="w-full p-4 sm:w-1/1 lg:w-1/1 mb-4" style="height:200px;">
                        <img v-bind:src="'http://127.0.0.1:8001/storage/'+course.image_path" style="height:200px;width:100%;"
                        alt="" srcset="" class="rounded-md">
                    </div>
                    <div class="w-full p-4 sm:w-1/1 lg:w-1/1" style="width:100%;">
                        <div class="content-div">
                        <div class="">
                            <span class="block text-lg text-gray-800 font-bold tracking-wide">
                            {{ course.title}}
                            </span>
                            <span  class="text-gray-600 text-sm">
                            {{ course.description}}
                            </span>
                        </div>
                        </div>
                    </div>
                    <div class="md:flex mb-4">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                S'inscrire
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'

    const Show = defineComponent({
        components: {
            AppLayout,
            BreadCrumb,
        },
        props:{
            course:Object,
        },
    })
export default Show;
</script>
