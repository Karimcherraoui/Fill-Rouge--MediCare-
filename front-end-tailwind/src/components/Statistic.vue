<template>
  <div class="px-10">
    <div class="mt-3 grid grid-cols-1 lg:grid-cols-4 md:grid-cols-4 md:-mx-2 gap-4">
                       
        <div
                                class="flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full  ">
                                <div><img class="w-8 h-8" src="@/images/doctor-icon.svg" alt="">
                                </div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-400">Nb Doctors</div>
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-400">{{ count.doctor }}</h4>
                                </div>
                            </div>


                            <div
                                class=" flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full  ">
                                <div><img class="w-8 h-8" src="@/images/nurse-female-icon.svg" alt="">
                                </div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-400">Nb Nurses</div>
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-400">{{ count.nurse }}</h4>
                                </div>
                            </div>


                            <div
                                class=" flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full  ">
                                <div><img class="w-8 h-8" src="@/images/routine-icon.svg" alt="">
                                </div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-400">Appointments</div>
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-400">2</h4>
                                </div>
                            </div>


                            <!-- <div
                                class=" flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full   ">
                                <div class=""><img class="w-8 h-8" src="@/images/routine-icon.svg" alt=""></div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-400">Appointments</div>
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-400">2</h4>
                                </div>
                            </div> -->
                            <div
                                class=" flex justify-center items-center px-4 py-2 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full   ">
                                <div class=""><img class="w-8 h-8" src="@/images/patient-icon.svg" alt=""></div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-400">Nb Patients</div>
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-400">{{ count.patient }}</h4>
                                </div>
                            </div>

                            <!-- <div
                                class=" flex justify-center items-center px-4 py-2 mt-4 bg-gradient-to-r from-rose-100 to-teal-100  rounded-md shadow-lg hover:bg-green-500 w-full   ">
                                <div class=""><img class="w-8 h-8" src="@/images/patient-icon.svg" alt="">
                                </div>
                                <div class="mx-5 flex flex-cols justify-between w-full">
                                    <div class="text-xl font-semibold text-gray-700 hover:text-gray-400">Nb Patients</div>
                                    <h4 class="text-xl font-semibold text-gray-700 hover:text-gray-400">{{ count.patient }}</h4>
                                </div>
                            </div> -->

                    </div>
             
                

                
                    
                   
            </div>
</template>

<script>
import axios from 'axios';

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
                doctor:null,
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
        RoomAdd() {
            return this.activeComponent === 'AddRoom'
        },
        BedAdd() {
            return this.activeComponent === 'AddBed'
        },
        AddNurse() {
            return this.activeComponent === 'AddNurse'


        },
    },
}
</script>

<style>

</style>