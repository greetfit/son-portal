<template>
  <b-card no-body>
    <b-card-header>
      <b-card-title>Interested Properties (3)</b-card-title>
    </b-card-header>
  </b-card>
  <b-row class="mt-3">
    <b-col lg="4" v-for="(item, idx) in properties" :key="idx">
      <b-card no-body class="overflow-hidden">
        <div class="position-relative">
          <img :src="item.property.img" alt="" class="img-fluid rounded-top">
          <span class="position-absolute top-0 start-0 p-1">
            <button type="button"
              class="btn btn-warning avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light">
              <Icon icon="solar:bookmark-broken" />
            </button>
          </span>
        </div>
        <b-card-body>
          <div class="d-flex align-items-center gap-2">
            <div class="avatar bg-light rounded">
              <div class="avatar-title">
                <Icon icon="solar:home-bold-duotone" class="fs-24 text-primary" />
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
      </b-card>
    </b-col>
  </b-row>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
import { properties } from "@/views/customers/[id]/components/data";
</script>