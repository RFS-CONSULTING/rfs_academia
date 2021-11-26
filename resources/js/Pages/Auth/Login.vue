<template>
    <Head title="Log in" />
  
    <div class="h-screen bg-white dark:bg-gray-900 grid grid-cols-1 md:grid-cols-2 gap-4 ">
        <div class="py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 dark:text-white">
                   Welcome to<br><span class="text-green-600 dark:text-green-500">RFS ACADEMIA</span>
                </h2>
            </div>
            <div class="mt-8">
                <div>
                    <div>
                        <p class="text-sm text-center font-medium text-gray-700 dark:text-gray-300">
                            Log in with
                        </p>
                        <div class="mt-1 grid grid-cols-2 gap-3">
                            <div>
                                <a href="#" class="w-full flex inline-flex items-center justify-center py-2 px-4 border border-gray-300 dark:border-gray-100 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm bg-white text-sm font-semibold text-gray-500 hover:bg-gray-50">
                                    <i class=" fab fa-facebook-f "></i>
                                    <span class="ml-2">Facebook</span>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="w-full flex inline-flex items-center justify-center py-2 px-4 border border-gray-300  dark:border-gray-100 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm bg-white text-sm font-semibold text-gray-500 hover:bg-gray-50">
                                    <i class="fab fa-google"></i>
                                    <span class="ml-2 ">Google</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="w-full border-t border-gray-300" />
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500 dark:text-gray-300 dark:bg-gray-900">
                            Or continue with
                            </span>
                        </div>
                    </div>
            </div>
            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>
            <div class="mt-6">
                <JetValidationErrors/>
                <form @submit.prevent="submit" class="space-y-6">
                <div>
                    <jet-label for="email" value="Email address" />
                    <div class="mt-1">
                        <input id="email" v-model="form.email" name="email" type="email" autocomplete="email" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                    </div>
                </div>

                <div class="space-y-1">
                    <jet-label for="password" value="Password" />
                    <div class="mt-1">
                    <input id="password" v-model="form.password" name="password" type="password" autocomplete="current-password" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <jet-checkbox name="remember" v-model:checked="form.remember" />
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900 dark:text-gray-300">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">
                            Forgot your password?
                        </Link>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 ">
                    Log in
                    </button>
                    <div class="text-sm text-right mt-1">
                        <Link :href="route('register')" class="underline text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900">
                            No account yet?
                        </Link>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <div class="hidden md:grid">
            <img class=" h-screen w-full object-cover" src="/images/hero-academia.jpg" alt="" />
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link,
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    })
</script>
