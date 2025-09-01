<template>
  <b-col lg="12">
    <b-card no-body>
      <b-card-header class="d-flex align-items-center justify-content-between bg-light-subtle flex-wrap">
        <b-card-title>Agent</b-card-title>
        <div class="w-25">
          <form class="app-search d-none d-md-block">
            <div class="position-relative">
              <b-form-input type="search" placeholder="Search" autocomplete="off" value="" />
              <Icon icon="solar:magnifer-broken" class="search-widget-icon" />
            </div>
          </form>
        </div>
      </b-card-header>
      <b-card-body>
        <b-row>
          <b-col lg="12">
            <div class="position-relative">
              <img :src="properties12" alt=""
                class="img-fluid rounded border border-light border-4">
            </div>
          </b-col>
        </b-row>
      </b-card-body>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
import properties12 from "@/assets/images/properties/p-12.jpg"
</script>