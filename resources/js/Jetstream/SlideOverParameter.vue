<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <TransitionRoot as="template" :show="props.open ">
    <Dialog as="div" class="fixed inset-0 overflow-hidden" >
      <div class="absolute inset-0 overflow-hidden">
        <DialogOverlay class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />

        <div class=" fixed inset-y-0 right-0 pl-10 max-w-full flex sm:pl-16">
          <TransitionChild as="template" enter="transform transition ease-in-out duration-500 sm:duration-700" enter-from="translate-x-full" enter-to="translate-x-0" leave="transform transition ease-in-out duration-500 sm:duration-700" leave-from="translate-x-0" leave-to="translate-x-full">
            <div class=" w-screen max-w-md">
              <div class="h-full flex flex-col  bg-white dark:bg-gray-900 shadow-xl overflow-y-scroll">
                <div class="px-4 py-6 sm:px-6">
                  <div class="flex items-start justify-between">
                    <h3 class="font-bold text-xl text-gray-900 dark:text-gray-100 sm:text-2xl">{{$__('Settings')}}</h3>

                    <div class="ml-3 h-7 flex items-center">
                      <button type="button" class="bg-white dark:bg-gray-900 rounded-md text-gray-400 hover:text-gray-500 dark:text-gray-100 dark:text-gray-200 " @click="close">
                        <span class="sr-only">Close panel</span>
                        <XIcon class="h-6 w-6" aria-hidden="true" />
                      </button>
                    </div>
                  </div>
                </div>
                <!-- Main -->
                <div>
                  <div class="pb-1 sm:pb-6">
                    <div>
                      <div class="mt-6 px-4 sm:mt-8 sm:px-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center md:text-lg dark:text-gray-100">
                                <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-1 md:p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                    </svg>
                                </div>
                                <div class="ml-1 md:ml-2 ">
                                    {{$__("Dark mode")}} 
                                </div>
                            </div>
                            <div class="flex items-center flex-row-reverse ">
                                <Switch v-model="enabled" class="dark:bg-gray-900 flex-shrink-0 group relative rounded-full inline-flex items-center justify-center h-5 w-10 cursor-pointer ">
                                    <span class="sr-only">Use setting</span>
                                    <span aria-hidden="true" :class="[enabled ? 'bg-green-600' : 'bg-gray-200 dark:bg-gray-900', 'pointer-events-none absolute h-4 w-9 mx-auto rounded-full transition-colors ease-in-out duration-200']" />
                                    <span aria-hidden="true" :class="[enabled ? 'translate-x-5' : 'translate-x-0', 'pointer-events-none absolute left-0 inline-block h-5 w-5  rounded-full bg-white  shadow transform ring-0 transition-transform ease-in-out duration-200']" />
                                </Switch>

                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-4">
                            <div class="flex items-center md:text-lg dark:text-gray-100">
                                <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-1 md:p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <div class="ml-1 md:ml-2">
                                    {{$__("Language")}} 
                                </div>
                            </div>
                            <div class="flex items-center flex-row-reverse ">
                              <language-selector :locales="$page.props.locales" :locale="$page.props.locale"></language-selector>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script setup>
import { ref, defineProps, watch } from 'vue'
import {
  Dialog,
  DialogOverlay,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  TransitionChild,
  TransitionRoot,
} from '@headlessui/vue'
import { XIcon } from '@heroicons/vue/outline'
import { DotsVerticalIcon } from '@heroicons/vue/solid'
import { Switch } from '@headlessui/vue'
import LanguageSelector from '@/Components/LanguageSelector.vue'

const props = defineProps(['open'])
const emits = defineEmits(['toggleSlide'])
const enabled = ref(localStorage.theme)
const open = ref(true)
const close = () => {
    emits("toggleSlide")
}
watch(enabled,(newValue, oldValue) => {
 
    if(newValue){
        document.documentElement.classList.add('dark');
        localStorage.theme = 'dark';
        
    }else{
        document.documentElement.classList.remove('dark');
        localStorage.removeItem('theme');
    }

  
})


</script>