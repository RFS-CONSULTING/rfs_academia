<template>
    <app-layout title="Formations">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $__("Training") }}
            </h2>
        </template>
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="mx-4 flex flex-wrap">
                
                <div class="w-full p-4">
                    <h1 class="max-w-6xl  mt-8 px-4 text-2xl leading-6 font-bold text-gray-900  lg:px-8 mb-2">Explorez</h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                        <div v-for="course in courses" :key="course.id" class="bg-white shadow-md rounded-md">
                            <div>
                                <Link :href="route('formation.show',course.slug)">
                                    <img v-bind:src="'http://127.0.0.1:8000/storage/'+course.image_path" alt="" srcset="" class="rounded-md">
                                </Link>
                                <div class="py-8 px-4">
                                    <Link :href="route('formation.show',course.slug)">
                                    <span class="block text-lg text-gray-800 font-bold tracking-wide">
                                        {{ course.title}}
                                    </span>
                                    </Link>
                                    <!-- <span  class="text-gray-600 text-sm line-clamp-5" v-html="course.description">
                                    </span> -->
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
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {Link} from '@inertiajs/inertia-vue3'
    import SideListFormations from '@/Components/SideListFormations.vue'

    const Home = defineComponent({
        components: {
            AppLayout,
            Link,
            SideListFormations
        },
        props:{
           Subscribedcourses:Array,
           courses:Array
        }
    })
export default Home;
</script>
