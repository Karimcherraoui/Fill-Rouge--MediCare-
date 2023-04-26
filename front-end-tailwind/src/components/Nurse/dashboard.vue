<template >
    <div class="flex flex-cols h-screen">

        <aside
            class="flex flex-col w-64 px-5 py-8 overflow-y-auto bg-gradient-to-l from-green-500 to-green-700 dark:bg-gray-900 dark:border-gray-700">
            <a href="/">
                <img class="w-auto h-20" src="@/images/medicare-2.png" alt="">
            </a>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav class="-mx-3 space-y-6 ">
                    <div class="space-y-3 ">

                        <a @click="toggleActiveComponent('AllUser')"
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

                        <label class="px-3 text-xs text-green-200 uppercase dark:text-gray-400">Patient</label>

                        <a @click="toggleActiveComponent('ListPatient')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="@/images/listPatient.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">List Patient</span>
                        </a>
                        <a @click="toggleActiveComponent('AddPatients')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="@/images/patient.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">Add Patient</span>
                        </a>
                        <a @click="toggleAddPatient"
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
        <div class="container mx-auto ">
            <header class="flex items-center justify-between px-6 py-4"
                style="background-image: url('https://img.freepik.com/free-vector abstract-medical-wallpaper-template-design_53876-61802.jpg?w=996&t=st=1681657613~exp=1681658213~hmac=e6e482de963b45af7d0016c251ddd6c87ed9b20411cd8f2065c3b72603926b68')">
                <div class="flex items-center"><button class="text-gray-500 focus:outline-none lg:hidden"><svg
                            class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg></button>
                    <div class="relative mx-4 lg:mx-0"><span class="absolute inset-y-0 left-0 flex items-center pl-3"><svg
                                class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg></span><input
                            class="w-32 pl-10 pr-4 text-indigo-600 border-gray-200 rounded-md sm:w-64 focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                            type="text" placeholder="Search"></div>
                </div>
                <Dropdown />
            </header>
            <div class="px-10">
                <h3 class="text-2xl font-medium text-gray-700 mt-4"><button
                        @click="toggleActiveComponent('AllUser')">Dashboard</button>
                </h3>


                <statisticSection />


                <div class="flex flex-wrap -mx-6 my-4">
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                        <div class="flex items-center px-2 py-2 bg-green-100 rounded-md shadow-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>

                            <div>
                                <span class="block text-xl font-bold">139</span>
                                <span class="block text-gray-500">Hours spent on lections</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                        <div class="flex items-center px-2 py-2 bg-green-100 rounded-md shadow-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="h-6 w-6">
                                    <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path fill="#fff"
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                            </div>
                            <div>
                                <span class="block text-xl font-bold">25</span>
                                <span class="block text-gray-500">Lections left</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                        <div class="flex items-center px-2 py-2 bg-green-100 rounded-md shadow-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="h-6 w-6">
                                    <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path fill="#fff"
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                            </div>
                            <div>
                                <span class="block text-xl font-bold">25</span>
                                <span class="block text-gray-500">Lections left</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex flex-wrap -mx-6">


                </div>


                <component :is="activeComponent" />

            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

import statisticSection from '@/components/Statistic.vue'
import ListPatient from '@/components/Patient/ListPatient.vue'
import AddPatients from '@/components/Patient/Add_Patient.vue'
import ListAppointment from '@/components/Appointment/ListAppointment.vue'
import ListDoctor from '@/components/Doctor/ListDoctor.vue'
import AddDoctor from '@/components/Doctor/Add_doctor.vue'
import AddAppointment from '@/components/Appointment/Add_appointment.vue'
import Dropdown from '@/components/dropdown.vue'
import AllUser from '@/components/Nurse/DashNurse.vue'
import AddNurse from '@/components/Nurse/Add_nurse.vue'


export default {
    components: {
        statisticSection,
        ListAppointment,
        AddAppointment,
        Dropdown,
        ListDoctor,
        AddDoctor,
        ListPatient,
        AddPatients,
        AllUser,
        AddNurse,
    },
    data() {
        return {
            count: {
                patient: null,
                nurse: null,
                doctor: null,
            },
            AllUser: true,

            activeComponent: 'AllUser',
        }
    },
    mounted() {
        this.getPatients();
        this.getNurse();
        this.getDoctor();


    },
    methods: {
      
        toggleActiveComponent(componentName) {
            console.log('test')
            this.AllUser = false;
            // this.AddPatients = false;

            this.activeComponent = componentName;
        },
        getPatients() {
            axios.get('http://127.0.0.1:8000/api/patient/getAllPatient')
                .then(response => {
                    console.log(response.data.patients)
                    this.count.patient = response.data.count;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        getNurse() {
            axios.get('http://127.0.0.1:8000/api/nurse/getAllNurse')
                .then(response => {
                    console.log(response)
                    this.count.nurse = response.data.count;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        getDoctor() {
            axios.get('http://127.0.0.1:8000/api/doctor/getAllDoctor')
                .then(response => {
                    console.log(response)
                    this.count.doctor = response.data.count;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    computed: {
        ListOfDoctor() {
            return this.activeComponent === 'ListDoctor'
        },

        ListOfPatient() {
            return this.activeComponent === 'ListPatient'
        },
        ListOfAppointment() {
            return this.activeComponent === 'ListAppointment'
        },
        AddAppointment() {
            return this.activeComponent === 'AddAppointment'
        },
        AddPatient() {
            return this.activeComponent === 'AddPatients'
        },

        AddNurse() {
            return this.activeComponent === 'AddNurse'


        },
    },
}
</script>
<style></style>