<template>
    
    <button @click="goBack" class="flex flex-cols gap-3 justify-center mt-12 ml-10  "> 
    <img src="@/images/previous.png" class="w-8 h-8" alt="">
    <h4 class="font-bold text-xl text-center mt-1">back</h4>
</button>
  <div class="flex flex-cols h-full " style="background-image: url('https://img.freepik.com/free-vector/abstract-medical-wallpaper-template-design_53876-61802.jpg?w=996&t=st=1681657613~exp=1681658213~hmac=e6e482de963b45af7d0016c251ddd6c87ed9b20411cd8f2065c3b72603926b68')">
<div class="flex w-full max-w-sm mx-auto mt-[5%] overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
    
    <div class="hidden bg-cover lg:block lg:w-1/2" style="background-image: url('https://imgs.search.brave.com/zRfW5NGip8sCsMkk8Iyc7ny9XGVDmKFn1M2rIh7fcjw/rs:fit:1200:980:1/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvcHJl/dmlld3MvMDAwLzQx/Ny84NDQvb3JpZ2lu/YWwvaGVhbHRoY2Fy/ZS1jbGluaWMtdmVj/dG9yLWZsYXQtaWxs/dXN0cmF0aW9uLmpw/Zw');"></div>

    <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">

        <div class="flex justify-center mx-auto">
            <img class="w-auto h-7 sm:h-8" src="@/images/medicare-2.png" alt="">
        </div>

        <p class="mt-3 text-xl text-center text-gray-600 dark:text-gray-200">
            Welcome back!
        </p>


        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

            <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
        </div>

        <div class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="LoggingEmailAddress">UserName</label>
            <input id="LoggingEmailAddress" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" type="email" />
        </div>

        <div class="mt-4">
            <div class="flex justify-between">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="loggingPassword">Password</label>
            </div>

            <input id="loggingPassword" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" type="password" />
        </div>

        <div class="mt-6">
            <button class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                Sign In
            </button>
        </div>

        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

            <a href="/signup" class="text-sm font-medium text-center text-gray-500 dark:text-gray-200"> Sign Up</a>
            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
        </div>
    </div>
</div>
</div>
</template>

<script >
export default {
    methods: {
    goBack() {
      this.$router.go(-1); // Navigate to the previous page
    }
  }
}
</script>

<style>

</style>