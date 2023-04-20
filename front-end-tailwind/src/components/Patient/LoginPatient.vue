<template>
    <form @submit.prevent="login">

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
    } 
  
  },
  mounted(){
      if(localStorage.getItem('email') !== null){
        this.$router.push('/dashboardPAtient')
      }
  },

    methods: {
    goBack() {
      this.$router.go(-1); // Navigate to the previous page
    },
    login() {
      axios.post('http://127.0.0.1:8000/api/patient/login', JSON.stringify({
        'email': this.email, 
        'password': this.password, 

      }), {
  headers: {
    'Content-Type': 'application/json'
  }
})
        .then(response => {
          console.log(response);
          if (response.status) {
            localStorage.setItem('email', this.email)
            localStorage.setItem('id', response.data.status[0].id)
            this.$router.push('/dashboardPAtient')
          } else {
            alert('Invalid UserName')
          }
        })
    }

  }
}
</script>

<style>

</style>