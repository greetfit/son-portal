<template>
  <RouterView/>
</template>

<script setup lang="ts">
import { RouterView } from 'vue-router'
import { useLayoutStore } from '@/stores/layout'
import { onMounted } from 'vue'

onMounted(() => {
  useLayoutStore().init()
})

// ❌ remove the fake backend import & call
// import configureFakeBackend from '@/helpers/fake-backend'
// configureFakeBackend()
</script>
