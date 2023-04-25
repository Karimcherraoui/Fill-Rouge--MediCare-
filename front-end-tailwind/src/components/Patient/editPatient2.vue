<template>


      <transition name="fade">
        
          <div
            class="w-full max-w-lg p-3 relative mx-auto my-auto rounded-xl shadow-lg "
          >
          <div v-if="isModalVisible">
          <div
            @click="onToggle"
            class="absolute bg-black opacity-70 inset-0 z-0"
          >
        </div>
            <section class="bg-white dark:bg-gray-900 w-full rounded-lg shadow-lg mb-10 mx-auto">
         
    
            <div class="flex items-center w-full max-w-3xl p-8 mx-auto tex">
                <div class="w-full">
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
                <button
                  @click="onToggle"
                  class="mb-2 md:mb-0 bg-purple-500 border border-purple-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-md hover:shadow-lg hover:bg-purple-600"
                >
                  Close
                </button>
              </div>
                        </form>
                    </div>
                </div>
    
        </section>
          </div>
        </div>
      </transition>
  </template>
  
  <script>

  export default {
   
    data() {
      return {
        isOpen: true
      };
    },
  
    computed: {
      isModalVisible() {
        return this.isOpen;
      }
    },
  
    methods: {
      onToggle() {
        this.isOpen = !this.isOpen;
      }
    }
  };
  </script>
  <style>
  #app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
  }
  
  .fade-enter,
  .fade-leave-to {
    opacity: 0;
  }
  
  .fade-enter-active,
  .fade-leave-active {
    transition: opacity 500ms ease-out;
  }
  </style>
  