<template>
  <VerticalLayout>
    <PageTitle title="Small Hover Active" subtitle="Layouts"/>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import PageTitle from "@/components/PageTitle.vue";
import {useLayoutStore} from '@/stores/layout'
import {onMounted, onUnmounted} from "vue";

const useLayout = useLayoutStore();

onMounted(() => {
  useLayout.setLeftSideBarColor('dark')
  useLayout.setLeftSideBarSize('sm-hover-active')
})

onUnmounted(() => {
  useLayout.setLeftSideBarSize('default')
})
</script>
