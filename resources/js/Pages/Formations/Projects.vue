<template>
    <app-layout title="Formations">
        <div>
            <bread-crumb v-bind:pages="[{'name':formation.title,'href':'/formations/'+formation.id},
           {'name':'Ressources','href':'/module/'+module.id+'/'+formation.id+'/resource'},
           {'name':'Projets'}]"></bread-crumb>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                En Développement (Projects)
            </h2>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import BreadCrumb from '@/Components/BreadCrumb.vue'
    const Projects = defineComponent({
        components: {
            AppLayout,
            BreadCrumb
        },
        props:{
            formation:Object,
            module:Object
        },
        data:{
            lol:['ok']
        }
    })
export default Projects;
</script>
