<template>
    <app-layout title="Formations">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Ressource
            </h2>
        </template>
        <div style="margin-top:-20px;">
            <bread-crumb v-bind:pages="[{'name':formation.title,'href':'/formations/'+formation.id},{'name':'Ressource'}]"></bread-crumb>
        </div>
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="mx-4 flex flex-wrap">
                <div class="w-full p-4 sm:w-1/2 lg:w-1/2">
                    <div class="mx-4 flex flex-wrap">
                        <Link class="bg-white shadow sm:rounded-lg font-medium text-indigo-600 hover:text-indigo-500 w-full p-4 sm:w-1/1 mb-4 lg:w-1/1" 
                        :href="route('module.resource.data',[module.id,module.formation_id])">
                            Données des projets
                        </Link>
                        <Link class="bg-white shadow sm:rounded-lg font-medium text-indigo-600 hover:text-indigo-500 w-full p-4 sm:w-1/1 lg:w-1/1"
                        :href="route('module.resource.project',[module.id,module.formation_id])">
                            Projets pour exercice
                        </Link>
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
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    import ModuleFormationResume from '@/Components/ModuleFormationResume.vue'

    const Resource = defineComponent({
        components: {
            AppLayout,
            Link,
            BreadCrumb,
            ModuleFormationResume,
        },
        props:{
           formation:Object,
           module:Array
        }
    })
export default Resource;
</script>
