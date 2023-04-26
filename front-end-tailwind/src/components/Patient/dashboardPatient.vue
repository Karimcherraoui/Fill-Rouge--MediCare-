<template>
    <div class="flex flex-cols h-screen">

        <aside
            class="flex flex-col h-full w-64 px-5 py-8 overflow-y-auto bg-gradient-to-l from-green-500 to-green-700 dark:bg-gray-900 dark:border-gray-700">
            <a href="/">
                <img class="w-auto h-20" src="@/images/medicare-2.png" alt="">
            </a>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav class="-mx-3 space-y-6 ">
                    <div class="space-y-3 ">

                        <a @click="toggleActiveComponent('ListAppointment')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="@/images/dashboard.png" alt="">

                            <span class="mx-4 text-sm font-medium text-gray-200">Dashboard</span>
                        </a>
                        <a @click="toggleActiveComponent('ListDoctor')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="@/images/listDoctor.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">List Doctor</span>
                        </a>

                        <a @click="toggleActiveComponent('historyMedical')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="@/images/medical-record.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">History Medical</span>
                        </a>


                        <label class="px-3 text-xs text-green-200 uppercase dark:text-gray-400">Appointment</label>

                        <a @click="toggleActiveComponent('ListAppointment')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="@/images/listappointment.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">List Appointment</span>
                        </a>


                        <a @click="toggleActiveComponent('AddAppointment')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="@/images/appointment.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">Add Appointment</span>
                        </a>


                    </div>





                </nav>
            </div>
        </aside>
        <div class="container mx-auto overflow-y-auto">
            <header class="flex items-center justify-between px-6 py-4"
                style="background-image: url('https://img.freepik.com/free-vector/abstract-medical-wallpaper-template-design_53876-61802.jpg?w=996&t=st=1681657613~exp=1681658213~hmac=e6e482de963b45af7d0016c251ddd6c87ed9b20411cd8f2065c3b72603926b68')">
                <div class="flex items-center"><button class="text-gray-500 focus:outline-none lg:hidden"><svg
                            class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg></button>
                  
                </div>



                <Dropdown />


            </header>
            <div class="px-10">
                <h3 class="text-2xl font-medium text-gray-700 mt-4"><button
                        @click="toggleActiveComponent('ListAppointment')">Dashboard</button>
                </h3>
                <div class="flex mt-4 justify-center">



                    <div class="flex flex-wrap text-center -mx-6 my-4 w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                        <button @click="toggleActiveComponent('ListAppointment')"
                            class="flex justify-center items-center px-4 py-4 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full">
                            <div class="py-1"><img class="w-8 h-8" src="@/images/routine-icon.svg" alt="">
                            </div>
                            <div class="mx-5 flex flex-cols justify-between w-full">
                                <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-500">Appointment
                                </h4>
                                <div class="text-xl font-semibold text-gray-700 hover:text-gray-500">{{ countApp }}</div>

                            </div>
                        </button>
                    </div>





                </div>

                <!-- <AddPatients :class="AddPatients ? 'block' : 'hidden'" /> -->
                <!-- <AllUser :class="AllUser ? 'block' : 'hidden'" /> -->
                <component :is="activeComponent" />

            </div>
        </div>
    </div>
</template>

<script>

import ListAppointment from '@/components/Appointment/ListAppointment.vue'
import AddAppointment from '@/components/Appointment/Add_appointment.vue'
import ListDoctor from '@/components/Doctor/ListDoctor.vue'
import Dropdown from '@/components/dropdown.vue'
import historyMedical from '@/components/Patient/historyMedical.vue'

import axios from 'axios'
export default {
    components: {
        ListAppointment,
        AddAppointment,

        ListDoctor,
        Dropdown,
        historyMedical
  
    },
    data() {
        return {
            countApp: '',
            activeComponent: 'ListAppointment',
        }
    },
    mounted(){
        this.getAppoitments();
    },

    methods: {
        getAppoitments(){
            axios.get('http://127.0.0.1:8000/api/appointment/getAllAppointment')
          .then(response => {
            console.log(response.data.count)
            this.countApp = response.data.count;

          })
          .catch(error => {
            console.log(error);
          });
        },
        toggleActiveComponent(componentName) {
            console.log('test')


            this.activeComponent = componentName;
        },
    },
    computed: {

        ListOfDoctor() {
            return this.activeComponent === 'ListDoctor'
        },
        ListOfAppointment() {
            return this.activeComponent === 'ListAppointment'
        },
        ListOfHistory() {
            return this.activeComponent === 'historyMedical'
        },
        AddAppointment() {
            return this.activeComponent === 'AddAppointment'
        },
    },
}
</script>
<style></style>