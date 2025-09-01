import { defineStore } from 'pinia'
import HttpClient from '@/helpers/http-client'

export interface AuthUser {
  id: number
  name: string
  email: string
  role?: string
}

export const useAuthStore = defineStore('auth', {
  state: () => ({
    token: localStorage.getItem('token') || '',
    user: null as AuthUser | null,
    inited: false,
  }),
  getters: {
    isAuthed: (s) => !!s.token,
    hasAnyRole: (s) => (roles: string[]) => roles.includes(s.user?.role ?? 'guest'),
  },
  actions: {
    // ⬅️ this is the one your Sign In page is calling
    saveSession({ token, user }: { token: string; user?: AuthUser }) {
      this.token = token
      if (user) this.user = user
      localStorage.setItem('token', token)
      HttpClient.defaults.headers.common.Authorization = `Bearer ${token}`
    },
    clear() {
      this.token = ''
      this.user = null
      localStorage.removeItem('token')
      delete HttpClient.defaults.headers.common.Authorization
    },
    async fetchUser() {
      const { data } = await HttpClient.get('/user')
      this.user = data
    },
    async bootstrap() {
      if (this.inited) return
      const t = localStorage.getItem('token')
      if (t) {
        this.token = t
        HttpClient.defaults.headers.common.Authorization = `Bearer ${t}`
        try { await this.fetchUser() } catch {}
      }
      this.inited = true
    },
  },
})
