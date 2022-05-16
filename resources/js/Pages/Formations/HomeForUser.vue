<template>
    <app-layout title="Formations">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $__("Training") }}
            </h2>
        </template>


        <div class="mx-12">
            <bread-crumb v-bind:pages="[{'name':formation.title}]"></bread-crumb>
            <div  >
                <h1 class="font-bold text-xl text-gray-800">{{formation.title}}</h1>
                <p class="text-sm text-gray-400">par: RFS ACADEMIA</p>
            </div>
            <module-formation-resume v-for="module in modules" :key="module.id" v-bind:module="module"></module-formation-resume>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {Link} from '@inertiajs/inertia-vue3'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    //affiche la liste des modules
    import ModuleFormationResume from '@/Components/ModuleFormationResume.vue'

    const HomeForUser = defineComponent({
        components: {
            AppLayout,
            Link,
            BreadCrumb,
            ModuleFormationResume,
        },
        props:{
           formation:Object,
           modules:Array
        }
    })
export default HomeForUser;
</script>
