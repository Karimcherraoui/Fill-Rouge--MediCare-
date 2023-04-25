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
      beforeEnter:()=>{
        if (!(localStorage.getItem('userType') === 'is nurse' )) {
        
          // If the user is not authenticated, redirect to the login page
          return router.push('/login')
        }
        // If the user is authenticated, continue to the next middleware
        // return next();
      },
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../components/Nurse/dashboard.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    },
    {
      path: '/dashboard_doctor',
      name: 'dashboard_doctor',
      beforeEnter:()=>{
        if (!(localStorage.getItem('userType') === 'is doctor' )) {
        
          // If the user is not authenticated, redirect to the login page
          return router.push('/login')
        }
        // If the user is authenticated, continue to the next middleware
        // return next();
      },
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../components/Doctor/dashboard_doctor.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false,
      }
    },
    {
      path: '/dashboardAdmin',
      name: 'dashboardAdmin',
      beforeEnter:()=>{
        if (!(localStorage.getItem('userType') === 'is admin' )) {
        
          // If the user is not authenticated, redirect to the login page
          return router.push('/login')
        }
        // If the user is authenticated, continue to the next middleware
        // return next();
      },
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../components/Admin/dashboardAdmin.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    },
    {
      path: '/dashboardPAtient',
      name: 'dashboardPAtient',
      beforeEnter:()=>{
        if (!(localStorage.getItem('userType') === 'is patient' )) {
        
          // If the user is not authenticated, redirect to the login page
          return router.push('/login')
        }
        // If the user is authenticated, continue to the next middleware
        // return next();
      },
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../components/Patient/dashboardPatient.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    },
    {
      path: '/appointment',
      name: 'appointment',
      
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../components/Appointment/Add_appointment.vue'),
      meta: {
        showNavBar: false,
        showFooterBar: false
      }
    },

  ]
})

export default router
