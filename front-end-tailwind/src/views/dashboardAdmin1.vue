<template>
    <div class="flex flex-cols bg-gray-100">

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
        <main class="p-6 sm:p-10 space-y-6 w-full">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                <div class="mr-6">
                    <h1 class="text-4xl font-semibold mb-2">Dashboard Admin</h1>
                    <h2 class="text-gray-600 ml-0.5">Mobile UX/UI Design course</h2>
                </div>
                <div class="flex flex-wrap items-start justify-end -mb-3">
                    <button
                        class="inline-flex px-5 py-3 text-purple-600 hover:text-purple-700 focus:text-purple-700 hover:bg-purple-100 focus:bg-purple-100 border border-purple-600 rounded-md mb-3">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                        Manage dashboard
                    </button>
                    <button
                        class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Create new dashboard
                    </button>
                </div>
            </div>
            <!-- <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="flex items-center p-8 bg-white shadow-lg rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <div>
            <span class="block text-xl font-bold">62</span>
            <span class="block text-gray-500">Patients</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow-lg rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
          </div>
          <div>
            <span class="block text-xl font-bold">6.8</span>
            <span class="block text-gray-500">Average mark</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow-lg rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
            </svg>
          </div>
          <div>
            <span class="inline-block text-xl font-bold">9</span>
            <span class="inline-block text-xl text-gray-500 font-semibold">(14%)</span>
            <span class="block text-gray-500">Underperforming Patients</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow-lg rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <div>
            <span class="block text-xl font-bold">83%</span>
            <span class="block text-gray-500">Finished Appointment</span>
          </div>
        </div>
      </section> -->








            <div class="mt-4">
                <div class="flex flex-wrap -mx-6 my-4">
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                        <div class="flex items-center px-2 py-2 bg-white rounded-md shadow-lg">
                            <div class="p-3 bg-gray-200 bg-opacity-75 rounded-full"><img class="w-8 h-8"
                                    src="../images/doctor-icon.svg" alt="">
                            </div>
                            <div class="mx-5">
                                <h4 class="text-lg font-semibold text-gray-700">200,521</h4>
                                <div class="text-gray-500">Nb Doctors</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                        <div class="flex items-center px-2 py-2 bg-white rounded-md shadow-lg">
                            <div class="p-3 bg-pink-500 bg-opacity-75 rounded-full"><img class="w-8 h-8"
                                    src="../images/nurse-female-icon.svg" alt="">
                            </div>
                            <div class="mx-5">
                                <h4 class="text-lg font-semibold text-gray-700">200,521</h4>
                                <div class="text-gray-500">Nb Nurses</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                        <div class="flex items-center px-2 py-2 bg-white rounded-md shadow-lg">
                            <div class="p-3 bg-blue-300 bg-opacity-75 rounded-full"><img class="w-8 h-8"
                                    src="../images/routine-icon.svg" alt=""></div>
                            <div class="mx-5">
                                <h4 class="text-lg font-semibold text-gray-700">215,542</h4>
                                <div class="text-gray-500">Appointments</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex flex-wrap -mx-6">
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                        <div class="flex items-center px-2 py-2 bg-white rounded-md shadow-lg">
                            <div class="p-3 bg-green-200 bg-opacity-75 rounded-full"><img class="w-8 h-8"
                                    src="../images/patient-icon.svg" alt="">
                            </div>
                            <div class="mx-5">
                                <h4 class="text-lg font-semibold text-gray-700">200,521</h4>
                                <div class="text-gray-500">Nb Patients</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                        <div class="flex items-center px-2 py-2 bg-white rounded-md shadow-lg">
                            <div class="p-3 bg-blue-600 bg-opacity-75 rounded-full"><img class="w-8 h-8"
                                    src="../images/room.svg" alt="">
                            </div>
                            <div class="mx-5">
                                <h4 class="text-lg font-semibold text-gray-700">200,521</h4>
                                <div class="text-gray-500">Nb Rooms</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                        <div class="flex items-center px-2 py-2 bg-white rounded-md shadow-lg">
                            <div class="p-3 bg-red-400 bg-opacity-75 rounded-full"><img class="w-8 h-8"
                                    src="../images/beds.svg" alt=""></div>
                            <div class="mx-5">
                                <h4 class="text-lg font-semibold text-gray-700">215,542</h4>
                                <div class="text-gray-500">Available Beds</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="mt-4">
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
            </div>
















            <section class="grid md:grid-cols-2 xl:grid-cols-3 xl:grid-rows-3 xl:grid-flow-col gap-6">
                <div class="row-span-3 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
                        <span>List of Doctors</span>
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
                        <ul class="p-6 space-y-6">
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/82.jpg"
                                        alt="Annette Watson profile picture">
                                </div>
                                <span class="text-gray-600">Annette Watson</span>
                                <span class="ml-auto font-semibold">9.3</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/81.jpg"
                                        alt="Calvin Steward profile picture">
                                </div>
                                <span class="text-gray-600">Calvin Steward</span>
                                <span class="ml-auto font-semibold">8.9</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/80.jpg"
                                        alt="Ralph Richards profile picture">
                                </div>
                                <span class="text-gray-600">Ralph Richards</span>
                                <span class="ml-auto font-semibold">8.7</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/79.jpg"
                                        alt="Bernard Murphy profile picture">
                                </div>
                                <span class="text-gray-600">Bernard Murphy</span>
                                <span class="ml-auto font-semibold">8.2</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/78.jpg"
                                        alt="Arlene Robertson profile picture">
                                </div>
                                <span class="text-gray-600">Arlene Robertson</span>
                                <span class="ml-auto font-semibold">8.2</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/77.jpg"
                                        alt="Jane Lane profile picture">
                                </div>
                                <span class="text-gray-600">Jane Lane</span>
                                <span class="ml-auto font-semibold">8.1</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/76.jpg"
                                        alt="Pat Mckinney profile picture">
                                </div>
                                <span class="text-gray-600">Pat Mckinney</span>
                                <span class="ml-auto font-semibold">7.9</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg"
                                        alt="Norman Walters profile picture">
                                </div>
                                <span class="text-gray-600">Norman Walters</span>
                                <span class="ml-auto font-semibold">7.7</span>
                            </li>
                        </ul>
                    </div>
                </div>




                <div class="row-span-3 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
                        <span>List of Nurses</span>
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
                        <ul class="p-6 space-y-6">
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/82.jpg"
                                        alt="Annette Watson profile picture">
                                </div>
                                <span class="text-gray-600">Annette Watson</span>
                                <span class="ml-auto font-semibold">9.3</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/81.jpg"
                                        alt="Calvin Steward profile picture">
                                </div>
                                <span class="text-gray-600">Calvin Steward</span>
                                <span class="ml-auto font-semibold">8.9</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/80.jpg"
                                        alt="Ralph Richards profile picture">
                                </div>
                                <span class="text-gray-600">Ralph Richards</span>
                                <span class="ml-auto font-semibold">8.7</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/79.jpg"
                                        alt="Bernard Murphy profile picture">
                                </div>
                                <span class="text-gray-600">Bernard Murphy</span>
                                <span class="ml-auto font-semibold">8.2</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/78.jpg"
                                        alt="Arlene Robertson profile picture">
                                </div>
                                <span class="text-gray-600">Arlene Robertson</span>
                                <span class="ml-auto font-semibold">8.2</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/77.jpg"
                                        alt="Jane Lane profile picture">
                                </div>
                                <span class="text-gray-600">Jane Lane</span>
                                <span class="ml-auto font-semibold">8.1</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/76.jpg"
                                        alt="Pat Mckinney profile picture">
                                </div>
                                <span class="text-gray-600">Pat Mckinney</span>
                                <span class="ml-auto font-semibold">7.9</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg"
                                        alt="Norman Walters profile picture">
                                </div>
                                <span class="text-gray-600">Norman Walters</span>
                                <span class="ml-auto font-semibold">7.7</span>
                            </li>
                        </ul>
                    </div>
                </div>





                <div class="row-span-3 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
                        <span>List Patients </span>
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
                        <ul class="p-6 space-y-6">
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/82.jpg"
                                        alt="Annette Watson profile picture">
                                </div>
                                <span class="text-gray-600">Annette Watson</span>
                                <span class="ml-auto font-semibold">9.3</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/81.jpg"
                                        alt="Calvin Steward profile picture">
                                </div>
                                <span class="text-gray-600">Calvin Steward</span>
                                <span class="ml-auto font-semibold">8.9</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/80.jpg"
                                        alt="Ralph Richards profile picture">
                                </div>
                                <span class="text-gray-600">Ralph Richards</span>
                                <span class="ml-auto font-semibold">8.7</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/79.jpg"
                                        alt="Bernard Murphy profile picture">
                                </div>
                                <span class="text-gray-600">Bernard Murphy</span>
                                <span class="ml-auto font-semibold">8.2</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/78.jpg"
                                        alt="Arlene Robertson profile picture">
                                </div>
                                <span class="text-gray-600">Arlene Robertson</span>
                                <span class="ml-auto font-semibold">8.2</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/77.jpg"
                                        alt="Jane Lane profile picture">
                                </div>
                                <span class="text-gray-600">Jane Lane</span>
                                <span class="ml-auto font-semibold">8.1</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/76.jpg"
                                        alt="Pat Mckinney profile picture">
                                </div>
                                <span class="text-gray-600">Pat Mckinney</span>
                                <span class="ml-auto font-semibold">7.9</span>
                            </li>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg"
                                        alt="Norman Walters profile picture">
                                </div>
                                <span class="text-gray-600">Norman Walters</span>
                                <span class="ml-auto font-semibold">7.7</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </section>

        </main>
    </div>
</template>

<script>
export default {

}
</script>

<style></style>