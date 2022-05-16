<!-- This example requires Tailwind CSS v2.0+ -->
<template>
<!-- This example requires Tailwind CSS v2.0+ -->

<!-- <div class="max-w-screen-xl mx-auto px-4" style="margin-top:10px;">
    <div class="mx-4 flex flex-wrap">
        <div v-for="userFormation in userFormations" :key="userFormation.id" style="margin-bottom:10px;"
        class="w-full p-4 sm:w-1/1 lg:w-1/1 block hover:bg-gray-50 bg-white shadow sm:rounded-lg">
            <Link :href="route('formation.index',userFormation.formation.id)">
                <div class="">
                    <p class="text-lg text-sm font-medium text-green-600 truncate">{{ userFormation.formation.title}}</p>
                </div>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <div class="w-full bg-gray-200 rounded-full">
                        <div class="bg-yellow-800 text-xs font-medium text-white-400 text-center p-0.5 leading-none rounded-l-full" v-bind:style="'width:'+userFormation.formation.progression+'%;'"> 
                            {{userFormation.formation.progression}}%
                        </div>
                    </div>
                </div>
            </Link>
        </div>
    </div>
</div> -->


<h2 class="max-w-6xl mx-auto mt-8 px-4 text-2xl leading-6 font-bold text-gray-900 sm:px-6 lg:px-8">Cours suivis</h2>
<!-- Activity list (smallest breakpoint only) -->
<div class="shadow sm:hidden">
<ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
    <li v-for="course in courses" :key="course.formation.id">
    <Link :href="route('formation.index',course.formation.id)" class="block px-4 py-4 bg-white hover:bg-gray-50">
        <span class="flex items-center space-x-4">
        <span class="flex-1 flex space-x-2 truncate">
            <CashIcon class="flex-shrink-0 h-5 w-5 text-gray-400" aria-hidden="true" />
            <span class="flex flex-col text-gray-500 text-sm truncate">
            <span class="truncate">{{ course.formation.title }}</span>
                <!-- <span class="text-gray-900 font-medium">{{ course.date }}</span> -->
            <span
                >
                
                <div>{{ course.formation.progression }}% </div>
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" :style="'width: ' + course.progression + '%'"> </div>
                </div>
                </span>
            </span>
        </span>
        <ChevronRightIcon class="flex-shrink-0 h-5 w-5 text-gray-400" aria-hidden="true" />
        </span>
    </Link>
    </li>
</ul>

<nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200" aria-label="Pagination">
    <div class="flex-1 flex justify-between">
    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500"> Previous </a>
    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500"> Next </a>
    </div>
</nav>
</div>

<!-- Activity table (small breakpoint and up) -->
<div class="hidden sm:block">
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col mt-2">
    <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr class="bg-green-700">
            <th class="px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider">Cours</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-white uppercase tracking-wider">Inscription</th>
            <th class="hidden px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider md:block">Progression</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-white uppercase tracking-wider">Certificats</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr v-for="course in courses" :key="course.id" class="bg-white">
            <td class="w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                <div class="flex">
                <Link :href="route('formation.index',course.formation.id)" class="group inline-flex space-x-2 truncate text-sm">
                    <p class="text-gray-500 truncate group-hover:text-gray-900">
                    {{ course.formation.title }}
                    </p>
                </Link>
                </div>
            </td>
            <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                <span class="text-gray-900 font-medium">{{ course.date }} </span>
                
            </td>
            <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                <div>{{ course.progression }}% </div>
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" :style="'width: ' + course.progression + '%'"> </div>
                </div>
            </td>
            <td class="px-6 py-4  whitespace-nowrap text-sm text-gray-500">
                <div class="flex justify-center"><BadgeCheckIcon :class="[course.certificated ? 'text-green-400':'text-gray-400', ' h-5 w-5 group-hover:text-gray-500']" aria-hidden="true" /></div>
            </td>
            </tr>
        </tbody>
        </table>
        <!-- Pagination -->
        <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6" aria-label="Pagination">
        <div class="hidden sm:block">
            <p class="text-sm text-gray-700">
            Showing
            {{ ' ' }}
            <span class="font-medium">1</span>
            {{ ' ' }}
            to
            {{ ' ' }}
            <span class="font-medium">10</span>
            {{ ' ' }}
            of
            {{ ' ' }}
            <span class="font-medium">20</span>
            {{ ' ' }}
            results
            </p>
        </div>
        <div class="flex-1 flex justify-between sm:justify-end">
            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </a>
            <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </a>
        </div>
        </nav>
    </div>
    </div>
</div>
</div>

</template>

<script>
import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

import {
  CashIcon,
  CheckCircleIcon,
  ChevronDownIcon,
  ChevronRightIcon,
  BadgeCheckIcon,
} from '@heroicons/vue/solid'

const ListFormations = defineComponent({
    name: 'ListFormations',
    components:{
        Link,
        ChevronRightIcon,
        CashIcon,
        BadgeCheckIcon,
    },
    props:{
        courses:Array
    }
})
//console.log(ListFormations)
export default ListFormations;
</script>