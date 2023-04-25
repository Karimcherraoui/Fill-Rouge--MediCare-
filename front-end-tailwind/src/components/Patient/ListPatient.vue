<template>
    <div class="overflow-x-auto">
        <div class="min-w-screen  flex items-center justify-center font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">

                <h1 class="text-2xl font-bold mb-8">List Patient</h1>

                <div class="bg-white shadow-md rounded my-6 overflow-x-auto ">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">#</th>
                                <th class="py-3 px-6 text-left">Action</th>
                                <th class="py-3 px-6 text-left">Client</th>
                                <th class="py-3 px-6 text-center">Email</th>
                                <th class="py-3 px-6 text-center">Gender</th>
                                <th class="py-3 px-6 text-center">Date of birthday</th>
                                <th class="py-3 px-6 text-center">Phone</th>
                                <th class="py-3 px-6 text-center">Address</th>
                                <th class="py-3 px-6 text-center">Assurance</th>
                              
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            <tr class="border-b border-gray-200 hover:bg-gray-100" v-for="patient in patients" :key="patient.id">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        
                                        <span class="font-medium">{{ patient.id }}</span>
                                    </div>
                                </td>
                                
                                
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center gap-2">
                                        <svg @click="deletePatient(patient.id)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
</svg>

<svg @click="TogglePopup('buttonTrigger')" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
</svg>


                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        
                                        <span class="font-medium">{{ patient.name }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        
                                        <span class="font-medium">{{ patient.email }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        
                                        <span class="font-medium">{{ patient.gender }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        
                                        <span class="font-medium">{{ patient.date_of_birth }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        
                                        <span class="font-medium">{{ patient.phone }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        
                                        <span class="font-medium">{{ patient.address }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        
                                        <span class="font-medium">{{ patient.assurance }}</span>
                                    </div>
                                </td>
                                
                                <!-- <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                            src="https://randomuser.me/api/portraits/men/1.jpg" />
                                        <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                            src="https://randomuser.me/api/portraits/women/2.jpg" />
                                        <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                            src="https://randomuser.me/api/portraits/men/3.jpg" />
                                    </div>
                                </td> -->
                               
                            </tr>
                           
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- <popup  :myProp="isModalVisible" @closeModal="closeModal"/> -->
<editPatient v-if="buttonTrigger" :TogglePopup="TogglePopup" buttonName="buttonTrigger" />

</template>
  
  <script>
  import axios from 'axios';


  import editPatient from './editPatient.vue'

  export default {

components: {
    editPatient
},

      data() {

          return {
            patients: [],
            buttonTrigger :false,
          }
      },
      mounted() {
          this.getPatients();
            
      },
     

      methods: {
        TogglePopup(buttonName) {
            console.log(this[buttonName])
      this[buttonName] = !this[buttonName];
        },

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
          deletePatient(id){
            axios.delete('http://127.0.0.1:8000/api/patient/delete/' + id)
            .then(response => {
                console.log(response.data.message);
                // update patient list
                axios.get('http://127.0.0.1:8000/api/patient/getAllPatient')
                  .then(response => {
                    console.log(response.data.patients)
                      this.patients = response.data.patients;
                  })
                  .catch(error => {
                      console.log(error);
                  });
            })
            .catch(error => {
                console.log(error.response.data);
            });
    },
  
          },
         
    }
      
  
</script>
  
<style></style>