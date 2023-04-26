<template>
    <section class="bg-white dark:bg-gray-900 w-3/4 rounded-lg shadow-lg mb-10 mx-auto">


        <div class="flex items-center w-full max-w-3xl p-8 mx-auto tex">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                    Add a New Nurse now.
                </h1>

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                    Please fill out the form below to add a new patient to the system.
                </p>

                <div v-if="error" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    {{ errorMessage }}</div>

                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" @submit.prevent="signup">
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Name</label>
                        <input v-model="name" type="text" placeholder="John"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                        <input v-model="email" type="email" placeholder="Exemple@exemple.com"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                        <input v-model="password" type="Password" placeholder="Password"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200"> Confirm Password</label>
                        <input type="Password" placeholder="Confirmation Password" v-model="password_confirmation"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>


                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Gender</label>
                        <input v-model="gender" type="text" placeholder="Male"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Phone number</label>
                        <input v-model="phone" type="text" placeholder="XXX-XX-XXXX-XXX"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Date of birth</label>
                        <input type="text" placeholder="Y-M-D" v-model="date_of_birth"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>


                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Address</label>
                        <input v-model="address" type="text" placeholder="Adress"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>



                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Statut</label>
                        <input v-model="statut" type="text" placeholder="Disponible"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
             
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
            password_confirmation: '',
            gender: '',
            phone: '',
            date_of_birth: '',
            address: '',
            statut: '',
            error: false,
            errorMessage: ''

        }
    },
    methods: {
        signup() {
            if (this.name === '' || this.email === '' || this.password === '' || this.password_confirmation === '' || this.gender === '' || this.date_of_birth === '' || this.phone === '' || this.statut === '' || this.address === '') {
                this.error = true
            } else {
                axios.post('http://127.0.0.1:8000/api/nurse/store', JSON.stringify({
                    'name': this.name,
                    'email': this.email,
                    'password': this.password,
                    'password_confirmation': this.password_confirmation,
                    'gender': this.gender,
                    'date_of_birth': this.date_of_birth,
                    'phone': this.phone,
                    'address': this.address,
                    'statut': this.statut,
                }), {
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                    .then(response => {
                        console.log(response)

                        if (response.data.message === 'nurse created successfully') {
                            this.$router.go(0)
                        }
                    })
                    .catch(error => {
                        console.log(error)
                        this.errorMessage = error.response.data.message
                        this.error = true
                    })
            }
        }

    },
   
}
</script>

  
<style></style>