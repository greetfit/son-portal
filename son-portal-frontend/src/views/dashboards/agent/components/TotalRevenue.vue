<template>
  <b-col lg="6">
    <b-card no-body>
      <b-card-header class="d-flex justify-content-between align-items-center border-0">
        <b-card-title>Total Revenue</b-card-title>
        <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
          <template v-slot:button-content>
            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded">
              This Month
            </a>
          </template>
          <b-dropdown-item>Today</b-dropdown-item>
          <b-dropdown-item>Month</b-dropdown-item>
          <b-dropdown-item>Years</b-dropdown-item>
        </b-dropdown>
      </b-card-header>
      <b-card-body>
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h3 class="d-flex align-items-center gap-2 text-dark fw-semibold">{{ currency }}15,563.786 <span
                class="badge text-success bg-success-subtle px-2 py-1 fs-12"><i
                  class='ri-arrow-up-line'></i>4.53%</span></h3>
            <p class="mb-0 text-muted">Gained <span class="text-success">{{ currency }}978.56</span> This Month !</p>
          </div>
          <div class="avatar-md bg-light bg-opacity-50 rounded">
            <div class="avatar-title">
            <Icon icon="solar:bag-2-broken" class="fs-32 text-primary" />
            </div>
          </div>
        </div>
        <div class="p-3 rounded bg-light-subtle border border-light mt-4">
          <h5>Revenue Sources</h5>
          <b-row class="my-3 g-lg-0 g-2">
            <b-col lg="3" cols="4">
              <p class="mb-1 text-muted"><i class='ri-circle-fill fs-6 text-primary'></i> Rent</p>
              <p class="fs-16 text-dark fw-medium mb-1">{{ currency }}12,223.78</p>
            </b-col>
            <b-col lg="3" cols="4">
              <p class="mb-1 text-muted"><i class='ri-circle-fill fs-6 text-warning'></i> Sales</p>
              <p class="fs-16 text-dark fw-medium mb-1">{{ currency }}56,131</p>
            </b-col>
            <b-col lg="3" cols="4">
              <p class="mb-1 text-muted"><i class='ri-circle-fill fs-6 text-success'></i> Broker Deal</p>
              <p class="fs-16 text-dark fw-medium mb-1">{{ currency }}1,340.15</p>
            </b-col>
            <b-col lg="3" cols="4">
              <p class="mb-1 text-muted"><i class='ri-circle-fill fs-6 text-info'></i> Market</p>
              <p class="fs-16 text-dark fw-medium mb-1">{{ currency }}600.46</p>
            </b-col>
          </b-row>

          <b-progress class="progress-lg rounded-0 gap-1 overflow-visible bg-light-subtle" style="height: 10px;">
            <b-progress-bar variant="primary" class="rounded-pill" :value="40" />
            <b-progress-bar variant="warning" class="rounded-pill" :value="30" />
            <b-progress-bar variant="success" class="rounded-pill" :value="20" />
            <b-progress-bar variant="info" class="rounded-pill" :value="20" />
          </b-progress>
        </div>
      </b-card-body>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { currency } from "@/helpers/constants";
import { Icon } from "@iconify/vue";
</script>