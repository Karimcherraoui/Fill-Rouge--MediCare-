<template>

            <section class=" bg-white dark:bg-gray-900 w-full rounded-lg shadow-lg mb-10 mx-auto">
         
    
            <div class=" edit-patient  max-w-3xl p-8 mx-auto tex">
                <div class="w-full pt-20">
                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        Add a New Patient now.
                    </h1>
    
                    <p class="mt-4 text-gray-500 dark:text-gray-400">
                        Please fill out the form below to add a new patient to the system.
                    </p>
    
                    
    
                    <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Name</label>
                                <input type="text" placeholder="John" v-model="name"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                                <input type="email" placeholder="Exemple@exemple.com" v-model="email"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                                <input type="Password" placeholder="Password" v-model="password"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200"> Confirm Password</label>
                                <input type="Password" placeholder="Confirmation Password"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Gender</label>
                                <input type="text" placeholder="Snow" v-model="gender"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Phone number</label>
                                <input type="text" placeholder="XXX-XX-XXXX-XXX" v-model="phone"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Date of birth</label>
                                <input type="text" placeholder="Y-M-D" v-model="date_of_birth"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">address</label>
                                <input type="text" placeholder="address" v-model="address"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Assurance</label>
                                <input type="string" placeholder="Assurance" v-model="assurance"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div></div>
    
                               <div class=" p-3 mt-2 text-center space-x-4 md:block">
                <button
                  class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-md hover:shadow-lg hover:bg-gray-100"
                >
                  Save
                </button>
                <button @click="TogglePopup('buttonTrigger')" >
            close
            </button>    
              
              </div>
                        </form>
                    </div>
                </div>
    
        </section>

  </template>
  
  <script>
  import axios from 'axios';
  export default {
    props : 'TogglePopup',

      data() {
          return {
              name: '',
              email: '',
              password: '',
              gender: '',
              date_of_birth: '',
              phone: '',
              address: '',
              assurance: '',
              error: false
          }
      },
      props : ['TogglePopup'],

      methods: {
          goBack() {
              this.$router.go(-1); // Navigate to the previous page
          },
  
          signup() {
              if (this.name === '' || this.email === '' || this.password === '' || this.gender === '' || this.date_of_birth === '' || this.phone === '') {
                  this.error = true
              } else {
                  axios.post('http://127.0.0.1:8000/api/patient/store', JSON.stringify({
                      'name': this.name,
              'email': this.email,
              'password': this.password,
              'gender': this.gender,
              'date_of_birth': this.date_of_birth,
              'phone': this.phone,
              'address': this.address,
              'assurance': this.assurance,
                  }), {
                      headers: {
                          'Content-Type': 'application/json'
                      }
                  })
                      .then(response => {
  
  
                          if (response.data.message === 'client created') {
                              this.$router.go(-1); // Navigate to the previous page
                          }
                      })
                      .catch(error => {
                          console.log(error)
                      })
                  }
              },
              getPatientById() {
              axios.get('http://127.0.0.1:8000/api/patient/getClientById/' +id)
                  .then(response => {
                    console.log(response)
                    //   this.patients = response.data.patients;
                  })
                  .catch(error => {
                      console.log(error);
                  });
          },
  
          },
          //   computed: {
          //     signupForm() {
          //       return !(this.nom === '' || this.prenom === '' || this.phone === '' || this.email === '')
          //     }
          //   }
      }
  </script>
  
  <style scoped>
  .edit-patient {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color:white;
      z-index: 1000;
      bottom: 0;
      right: 0;
      display: flex;
      justify-content: center;
      align-items: center;
  }

  
  </style>