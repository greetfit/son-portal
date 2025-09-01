<template>
  <b-row>
    <b-col cols="12">
      <div class="page-title-box">
        <h4 class="mb-0 fw-semibold">{{ title }}</h4>
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">{{ subtitle }}</a></li>
          <li class="breadcrumb-item active">{{ title }}</li>
        </ol>
      </div>
    </b-col>
  </b-row>
</template>

<script setup lang="ts">
defineProps({
  title: {
    type: String,
    required: true
  },
  subtitle: {
    type: String,
    required: true
  }
})
</script>
