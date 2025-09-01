import { defineStore } from 'pinia'
import { api } from '@/services/api'

export const useSystemStore = defineStore('system', {
  state: () => ({ serverTime: '' as string }),
  actions: {
    async ping() {
      const { data } = await api.get('/ping')
      this.serverTime = data.time
    }
  }
})
