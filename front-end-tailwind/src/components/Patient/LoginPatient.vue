<template>



    <form @submit.prevent="login">



      <div v-if="error" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
{{ errorMessage }}</div>
    

    <div class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="email">Email</label>
            <input v-model="email" id="LoggingEmailAddress" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" type="email" />
        </div>

        <div class="mt-4">
            <div class="flex justify-between">
                <label  class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="password">Password</label>
            </div>

            <input v-model="password" id="loggingPassword" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" type="password" />
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                Sign In
            </button>
        </div>
    </form>



</template>

<script >
import axios from 'axios';

export default {
    data(){
   return{
    email: '',
    password: '',
    error: false,
    errorMessage: '',

    } 
  
  },
  mounted(){
      if(localStorage.getItem('email') !== null){
        this.$router.push('/dashboardPatient')
      }
  },

    methods: {
    goBack() {
      this.$router.go(-1); // Navigate to the previous page
    },
      login() {

    if (this.email === '' || this.password === '' ) {
      this.error = true;
      this.errorMessage = 'Please fill in all fields';
    } else {
      axios.post('http://127.0.0.1:8000/api/patient/login', {
        'email': this.email, 
        'password': this.password, 
      })
      
      .then(response => {
        console.log('login response:', response);
        if (response.status === 200) {
          // Redirect to dashboard or other page after successful login
          this.$router.push('/dashboardPatient')

        } 
      }) 
      .catch(error => {
        console.log(error)
        this.errorMessage = 'The email Or password is not correct';

            this.error = true
          
        })
    }
  }
  }
}
    
</script>

<style>

</style>