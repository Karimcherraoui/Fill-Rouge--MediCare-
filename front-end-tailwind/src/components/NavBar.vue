<template>
  <nav x-data="{ isOpen: false }" class="w-full bg-gradient-to-l from-green-500 to-green-700 dark:bg-gray-800 shadow-lg sticky top-0 z-50">
    <div class="container px-6 py-4 mx-auto">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
              <a class="text-3xl font-bold leading-none" href="#">
                <img src="@/images/medicare-2.png" class="h-16">
        </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 mt-4 transition-all duration-300 ease-in-out bg-white  dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                <div class=" flex flex-col -mx-6 lg:flex-row lg:pr-[380px] lg:items-center lg:mx-8 ">
                    <a href="#" class="px-3 py-2 mx-3 mt-2 lg:text-white  transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-700 dark:hover:bg-gray-700">Home</a>
                    <a href="#Doctors" class="px-3 py-2 mx-3 mt-2 lg:text-white transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-700 dark:hover:bg-gray-700">Doctors</a>
                    <a href="#Aboutus" class="px-3 py-2 mx-3 mt-2 lg:text-white transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-700 dark:hover:bg-gray-700">About Us</a>
                    <a href="#ContactUs" class="px-3 py-2 mx-3 mt-2 lg:text-white transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-700 dark:hover:bg-gray-700">Contact Us</a>
                </div>

                <div class="flex items-center mt-4 lg:mt-0">
                    <!-- <button class="hidden mx-4 text-white transition-colors duration-300 transform lg:block dark:text-gray-200 hover:text-white dark:hover:text-gray-400 focus:text-white dark:focus:text-gray-400 focus:outline-none" aria-label="show notifications">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button> -->
<!-- 
                    <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                        <div class="w-8 h-8 overflow-hidden border-2 border-white rounded-full">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="object-cover w-full h-full" alt="avatar">
                        </div>
                    </button> -->
                    <a href="/login" type="button" class="flex flex-cols gap-3 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <img class="w-7 h-7" src="@/images/sign-in.png" alt="">
                        <div>LOGIN </div>

                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
</template>

<script setup>

import { ref } from 'vue'
const isOpen = ref(false)
</script>

<style>

</style>