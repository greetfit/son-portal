<template>
  <VerticalLayout>
    <PageTitle title="Simple Sidenav" subtitle="Layouts"/>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import PageTitle from "@/components/PageTitle.vue";
import {useLayoutStore} from '@/stores/layout'
import {onMounted} from "vue";

const useLayout = useLayoutStore();

onMounted(() => {
  useLayout.setLeftSideBarColor('dark')
  useLayout.setLeftSideBarSize('default')
})
</script>
