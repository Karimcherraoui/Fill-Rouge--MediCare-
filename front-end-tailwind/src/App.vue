<template>
    <div>
      <NavBar v-if="showNavBar" />
      <RouterView />
      <FooterBar v-if="showFooterBar" />
    </div>
  </template>
  
  <script>
  import { ref, computed } from 'vue'
  import { useRoute } from 'vue-router'
  import NavBar from './components/NavBar.vue'
  import FooterBar from './components/FooterBar.vue'
  
  export default {
    components: {
      NavBar,
      FooterBar
    },
    setup() {
      const route = useRoute()
  
      // Compute whether to show the NavBar based on the meta value in the route config
      const showNavBar = computed(() => {
        return route.meta?.showNavBar !== false
      })
  
      // Compute whether to show the FooterBar based on the meta value in the route config
      const showFooterBar = computed(() => {
        return route.meta?.showFooterBar !== false
      })
  
      return {
        showNavBar,
        showFooterBar
      }
    }
  }
  </script>
  