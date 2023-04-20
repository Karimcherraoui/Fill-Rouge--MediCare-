<template>
    
    <button @click="goBack" class="flex flex-cols gap-3 justify-center mt-12 ml-10  "> 
    <img src="@/images/previous.png" class="w-8 h-8" alt="">
    <h4 class="font-bold text-xl text-center mt-1">back</h4>
</button>
  <div class="flex flex-cols h-full " style="background-image: url('https://img.freepik.com/free-vector/abstract-medical-wallpaper-template-design_53876-61802.jpg?w=996&t=st=1681657613~exp=1681658213~hmac=e6e482de963b45af7d0016c251ddd6c87ed9b20411cd8f2065c3b72603926b68')">
<div class="flex w-full max-w-sm mx-auto mt-[5%] overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
    
    <div class="hidden bg-cover lg:block lg:w-1/2" style="background-image: url('https://imgs.search.brave.com/zRfW5NGip8sCsMkk8Iyc7ny9XGVDmKFn1M2rIh7fcjw/rs:fit:1200:980:1/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvcHJl/dmlld3MvMDAwLzQx/Ny84NDQvb3JpZ2lu/YWwvaGVhbHRoY2Fy/ZS1jbGluaWMtdmVj/dG9yLWZsYXQtaWxs/dXN0cmF0aW9uLmpw/Zw');"></div>

    <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">

        <div class="flex justify-center mx-auto">
            <img class="w-auto h-7 sm:h-8" src="@/images/medicare-2.png" alt="">
        </div>

        <p class="mt-3 text-xl text-center text-gray-600 dark:text-gray-200">
            Welcome back!
        </p>
        <div class="mt-6 ">

                    <div class="mt-3 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 md:-mx-2">
                        <a @click="toggleActiveComponent('LoginPatient')" class="flex justify-center w-full px-6 py-3  text-green-500 border border-blue-500 hover:bg-green-500 hover:text-white  rounded-lg md:w-auto md:mx-2 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="">
                                Patient
                            </span>
                        </a>

                        <a @click="toggleActiveComponent('LoginDoctor')" class="flex justify-center w-full px-6 py-3 mt-4 text-green-500 border hover:bg-green-500 hover:text-white border-blue-500 rounded-lg md:mt-0 md:w-auto md:mx-2 dark:border-blue-400 dark:text-blue-400 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="">
                                Doctor
                            </span>
                        </a>
                        <a @click="toggleActiveComponent('LoginNurse')" class="flex justify-center w-full px-6 py-3 mt-4  text-green-500 border hover:bg-green-500 hover:text-white  border-blue-500 rounded-lg md:mt-0 md:w-auto md:mx-2 dark:border-blue-400 dark:text-blue-400 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="">
                                Nurse
                            </span>
                        </a>
                    </div>
                </div>



        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

            <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
        </div>

        <component :is="activeComponent" />


        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

            <a href="/signup" class="text-sm font-medium text-center text-gray-500 dark:text-gray-200"> Sign Up</a>
            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
        </div>
    </div>
</div>
</div>
</template>

<script >
import LoginPatient from '@/components/Patient/LoginPatient.vue'
import LoginNurse from '@/components/Nurse/LoginNurse.vue'
import LoginDoctor from '@/components/Doctor/LoginDoctor.vue'

export default {
    components: {
        LoginPatient,
        LoginNurse,
        LoginDoctor
    },
    data() {
        return {

            activeComponent: 'LoginPatient',
        }
    },
    methods: {
    goBack() {
      this.$router.go(-1); // Navigate to the previous page
    },

     
        toggleActiveComponent(componentName) {
            console.log('test')
            this.activeComponent = componentName;
        },
    },
    
    computed: {
        PatientLogin() {
            return this.activeComponent === 'LoginPatient'
        },

        NurseLogin() {
            return this.activeComponent === 'LoginNurse'
        },
        DoctorLogin() {
            return this.activeComponent === 'LoginDoctor'
        },
       
    },
}
</script>

<style>

</style>