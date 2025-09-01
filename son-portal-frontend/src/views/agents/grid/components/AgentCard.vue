<template>
  <b-card no-body>
    <b-card-body>
      <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
        <img :src="item.agent.img" alt="" class="avatar-lg rounded-3 border border-light border-3">
        <div class="d-block">
          <a href="#!" class="text-dark fw-medium fs-16">{{ item.agent.name }}</a>
          <p class="mb-0">{{ item.email }}</p>
          <p class="mb-0 text-primary"># {{ item.id }}</p>
        </div>
        <div class="ms-auto">
          <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
            <template v-slot:button-content>
              <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16">
                <i class='ri-more-2-fill'></i>
              </a>
            </template>
            <b-dropdown-item>Download</b-dropdown-item>
            <b-dropdown-item>Export</b-dropdown-item>
            <b-dropdown-item>Import</b-dropdown-item>
          </b-dropdown>
        </div>
      </div>
      <p class="mt-3 d-flex align-items-center gap-2 mb-2">
        <Icon icon="solar:home-bold-duotone" class="fs-18 text-primary" />{{ item.property }} Properties
      </p>
      <p class="d-flex align-items-center gap-2 mt-2">
        <Icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary" />{{ item.location }}
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
    <b-card-footer class="border-top">
      <b-row class="g-2">
        <b-col lg="6">
          <a href="#!" class="btn btn-primary w-100">
            <Icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18" /> Call Us
          </a>
        </b-col>
        <b-col lg="6">
          <a href="#!" class="btn btn-light w-100">
            <Icon icon="solar:chat-round-dots-broken" class="align-middle fs-16" /> Message
          </a>
        </b-col>
      </b-row>
    </b-card-footer>
  </b-card>
</template>

<script setup lang="ts">
import type { PropType } from "vue";
import { Icon } from "@iconify/vue";
import type { AgentType } from '@/types';
import { socialMediaLink } from "@/helpers/social-link";

defineProps({
  item: {
    type: Object as PropType<AgentType>,
    required: true
  }
});
</script>