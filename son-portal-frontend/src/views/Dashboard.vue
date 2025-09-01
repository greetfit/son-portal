<script setup lang="ts">
import { onMounted } from 'vue'
import { api } from '@/services/api'

onMounted(async () => {
  try {
    const { data } = await api.get('/ping')
    console.log('API /ping:', data) // { ok: true, time: ... }
  } catch (e) {
    console.error('Ping failed:', e)
  }
})
</script>

<template>
  <div>Dashboard</div>
</template>