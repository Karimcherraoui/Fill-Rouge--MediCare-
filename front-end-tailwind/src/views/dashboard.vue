<template>
    <div class="flex flex-cols "
       >

        <aside
            class="flex flex-col w-64 px-5 py-8 overflow-y-auto bg-gradient-to-l from-green-500 to-green-700 dark:bg-gray-900 dark:border-gray-700">
            <a href="#">
                <img class="w-auto h-20" src="../images/medicare-2.png" alt="">
            </a>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav class="-mx-3 space-y-6 ">
                    <div class="space-y-3 ">

                        <a @click="toggleActiveComponent('AllUser')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="../images/dashboard.png" alt="">

                            <span class="mx-4 text-sm font-medium text-gray-200">Dashboard</span>
                        </a>
                        <a @click="toggleAddPatient"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="../images/listDoctor.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">List Doctor</span>
                        </a>
                        <label class="px-3 text-xs text-green-200 uppercase dark:text-gray-400">Patient</label>

                        <a @click="toggleActiveComponent('ListPatient')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="../images/listPatient.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">List Patient</span>
                        </a>
                        <a @click="toggleAddPatient"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="../images/patient.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">Add Patient</span>
                        </a>
                        <a @click="toggleAddPatient"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="../images/medical-record.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">History Medical</span>
                        </a>


                        <label class="px-3 text-xs text-green-200 uppercase dark:text-gray-400">Appointment</label>

                        <a @click="toggleActiveComponent('ListPatient')"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="../images/listappointment.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">List Appointment</span>
                        </a>


                        <a @click="toggleAddPatient"
                            class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <img class="w-7 h-7 " src="../images/appointment.png" alt="">
                            <span class="mx-4 text-sm font-medium text-white">Add Appointment</span>
                        </a>

                        

                    </div>





                </nav>
            </div>
        </aside>
        <div class="container mx-auto ">
            <header class="flex items-center justify-between px-6 py-4"
                style="background-image: url('https://img.freepik.com/free-vector/abstract-medical-wallpaper-template-design_53876-61802.jpg?w=996&t=st=1681657613~exp=1681658213~hmac=e6e482de963b45af7d0016c251ddd6c87ed9b20411cd8f2065c3b72603926b68')">
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
             <Dropdown/>
            <div class="px-10">
                <h3 class="text-2xl font-medium text-gray-700 mt-4"><button
                        @click="toggleActiveComponent('AllUser')">Dashboard</button>
                </h3>
                <div class="mt-4">
                    <div class="flex flex-wrap -mx-6 my-4">
                        <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                            <button @click="toggleActiveComponent('ListDoctor')"
                                class="flex justify-center items-center px-4  py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full">
                                <div class="py-1"><img class="w-8 h-8" src="../images/doctor-icon.svg" alt="">
                                </div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-200">Doctors :</h4>
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-200">8 / 10</div>
                                </div>
                            </button>
                        </div>

                        <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                            <button @click="toggleActiveComponent('ListPatient')"
                                class="flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full">
                                <div class="py-1"><img class="w-8 h-8" src="../images/patient-icon.svg" alt=""></div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-200">Patients :</h4>
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-200">20</div>

                                </div>
                            </button>
                        </div>
                        <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                            <button @click="toggleActiveComponent('ListAppointment')"
                                class="flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full">
                                <div class="py-1"><img class="w-8 h-8" src="../images/routine-icon.svg" alt="">
                                </div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-200">Appointment
                                    </h4>
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-200">8/20</div>

                                </div>
                            </button>
                        </div>

                    </div>


                    <div class="flex flex-wrap -mx-6 my-4">
                        <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                            <button @click="toggleActiveComponent('ListDoctor')"
                                class="flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full">
                                <div class="py-1"><img class="w-8 h-8" src="../images/doctor-icon.svg" alt="">
                                </div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-200">Room :</h4>
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-200">13</div>
                                </div>
                            </button>
                        </div>

                        <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                            <button @click="toggleActiveComponent('ListPatient')"
                                class="flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full">
                                <div class="py-1"><img class="w-8 h-8" src="../images/patient-icon.svg" alt=""></div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-200">Bed :</h4>
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-200">8 / 20</div>

                                </div>
                            </button>
                        </div>
                        <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                            <button @click="toggleActiveComponent('ListAppointment')"
                                class="flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full">
                                <div class="py-1"><img class="w-8 h-8" src="../images/routine-icon.svg" alt="">
                                </div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-200">Absence :
                                    </h4>
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-200">10</div>

                                </div>
                            </button>
                        </div>

                    </div>




                </div>
                <div class="mt-8"></div>
                <!-- <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full">
                            <thead >
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Name </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Title </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Status </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Role </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10"><img class="w-10 h-10 rounded-full"
                                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                    alt=""></div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">John Doe</div>
                                                <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                        <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                    </td>
                                    <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap"><span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                                    </td>
                                    <td
                                        class="px-6 py-4 text-sm leading-5 text-gray-500 border-b border-gray-200 whitespace-nowrap">
                                        Owner</td>
                                    <td
                                        class="px-6 py-4 text-sm font-medium leading-5 text-right border-b border-gray-200 whitespace-nowrap">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10"><img class="w-10 h-10 rounded-full"
                                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                    alt=""></div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">John Doe</div>
                                                <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                        <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                    </td>
                                    <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap"><span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                                    </td>
                                    <td
                                        class="px-6 py-4 text-sm leading-5 text-gray-500 border-b border-gray-200 whitespace-nowrap">
                                        Owner</td>
                                    <td
                                        class="px-6 py-4 text-sm font-medium leading-5 text-right border-b border-gray-200 whitespace-nowrap">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->
                <AddPatients :class="AddPatients ? 'block' : 'hidden'" />
                <!-- <AllUser :class="AllUser ? 'block' : 'hidden'" /> -->
                <component :is="activeComponent" />

            </div>
        </div>
    </div>
</template>

<script>
import ListPatient from '@/components/Patient/ListPatient.vue'
import AddPatients from '@/components/Patient/Add_Patient.vue'
import ListAppointment from '@/components/Appointment/ListAppointment.vue'
import ListDoctor from '@/components/Doctor/ListDoctor.vue'
import Dropdown from '../components/dropdown.vue'
import AllUser from '@/components/Nurse/DashNurse.vue'

export default {
    components: {
        ListAppointment,
        Dropdown,
        ListDoctor,
        ListPatient,
        AddPatients,
        AllUser,
    },
    data() {
        return {
            AllUser: true,
            AddPatients: false,
            activeComponent: 'AllUser',
        }
    },
    methods: {
        toggleDAshboard() {
            this.AddPatients = false;
            this.AllUser = true;
        },
        toggleAddPatient() {
            this.AllUser = false;
            this.AllUser = false;
            this.AddPatients = true;
            this.activeComponent = '';


            //   this.activeComponent = componentName;
        },
        toggleActiveComponent(componentName) {
            console.log('test')
            this.AllUser = false;
            this.AddPatients = false;

            this.activeComponent = componentName;
        },
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
    },
}
</script>
<style></style>