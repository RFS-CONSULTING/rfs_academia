<template>
    <app-layout title="Dashboard">
          <!-- Profile header -->
          <div style="margin-top:-25px;margin-bottom:15px">
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
          <div class="max-w-screen-xl mx-auto px-4">
            <div class="mx-4 flex flex-wrap">
              <div  class="w-full p-4 sm:w-1/2 lg:w-1/2">
                <list-formations v-bind:userFormations="userFormations"></list-formations>
              </div>
            </div>
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
    export default Dashboard;
</script>
