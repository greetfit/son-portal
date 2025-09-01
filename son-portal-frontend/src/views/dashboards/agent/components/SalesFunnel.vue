<template>
  <b-col lg="6">
    <b-card no-body>
      <b-card-header class="d-flex justify-content-between align-items-center border-0">
        <b-card-title>Sales Funnel</b-card-title>
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
        <div class="mx-n3">
          <ApexChart :chart="salesFunnelChart" id="sales_funnel" class="apex-charts mb-3" />
        </div>
      </b-card-body>
      <b-card-footer class="p-0 border-top">
        <div class="bg-light-subtle p-1 rounded">
          <b-row class="text-center">
            <b-col lg="3" cols="3" class="border-end">
              <p class="mb-1 text-muted"> Visitors</p>
              <p class="fs-16 text-dark fw-medium mb-1">123.7k</p>
            </b-col>
            <b-col lg="3" cols="3" class="border-end">
              <p class="mb-1 text-muted">Views</p>
              <p class="fs-16 text-dark fw-medium mb-1">167.1k</p>
            </b-col>
            <b-col lg="3" cols="3" class="border-end">
              <p class="mb-1 text-muted">Leads</p>
              <p class="fs-16 text-dark fw-medium mb-1">89.7k</p>
            </b-col>
            <b-col lg="3" cols="3">
              <p class="mb-1 text-muted">Market</p>
              <p class="fs-16 text-dark fw-medium mb-1">34.8k</p>
            </b-col>
          </b-row>
        </div>
      </b-card-footer>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { salesFunnelChart } from "@/views/dashboards/agent/components/data";
</script>