<template>
  <div :class="customClass ?? 'logo-box'">
    <router-link to="/" class="logo-dark">
      <img v-if="logoHeight" :src="logoDark" :height="logoHeight" alt="logo dark">
      <template v-else>
        <img :src="logoSmall" class="logo-sm" alt="logo sm">
        <img :src="logoDark" class="logo-lg" alt="logo dark">
      </template>
    </router-link>

    <router-link to="/" class="logo-light">
      <img v-if="logoHeight" :src="logoLight" :height="logoHeight" alt="logo light">
      <template v-else>
        <img :src="logoSmall" class="logo-sm" alt="logo sm">
        <img :src="logoLight" class="logo-lg" alt="logo light">
      </template>
    </router-link>
  </div>
</template>

<script setup lang="ts">
import logoSmall from "@/assets/images/logo-sm.png";
import logoDark from "@/assets/images/logo-dark.png";
import logoLight from "@/assets/images/logo-light.png";

type PropsType = {
  customClass?: string;
  logoHeight?: number;
};

defineProps<PropsType>();
</script>
