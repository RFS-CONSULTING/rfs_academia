<template>
  <nav class="flex" aria-label="Breadcrumb" style="margin-bottom:20px;margin-left:10px;margin-top:10px;">
    <ol role="list" class="bg-white rounded-md shadow px-6 flex space-x-4">
      <li class="flex">
        <div class="flex items-center">
          <Link :href="'/dashboard'" class="text-gray-400 hover:text-gray-500">
            <HomeIcon class="flex-shrink-0 h-5 w-5" aria-hidden="true" />
            <span class="sr-only">Home</span>
          </Link>
        </div>
      </li>
      <li v-for="page in pages" :key="page.name" class="flex">
        <div class="flex items-center">
          <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
          </svg>
          <Link :href="page.href" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" :aria-current="page.current ? 'page' : undefined">{{ page.name }}</Link>
        </div>
      </li>
    </ol>
  </nav>
</template>

<script>
import { HomeIcon } from '@heroicons/vue/solid'
 import {Link} from '@inertiajs/inertia-vue3'
// const pages = [
//   { name: 'Projects', href: '#', current: false },
//   { name: 'Project Nero', href: '#', current: true },
// ]

export default {
  components: {
    HomeIcon,
    Link
  },
  props:{
    pages:Array
  },
  // setup() {
  //   return {
  //     pages,
  //   }
  // },
}
</script>