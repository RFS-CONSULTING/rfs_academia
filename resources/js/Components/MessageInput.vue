<template>
  <div class="flex items-start space-x-4">
    <!-- <div class="flex-shrink-0">
      <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
    </div> -->
    <div class="min-w-0 flex-1">
      <form action="#" @submit.prevent>
        <div class="border-b border-gray-200 focus-within:border-indigo-600">
          <label for="comment" class="sr-only">Add your comment</label>
          <textarea rows="3" name="comment" id="comment" v-model="textarea"
          class="block w-full border-0 border-b border-transparent p-0 pb-2 resize-none focus:ring-0 focus:border-indigo-600 sm:text-sm" placeholder="Votre message..." />
        </div>
        <div class="pt-2 flex justify-between">
          <div class="flex-shrink-0">
            <button type="submit" 
            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Envoyer
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { ref,defineComponent } from 'vue'
import {PaperClipIcon } from '@heroicons/vue/outline'

const MessageInputVue = defineComponent({
    components:{
        PaperClipIcon
    },
    data(){
        return{
            textarea:""
        }
    },
    methods:{
        submit:function(){

        }
    }
})

export default MessageInputVue;
// const selected = ref(moods[5])
</script>