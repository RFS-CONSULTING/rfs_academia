<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$__('Dashboard')}}
            </h2>
        </template>
  
          <!-- <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <list-formations v-bind:user-formations="userFormations"></list-formations>
          </div> -->
        <article>
          <!-- Profile header -->
          <div>
            <div>
              <img class="h-32 w-full object-cover lg:h-48" src="/assets/img/rfs_academia.jpg" alt="">
            </div>
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                <div class="flex">
                  <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" v-bind:src="'http://127.0.0.1:8001/storage/'+$page.props.auth.user.profile_photo_path" alt="">
                </div>
            
              </div>
              <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                <h1 class="text-2xl font-bold text-gray-900 truncate">Vos formations</h1>
              </div>
            </div>
          </div>
         
        </article>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">
            <li v-for="userFormation in userFormations" :key="userFormation.id">
            <Link :href="route('formation.index',userFormation.formation.id)" class="block hover:bg-gray-50">
                <div class="flex items-center px-4 py-4 sm:px-6">
                <div class="min-w-0 flex-1 flex items-center">
                    <div class="flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                      </svg>
                    </div>
                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                    <div>
                        <p class="text-lg text-sm font-medium text-green-600 truncate">{{ userFormation.formation.title}}</p>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <div class="w-full bg-gray-200 rounded-full">
                                <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-l-full" style="width: 25%"> 25%</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div>
                        <p class="text-sm text-gray-900">
                            Applied on
                            <time datetime="2020-01-07">January 7, 2020</time>
                        </p>
                        <p class="mt-2 flex items-center text-sm text-gray-500">
                            <!-- Heroicon name: solid/check-circle -->
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Completed phone screening
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div>
                    <!-- Heroicon name: solid/chevron-right -->
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                </div>
            </Link>
            </li>

        </ul>
        </div>

    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import ListFormations from '@/Components/ListFormations.vue'
    import { CheckCircleIcon, ChevronRightIcon, MailIcon } from '@heroicons/vue/solid'
    import {Link} from '@inertiajs/inertia-vue3';

    
    let Dashboard = defineComponent({
        components: {
            AppLayout,
            ListFormations,
            CheckCircleIcon,
            ChevronRightIcon,
            MailIcon,
            Link
        },
        props:{
            userFormations:Array
        }
    })
    //console.log(Dashboard)
    export default Dashboard;
</script>
