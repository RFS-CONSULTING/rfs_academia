<template>
    <Head title="Register" />

    <div class=" bg-white dark:bg-gray-900 grid grid-cols-1 md:grid-cols-2 gap-4 ">
        <div class=" px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24 ">
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
                        <form @submit.prevent="submit" class="space-y-6">
                        <div>
                            <div class="">
                                <input id="name" placeholder="Name" name="name"  type="text" v-model="form.name"  required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>
                        </div>
                        <div class="mt-12">
                            <input id="email" placeholder="Email" name="email" v-model="form.email" type="email" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                        </div>

                        <div class="">
                            <div class="">
                                <input id="password" placeholder="Password" name="password" type="password"  v-model="form.password" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <input id="password_confirmation" placeholder="Password confirmation" name="password_confirmation" type="password" v-model="form.password_confirmation" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                                <jet-label for="terms">
                                    <div class="flex items-center">
                                        <jet-checkbox name="terms" id="terms" v-model:checked="form.terms" />
                                        <div class="ml-2">
                                            I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                                        </div>
                                    </div>
                                </jet-label>
                            </div>

                            <div class="text-sm">
                                <Link :href="route('login')" class="underline text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900">
                                    Already registered?
                                </Link>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 ">
                                Register
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden md:grid">
            <img class=" h-screen w-full object-cover" src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="" />
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

        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    terms: false,
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    })
</script>
