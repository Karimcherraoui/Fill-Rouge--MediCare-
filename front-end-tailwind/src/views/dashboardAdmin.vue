<template>
    <div class="flex flex-cols bg-gray-100">

        <aside
            class="flex flex-col w-64  px-5 py-8 overflow-y-auto bg-green-700 border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <a href="#">
                <img class="w-auto h-20" src="../images/medicare-2.png" alt="">
            </a>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav class="-mx-3 space-y-6 ">
                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-green-200 uppercase dark:text-gray-400">analytics</label>

                        <a class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                            </svg>

                            <span class="mx-2 text-sm font-medium text-gray-200">Dashboard</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                            </svg>

                            <span class="mx-2 text-sm font-medium text-gray-200">Preformance</span>
                        </a>
                    </div>

                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-green-200 uppercase dark:text-gray-400">content</label>

                        <a class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>

                            <span class="mx-2 text-sm font-medium text-gray-200">Guides</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                            </svg>

                            <span class="mx-2 text-sm font-medium text-gray-200">Hotspots</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>

                            <span class="mx-2 text-sm font-medium text-gray-200">Checklists</span>
                        </a>
                    </div>

                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-green-200 uppercase dark:text-gray-400">Customization</label>

                        <a class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                            </svg>

                            <span class="mx-2 text-sm font-medium text-gray-200">Themes</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-green-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            <span class="mx-2 text-sm font-medium text-gray-200">Setting</span>
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



<!-- <div class="flex flex-cols justify-center gap-10 ">
    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
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
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                
                <div>
                    <span class="block text-xl font-bold">139</span>
                    <span class="block text-gray-500">Hours spent on lections</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                
                <div>
                    <span class="block text-xl font-bold">139</span>
                    <span class="block text-gray-500">Hours spent on lections</span>
                </div>
            </div>
</div> -->










<div class="mt-4">
                <div class="flex flex-wrap -mx-6 my-4">
                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                        <div class="flex items-center px-2 py-2 bg-green-100 rounded-md shadow-lg">
                           <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
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
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
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
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
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
</div></template>

<script>
export default {

}
</script>

<style></style>