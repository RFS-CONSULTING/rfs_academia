<!-- This example requires Tailwind CSS v2.0+ -->
<template>
<!-- This example requires Tailwind CSS v2.0+ -->

<div class="max-w-screen-xl mx-auto px-4">
    <div class="mx-4 flex flex-wrap">
        <div class="w-full p-4 sm:w-1/2 lg:w-1/2">
            <div class="bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6 mb-3">
                    <h1 class="text-lg leading-4 font-medium text-gray-900">{{ module.name }}</h1>

                    <div class="mt-3 text-sm">
                        <p class="text-sm font-small text-gray-400">{{ module.notes }}</p>
                        <div class="mx-4 flex flex-wrap">
                            <Link class="font-medium text-indigo-600 hover:text-indigo-500" :href="route('module.text',[module.id,module.formation_id])">
                                <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                                    <h2>Lecture</h2>
                                </div>
                            </Link>
                            <Link class="font-medium text-indigo-600 hover:text-indigo-500" :href="route('module.video',[module.id,module.formation_id])">
                                <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                                    <h2>Vidéos</h2>
                                </div>
                            </Link>
                            <Link class="font-medium text-indigo-600 hover:text-indigo-500" :href="route('module.resource',[module.id,module.formation_id])">
                                <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                                    <h2>Ressources</h2>
                                </div>
                            </Link>
                            <Link class="font-medium text-indigo-600 hover:text-indigo-500" :href="route('module.quiz',[module.id,module.formation_id])">
                                <div class="w-full p-4 sm:w-1/1 lg:w-1/1">
                                    <h2>Quiz</h2>
                                </div>
                            </Link>
                        </div>
                        <!-- <Link >
                        Voir le contenu <span aria-hidden="true">&rarr;</span>
                        </Link> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

const ModulemoduleResume = defineComponent({
    name: 'ModulemoduleResume',
    components:{
        Link
    },
    props:{
       module:Object
    }
})
//console.log(ModulemoduleResume)
export default ModulemoduleResume;
</script>