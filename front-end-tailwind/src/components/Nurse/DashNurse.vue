<template>
  <section class="mt-20 grid md:grid-cols-2 xl:grid-cols-3 xl:grid-rows-3 xl:grid-flow-col gap-6 mb-10">
                <div class="row-span-3 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
                        <span>List of Doctors </span>
                        <button type="button"
                            class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600"
                            id="options-menu" aria-haspopup="true" aria-expanded="true">
                            Descending
                            <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
                    </div>
                    <div class="overflow-y-auto" style="max-height: 24rem;">
                        <ul class="p-6 space-y-6" v-for="doctor in doctors" :key="doctor.id">
                            <li class="flex items-center">
                             
                                <span class="text-gray-600">{{ doctor.name }}</span>
                            </li>
                           
                        </ul>
                    </div>
                </div>




                <div class="row-span-3 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
                        <span>List of Patients</span>
                        <button type="button"
                            class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600"
                            id="options-menu" aria-haspopup="true" aria-expanded="true">
                            Descending
                            <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
                    </div>
                    <div class="overflow-y-auto" style="max-height: 24rem;">
                        <ul class="p-6 space-y-6" v-for="patient in patients" :key="patient.id">
                            <li class="flex items-center">
                            
                                <span class="text-gray-600">{{ patient.name }}</span>
                            </li>
                           
                        </ul>
                    </div>
                </div>





                <div class="row-span-3 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
                        <span>List of Nurse </span>
                        <button type="button"
                            class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600"
                            id="options-menu" aria-haspopup="true" aria-expanded="true">
                            Descending
                            <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
                    </div>
                    <div class="overflow-y-auto" style="max-height: 24rem;">
                        <ul class="p-6 space-y-6"  v-for="nurse in nurses" :key="nurse.id">
                            <li class="flex items-center">
                              
                                <span class="text-gray-600">
                                    {{ nurse.name }}
                                </span>
                            </li>
                           
                        </ul>
                    </div>
            </div>
           
        </section>
</template>

<script>
  import axios from 'axios';

  export default {
      data() {
          return {
              patients: [],
              doctors: [],
              nurses: [],
          }
      },
      mounted() {
          this.getPatients();
          this.getDoctor();
          this.getNurses();


      },
      methods: {
          getPatients() {
              axios.get('http://127.0.0.1:8000/api/patient/getAllPatient')
                  .then(response => {
                    console.log(response.data.patients)
                      this.patients = response.data.patients;
                  })
                  .catch(error => {
                      console.log(error);
                  });
          },
          getDoctor() {
            axios.get('http://127.0.0.1:8000/api/doctor/getAllDoctor')
                .then(response => {
                    console.log(response.data.doctor)
                    this.doctors = response.data.doctor;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        getNurses() {
            axios.get('http://127.0.0.1:8000/api/nurse/getAllNurse')
                .then(response => {
                    console.log(response.data.nurse)
                    this.nurses = response.data.nurse;
                })
                .catch(error => {
                    console.log(error);
                });
        }
      }
  }
</script>
<style>

</style>