// Vendor JS/CSS
import 'simplebar'
import 'simplebar/dist/simplebar.min.css'

import 'swiper/css'
import 'swiper/css/scrollbar'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import 'swiper/css/effect-fade'
import 'swiper/css/effect-flip'
import 'swiper/css/effect-creative'

import 'dropzone/dist/dropzone.css'                       // fixed (was src/)
import 'flatpickr/dist/flatpickr.css'
import 'apexcharts/dist/apexcharts.css'
import 'nouislider/dist/nouislider.css'
import 'gridjs/dist/theme/mermaid.min.css'
import 'choices.js/public/assets/styles/choices.min.css'  // fixed (was src/)

import '@vueup/vue-quill/dist/vue-quill.snow.css'
import '@vueup/vue-quill/dist/vue-quill.bubble.css'

// Bootstrap + theme styles (Bootstrap first)
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap-vue-next/dist/bootstrap-vue-next.css'
import '@/assets/scss/app.scss'
import '@/assets/scss/icons.scss'

// import pinia from '@/plugins/pinia'


// Core
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './App.vue'
import router from './router'
import { createBootstrap } from 'bootstrap-vue-next'
import VueApexCharts from 'vue3-apexcharts'

// Auth (Pinia store) + Axios instance
import { useAuthStore } from '@/stores/auth'
import { api } from '@/services/api'

const app = createApp(App)

// 1) Create & install Pinia BEFORE using any stores
const pinia = createPinia()
app.use(pinia)

// 2) It’s safe to use stores now (outside components, pass pinia)
const auth = useAuthStore(pinia)
if (auth.token) {
  api.defaults.headers.common.Authorization = `Bearer ${auth.token}`
}

// 3) Other plugins
app.use(router)
app.use(createBootstrap())
app.use(VueApexCharts)

// 4) Mount
app.mount('#app')
