<template>
    <button @click="goBack" class="flex flex-cols gap-3 justify-center mt-12 ml-10  ">
        <img src="@/images/previous.png" class="w-8 h-8" alt="">
        <h4 class="font-bold text-xl text-center mt-1">back</h4>
    </button>
    <section class="bg-white dark:bg-gray-900 w-3/4 rounded-lg shadow-lg mt-5 mb-20 mx-auto">
        <div class="flex justify-center min-h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/5"
                style="background-image: url('https://imgs.search.brave.com/dgefiQWskK93QHJp0sJ4IEE0WQifwzVU33rynvkSioA/rs:fit:1000:796:1/g:ce/aHR0cHM6Ly9pbWFn/ZXMud2lzZWdlZWsu/Y29tL3dvbWFuLWlu/LXNjcnVicy13b3Jr/aW5nLWF0LWNvbXB1/dGVyLW5lYXItY291/bnRlci1hbmQtbWFu/LmpwZw')">
            </div>

            <div class="flex items-center w-full max-w-3xl p-8 mx-auto tex">
                <div class="w-full">
                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        Register A new account.
                    </h1>


                    <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" @submit.prevent="signup">
                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Name</label>
                            <input type="text" placeholder="John" v-model="name"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                            <input type="email" placeholder="Exemple@exemple.com" v-model="email"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                            <input type="Password" placeholder="Password" v-model="password"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200"> Confirm Password</label>
                            <input type="Password" placeholder="Confirmation Password"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Gender</label>
                            <input type="text" placeholder="Snow" v-model="gender"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Phone number</label>
                            <input type="text" placeholder="XXX-XX-XXXX-XXX" v-model="phone"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Date of birth</label>
                            <input type="text" placeholder="Y-M-D" v-model="date_of_birth"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">address</label>
                            <input type="text" placeholder="address" v-model="address"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Assurance</label>
                            <input type="string" placeholder="Assurance" v-model="assurance"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div></div>

                        <button
                            class="flex items-center justify-between w-full px-4 py-4 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-lg hover:bg-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-50">
                            <span>Register</span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            name: '',
            email: '',
            password: '',
            gender: '',
            date_of_birth: '',
            phone: '',
            address: '',
            assurance: '',
            error: false
        }
    },
    methods: {
        goBack() {
            this.$router.go(-1); // Navigate to the previous page
        },

        signup() {
            if (this.name === '' || this.email === '' || this.password === '' || this.gender === '' || this.date_of_birth === '' || this.phone === '') {
                this.error = true
            } else {
                axios.post('http://127.0.0.1:8000/api/patient/store', JSON.stringify({
                    'name': this.name,
            'email': this.email,
            'password': this.password,
            'gender': this.gender,
            'date_of_birth': this.date_of_birth,
            'phone': this.phone,
            'address': this.address,
            'assurance': this.assurance,
                }), {
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                    .then(response => {


                        if (response.data.message === 'client created') {
                            this.$router.push('/login')
                        }
                    })
                    .catch(error => {
                        console.log(error)
                    })
                }
            }

        },
        //   computed: {
        //     signupForm() {
        //       return !(this.nom === '' || this.prenom === '' || this.phone === '' || this.email === '')
        //     }
        //   }
    }
</script>

<style></style>