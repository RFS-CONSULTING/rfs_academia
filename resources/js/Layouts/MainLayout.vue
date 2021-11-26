<template>
    <main>
        <div class="absolute">
            <div class="fixed bottom-0 left-0"> 
                <button @click="toggleTheme" class="w-10 md:w-12 bg-green-600  p-2 mb-2  rounded-r-full text-white dark:text-gray-900  text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 md:h-8 w-6 md:w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                    </svg>
                </button>
            </div>
            
        </div>
        <slot></slot>
    </main>
</template>
<script setup>
import { ref } from 'vue'
import { Switch } from '@headlessui/vue'

const enabled = ref(false)

const toggleTheme = () => {
    if (localStorage.theme == 'dark') {
        document.documentElement.classList.remove('dark');
        localStorage.removeItem('theme');
    } else {
        document.documentElement.classList.add('dark');
        localStorage.theme = 'dark';
    }
}
</script>