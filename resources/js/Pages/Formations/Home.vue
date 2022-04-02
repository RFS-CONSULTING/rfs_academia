<template>
    <app-layout title="Formations">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Formation: 
            </h2>
        </template>
        <div>
            <div class="bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Tutoriels PDF</h3>
                <div class="mt-3 text-sm">

                    <Link class="font-medium text-indigo-600 hover:text-indigo-500" :href="route('formation.pdf',formation_id)">
                    Voir le contenu <span aria-hidden="true">&rarr;</span>
                    </Link>
                </div>
                </div>
            </div>
            <div class="bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Tutoriels Videos</h3>
                <div class="mt-3 text-sm">

                    <Link class="font-medium text-indigo-600 hover:text-indigo-500" :href="route('formation.video',formation_id)">
                    Voir le contenu <span aria-hidden="true">&rarr;</span>
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

    const Home = defineComponent({
        components: {
            AppLayout,
            Link
        },
        props:{
           formation_id:String,
        }
    })
export default Home;
</script>
