<template>
    <div class="relative inline-block ">
        <!-- Dropdown toggle button -->
        <button @click="toggleDropdown"
            class="relative z-10 flex items-center p-2 text-sm text-gray-600 bg-white border border-transparent rounded-md focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:text-white dark:bg-gray-800 focus:outline-none">
            <span class="mx-1">{{ userName }}</span>
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                    fill="currentColor"></path>
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div v-if="isOpen" v-click-away="onClickAway" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="absolute right-0 z-20 w-56 py-2 mt-2 overflow-hidden origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-800">
            <a href="#"
                class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9"
                    src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200"
                    alt="jane avatar">
                <div class="mx-1">
                    <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200">{{ userName }}</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ email }}</p>
                </div>
            </a>

            <hr class="border-gray-200 dark:border-gray-700 ">

           


            <hr class="border-gray-200 dark:border-gray-700 ">

           
            <a @click="logout"
                class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 21H10C8.89543 21 8 20.1046 8 19V15H10V19H19V5H10V9H8V5C8 3.89543 8.89543 3 10 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z"
                        fill="currentColor"></path>
                </svg>

                <span class="mx-1">
                    Sign Out
                </span>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false,
            userName: '',
            email: '',

        }
    },
    mounted() {
        this.getUser();
    },
    methods: {
        toggleDropdown() {
            this.isOpen = !this.isOpen;
        },
        onClickAway() {
            this.isOpen = false;

        },
        getUser() {
            console.log(localStorage.getItem('name'))
            this.userName = localStorage.getItem('name')
            this.email = localStorage.getItem('email')
        },

        logout() {

            localStorage.clear();
            this.$router.push('/')

        }

    }
}
</script>

<style></style>