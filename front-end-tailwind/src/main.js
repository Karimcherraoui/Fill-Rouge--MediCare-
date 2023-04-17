import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import VueClickAway from "vue3-click-away";

import router from './router'


import './assets/main.css'

const app = createApp(App)
app.use(VueClickAway)
app.use(createPinia())
app.use(router)

app.mount('#app')
