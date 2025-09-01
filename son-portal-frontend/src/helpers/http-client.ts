// src/helpers/http-client.ts
import axios from 'axios'
import router from '@/router'
import pinia from '@/plugins/pinia'
import { useAuthStore } from '@/stores/auth'

const baseURL = import.meta.env.DEV
  ? '/api'                                // dev -> Vite proxy to 127.0.0.1:8000
  : `${import.meta.env.VITE_API_URL}/api` // prod -> your API domain

const http = axios.create({
  baseURL: import.meta.env.DEV ? '/api' : `${import.meta.env.VITE_API_URL}/api`,
})
const token = localStorage.getItem('token')
if (token) http.defaults.headers.common.Authorization = `Bearer ${token}`


// optional: auto-handle 401/403
http.interceptors.response.use(
  r => r,
  (error) => {
    const status = error?.response?.status
    if (status === 401) {
      const auth = useAuthStore(pinia)
      auth.clear()
      router.push({ name: 'login', query: { session: 'expired' } })
    } else if (status === 403) {
      router.push({ name: 'forbidden' })
    }
    return Promise.reject(error)
  }
)

export default http
