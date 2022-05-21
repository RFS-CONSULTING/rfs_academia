<template>
    <AppLayout >
        <div class="bg-white shadow">
            <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                <div class="md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                <div class="flex-1 min-w-0">
                    <!-- Profile -->
                    <div class="flex ">
                        <div>
                                <h2 class="text-xl py-4 ">Chatting with <b>RFS Admin</b> <span class="inline-block w-4 h-4 bg-green-400 rounded-xl border-2 border-white"></span></h2>
                        </div>
                    </div>

                    </div>
                    <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <PhoneIcon class="flex-shrink-0 h-4 w-4 mr-2 text-white" aria-hidden="true" />
                            Appeler
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full  mt-4">
            <div class="flex">
                <div class="flex-1  w-full h-full">
                    <div class="main-body container m-auto w-11/12 h-full flex flex-col">
                        <div class="main flex-1 flex flex-col">
                            <div class="flex-1 flex h-full">
                                <div class="chat-area flex-1 flex flex-col">
                                    <div class="messages flex-1 overflow-auto">
                                        <div class="message mb-4 flex">
                                            <div class="flex-2">
                                                <div class="w-12 h-12 relative">
                                                    <img class="w-12 h-12 rounded-xl mx-auto" src="https://blog.lesjeudis.com/wp-content/uploads/2021/06/ux-ui-design-mobile.png" alt="chat-user" />
                                                    <span class="absolute w-4 h-4 bg-green-400 rounded-xl right-0 bottom-0 border-2 border-white"></span>
                                                </div>
                                            </div>
                                            <div class="flex-1 px-2">
                                                <div class="inline-block bg-gray-300 rounded-xl p-2 px-6 text-gray-700">
                                                    <span>Hey there. We would like to invite you over to our office for a visit. How about it?</span>
                                                </div>
                                                <div class="pl-4"><small class="text-gray-500">15 April</small></div>
                                            </div>
                                        </div>
                                        <div class="message mb-4 flex">
                                            <div class="flex-2">
                                                <div class="w-12 h-12 relative">
                                                    <img class="w-12 h-12 rounded-xl mx-auto" src="https://blog.lesjeudis.com/wp-content/uploads/2021/06/ux-ui-design-mobile.png" alt="chat-user" />
                                                    <span class="absolute w-4 h-4 bg-green-400 rounded-xl right-0 bottom-0 border-2 border-white"></span>
                                                </div>
                                            </div>
                                            <div class="flex-1 px-2">
                                                <div class="inline-block bg-gray-300 rounded-xl p-2 px-6 text-gray-700">
                                                    <span>All travel expenses are covered by us of course :D</span>
                                                </div>
                                                <div class="pl-4"><small class="text-gray-500">15 April</small></div>
                                            </div>
                                        </div>
                                        <div class="message me mb-4 flex text-right">
                                            <div class="flex-1 px-2">
                                                <div class="inline-block bg-blue-600 rounded-xl p-2 px-6 text-white">
                                                    <span>It's like a dream come true</span>
                                                </div>
                                                <div class="pr-4"><small class="text-gray-500">15 April</small></div>
                                            </div>
                                        </div>
                                        <div class="message me mb-4 flex text-right">
                                            <div class="flex-1 px-2">
                                                <div class="inline-block bg-blue-600 rounded-xl p-2 px-6 text-white">
                                                    <span>I accept. Thank you very much.</span>
                                                </div>
                                                <div class="pr-4"><small class="text-gray-500">15 April</small></div>
                                            </div>
                                        </div>
                                        <div class="message mb-4 flex">
                                            <div class="flex-2">
                                                <div class="w-12 h-12 relative">
                                                    <img class="w-12 h-12 rounded-xl mx-auto" src="https://blog.lesjeudis.com/wp-content/uploads/2021/06/ux-ui-design-mobile.png" alt="chat-user" />
                                                    <span class="absolute w-4 h-4 bg-green-400 rounded-xl right-0 bottom-0 border-2 border-white"></span>
                                                </div>
                                            </div>
                                            <div class="flex-1 px-2">
                                                <div class="inline-block bg-gray-300 rounded-xl p-2 px-6 text-gray-700">
                                                    <span>You are welome. We will stay in touch.</span>
                                                </div>
                                                <div class="pl-4"><small class="text-gray-500">15 April</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <message-input-vue></message-input-vue>
    </AppLayout>
</template>



<script>
import { defineComponent, ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import {
  PhoneIcon,
} from '@heroicons/vue/solid'
import MessageInputVue from '../../Components/MessageInput.vue';
const defineMessages = [{
    'msg':'Bonjour, je suis l\'assistant RFS Academia',
    'keys':['bonjour','hello','salut']
},{
    'msg':'le prix pour une formation peut varier',
    'keys':['formation','prix','montant']
}]

const Show = defineComponent({
    components:{
        AppLayout,
        PhoneIcon, 
        MessageInputVue
    },
    data:()=>{
      return {
        msg:''
      }
    },
    methods:{
        submit:function(){
            const msgKeys = this.msg.split(' ');
            console.log(msgKeys)
            var msgToshow = ''
            defineMessages.forEach(defineMessage => {
                msgKeys.forEach(key=>{
                   let result = defineMessage.keys.includes(key)
                   if (result) {
                       msgToshow = defineMessage.msg
                   }
                })
            })
            //console.log(msgToshow)
        }
    },
    setup(){
        return{
            defineMessages
        }
    }
})
export default Show;
</script>
