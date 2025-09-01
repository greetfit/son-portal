<template>
  <b-card no-body class="overflow-hidden">
    <div class="position-relative">
      <img :src="item.property.img" alt="" class="img-fluid rounded-top">
      <span class="position-absolute top-0 start-0 p-1" v-if="!(item.availability === 'sold')">
        <button type="button"
          class="btn btn-warning avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light p-0"
          v-if="item.bookmark">
          <Icon icon="solar:bookmark-broken" />
        </button>
        <button type="button"
          class="btn bg-warning-subtle avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-warning p-0"
          v-else>
          <Icon icon="solar:bookmark-broken" />
        </button>
      </span>
      <span class="position-absolute top-0 end-0 p-1" v-if="item.availability">
        <span class="badge text-white fs-13"
          :class="item.availability === 'for-rent' ? 'bg-success' : item.availability === 'sold' ? 'bg-danger' : 'bg-warning'">
          {{ kebabToTitleCase(item.availability) }}
        </span>
      </span>
    </div>
    <b-card-body>
      <div class="d-flex align-items-center gap-2">
        <div class="avatar bg-light rounded">
          <div class="avatar-title">
            <Icon icon="solar:home-bold-duotone" class="fs-24 text-primary" v-if="item.category === 'villa'"/>
            <Icon icon="solar:buildings-3-bold-duotone" class="fs-24 text-primary" v-else/>
          </div>
        </div>
        <div>
          <a href="#!" class="text-dark fw-medium fs-16">{{ item.property.name }}</a>
          <p class="text-muted mb-0">{{ item.location }}</p>
        </div>
      </div>
      <b-row class="mt-2 g-2">
        <b-col lg="4" cols="4">
          <span class="badge bg-light-subtle text-muted border fs-12">
            <span class="fs-16">
              <Icon icon="solar:bed-broken" class="align-middle" />
            </span>
            {{ item.property.beds }} Beds
          </span>
        </b-col>
        <b-col lg="4" cols="4">
          <span class="badge bg-light-subtle text-muted border fs-12">
            <span class="fs-16">
              <Icon icon="solar:bath-broken" class="align-middle" />
            </span>
            {{ item.property.bath }} Bath
          </span>
        </b-col>
        <b-col lg="4" cols="4">
          <span class="badge bg-light-subtle text-muted border fs-12">
            <span class="fs-16">
              <Icon icon="solar:scale-broken" class="align-middle" />
            </span>
            {{ item.property.size }}ft
          </span>
        </b-col>
        <b-col lg="4" cols="4">
          <span class="badge bg-light-subtle text-muted border fs-12">
            <span class="fs-16">
              <Icon icon="solar:double-alt-arrow-up-broken" class="align-middle" />
            </span>
            {{ item.property.floor }} Floor
          </span>
        </b-col>
      </b-row>

    </b-card-body>
    <b-card-footer class="bg-light-subtle d-flex justify-content-between align-items-center border-top">
      <p class="fw-medium text-dark fs-16 mb-0"
        :class="item.availability === 'sold' ? 'text-muted text-decoration-line-through' : 'text-dark'">{{ currency }}
        {{ item.price }}
      </p>
      <div>
        <a href="#!" class="link-primary fw-medium">More Inquiry <i class='ri-arrow-right-line align-middle'></i></a>
      </div>
    </b-card-footer>
  </b-card>
</template>

<script setup lang="ts">
import type { PropType } from "vue";
import type { PropertyType } from '@/types';
import { currency } from "@/helpers/constants";
import { Icon } from "@iconify/vue";
import { kebabToTitleCase } from "@/helpers/change-casing";

defineProps({
  item: {
    type: Object as PropType<PropertyType>,
    required: true
  }
});
</script>