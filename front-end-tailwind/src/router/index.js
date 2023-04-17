import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    // {
    //   path: '/',
    //   name: 'home',
    //   component: HomeView
    // },
    {
      path: '/',
      name: 'Home',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/Home.vue')
    },
    {
      path: '/login',
      name: 'login',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/Login.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    },
    {
      path: '/signup',
      name: 'signup',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/signUp.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/dashboard.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    },
    {
      path: '/dashboardAdmin',
      name: 'dashboardAdmin',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/dashboardAdmin.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    },
    {
      path: '/dashboardPAtient',
      name: 'dashboardPAtient',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/dashboardPatient.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    },
    {
      path: '/addUser',
      name: 'addUser',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/dashboardAdmin.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    }
  ]
})

export default router
