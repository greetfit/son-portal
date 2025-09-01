<template>
  <b-card no-body>
    <b-card-body>
      <div class="d-flex align-items-center gap-2 border-bottom pb-3">
        <img :src="avatar2" alt="" class="avatar-lg rounded-3 border border-light border-3">
        <div class="d-block">
          <a href="#!" class="text-dark fw-medium fs-16">Michael A. Miner</a>
          <p class="mb-0">michaelminer@dayrep.com</p>
          <p class="mb-0 text-primary"># 1</p>
        </div>
      </div>
      <p class="mt-3 d-flex align-items-center gap-2 mb-2">
        <Icon icon="solar:home-bold-duotone" class="fs-18 text-primary" />243 Properties
      </p>
      <p class="d-flex align-items-center gap-2 mt-2">
        <Icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary" />Lincoln Drive Harrisburg, PA
        17101 U.S.A
      </p>
      <h5 class="my-3">Social Media :</h5>
      <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
        <li class="list-inline-item" v-for="(item, idx) in socialMediaLink" :key="idx">
          <a href="javascript: void(0);"
            :class="`btn btn-soft-${item.variant} avatar-sm d-flex align-items-center justify-content-center fs-20`">
            <i :class="item.icon"></i>
          </a>
        </li>
      </ul>
    </b-card-body>
    <b-card-footer class="bg-light-subtle">
      <b-row class="g-2">
        <b-col lg="6">
          <a href="#!" class="btn btn-outline-primary w-100">Add Agent</a>
        </b-col>
        <b-col lg="6">
          <a href="#!" class="btn btn-danger w-100">Cancel</a>
        </b-col>
      </b-row>
    </b-card-footer>

  </b-card>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
import { socialMediaLink } from "@/helpers/social-link";
import avatar2 from "@/assets/images/users/avatar-2.jpg";
</script>