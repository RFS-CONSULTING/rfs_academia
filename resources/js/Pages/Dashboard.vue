<template>
    <app-layout title="Dashboard">
          <!-- Profile header -->
      <div class="bg-white shadow">
        <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
          <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
            <div class="flex-1 min-w-0">
              <!-- Profile -->
              <div class="flex items-center">
                <div>
                  <div class="flex items-center">
                    <h1 class=" text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">Bonjour, {{ $page.props.user.name }}</h1>
                  </div>
                  <dl class="mt-6 flex flex-col  sm:mt-1 sm:flex-row sm:flex-wrap">
                    <dt class="sr-only">Company</dt>
                    <dd class="flex items-center text-sm text-gray-500 font-medium capitalize sm:mr-6">
                      <OfficeBuildingIcon class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" aria-hidden="true" />
                      R.D.Congo
                    </dd>
                    <dt class="sr-only">Account status</dt>
                    <dd class="mt-3 flex items-center text-sm text-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
                      <CheckCircleIcon class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" aria-hidden="true" />
                      Compte vérifié
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
              <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Recharger mon compte</button>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-8">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 class="text-2xl leading-6 font-bold text-gray-900">Statistiques</h2>
          <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card -->
            <div v-for="card in cards" :key="card.name" class="bg-white overflow-hidden shadow rounded-lg">
              <div class="p-5">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <component :is="card.icon" class="h-6 w-6 text-gray-400" aria-hidden="true" />
                  </div>
                  <div class="ml-5 w-0 flex-1">
                    <dl>
                      <dt class="text-sm font-medium text-gray-500 truncate">
                        {{ card.name }}
                      </dt>
                      <dd>
                        <div class="text-xl sm:text-2xl font-bold text-gray-900">
                          {{ card.amount }}
                        </div>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="mx-4 flex flex-wrap">
          <div  class="w-full p-4 sm:w-1/1 lg:w-1/1">
            <list-formations v-bind:courses="courses"></list-formations>
          </div>
        </div>
      </div>
      <div class="max-w-6xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl leading-6 font-bold text-gray-900">Cours recommandés </h2>
            <div class="sm:mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
              <!-- Card -->
              <div v-for="course in recommandeds" :key="course.id">
                <div class="py-1">
                    <div class="group container bg-white shadow-md rounded-md max-w-sm flex justify-center items-center  mx-auto content-div">
                        <div>
                          <div class="">
                              <Link :href="route('formation.show',course.slug)">
                                <img v-bind:src="'http://127.0.0.1:8000/storage/'+course.image_path" alt="" srcset="" class="rounded-md">
                              </Link>
                                <div class="py-8 px-4">
                                  <Link :href="route('formation.show',course.slug)">
                                  <span class="block text-lg text-gray-800 font-bold tracking-wide">
                                    {{ course.title}}
                                  </span>
                                  </Link>
                                  <span  class="text-gray-600 text-sm">
                                    {{ course.description}}
                                  </span>
                                </div>
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
  import ListFormations from '@/Components/ListFormations.vue'
  import { CheckCircleIcon, ChevronRightIcon, MailIcon,ScaleIcon,
  AcademicCapIcon,DocumentReportIcon } from '@heroicons/vue/solid'

  import {
  BellIcon,
  ClockIcon,
  CogIcon,
  CreditCardIcon,
  HomeIcon,
  MenuAlt1Icon,
  QuestionMarkCircleIcon,
  ShieldCheckIcon,
  UserGroupIcon,

  XIcon,
} from '@heroicons/vue/outline'
import {
  CashIcon,
  ChevronDownIcon,
  OfficeBuildingIcon,
  BadgeCheckIcon,
} from '@heroicons/vue/solid'

  import {Link} from '@inertiajs/inertia-vue3';
  const cards = [
  { name: 'Solde du compte', href: '#', icon: ScaleIcon, amount: '$30.45' },
  { name: 'Cours terminés', href: '#', icon: AcademicCapIcon, amount: '0' },
  { name: 'Travaux terminés', href: '#', icon: DocumentReportIcon, amount: '0' },
  ]
  let Dashboard = defineComponent({
      components: {
          AppLayout,
          ListFormations,
          CheckCircleIcon,
          ChevronRightIcon,
          MailIcon,
          Link,
          OfficeBuildingIcon
      },
      props:{
          courses:Array,
          recommandeds:Array
      },
      setup() {
        return {
          cards,
        }
      },
  })
  export default Dashboard;
</script>
