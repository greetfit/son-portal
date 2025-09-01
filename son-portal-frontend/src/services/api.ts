import axios from 'axios'

// In dev: baseURL '/api' → hits Vite proxy → Laravel at 127.0.0.1:8000/api
// In prod: set VITE_API_URL (e.g., https://api.yourdomain.com)
const base =
  import.meta.env.DEV
    ? '/api'
    : `${import.meta.env.VITE_API_URL}/api`

export const api = axios.create({
  baseURL: base,
  // for Sanctum cookie auth later, also set:
  // withCredentials: true,
});
