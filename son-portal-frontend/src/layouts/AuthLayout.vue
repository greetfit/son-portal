<template>
  <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <b-container>
      <b-row class="justify-content-center">
        <slot/>
      </b-row>
    </b-container>
  </div>
</template>

<script setup lang="ts">
import {onMounted, onUnmounted} from "vue";

const body = document.body;

onMounted(() => {
  if (body) {
    body.classList.add('authentication-bg');
  }
});

onUnmounted(() => {
  if (body) {
    body.classList.remove('authentication-bg');
  }
});
</script>
