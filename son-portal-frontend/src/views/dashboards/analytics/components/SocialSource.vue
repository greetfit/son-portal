<template>
  <b-col xl="3" lg="6">
    <b-card no-body>
      <b-card-header class="d-flex justify-content-between align-items-center pb-1">
        <div>
          <b-card-title class="mb-1">Social Source</b-card-title>
          <p class="fs-13 mb-0">Total Traffic In This Week</p>
        </div>
        <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
          <template v-slot:button-content>
            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded">
              This Month
            </a>
          </template>

          <b-dropdown-item>Week</b-dropdown-item>
          <b-dropdown-item>Months</b-dropdown-item>
          <b-dropdown-item>Years</b-dropdown-item>
        </b-dropdown>
      </b-card-header>
      <b-card-body>
        <ApexChart :chart="socialSourceChart" id="own-property" class="apex-charts" />
        <p class="mb-0 fs-18 fw-medium text-dark"><i class="ri-group-fill"></i> Buyers : <span
            class="text-primary fw-bold">70</span></p>
      </b-card-body>
      <b-card-footer class="border-top d-flex align-items-center justify-content-between">
        <h5 class="mb-0">See More Statistic</h5>
        <div>
          <a href="#!" class="btn btn-primary btn-sm">See Details</a>
        </div>
      </b-card-footer>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { socialSourceChart } from '@/views/dashboards/analytics/components/data';
</script>