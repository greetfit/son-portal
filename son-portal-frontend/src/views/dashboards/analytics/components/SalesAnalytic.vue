<template>
  <b-col xl="8">
    <b-card no-body class="overflow-hidden">
      <b-card-header class="d-flex justify-content-between align-items-center pb-1">
        <div>
          <b-card-title>Sales Analytic</b-card-title>
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
        <div class="text-end">
          <p class="mb-0 fs-18 fw-medium text-dark"><i class="ri-wallet-3-fill"></i> Earnings : <span
              class="text-primary fw-bold">{{currency}}85,934</span></p>
        </div>
        <b-row class="align-items-top text-center">
          <b-col lg="12">
            <ApexChart :chart="salesAnalyticChart" id="sales_analytic" class="apex-charts mt-2" />
          </b-col>

        </b-row>
      </b-card-body>
      <b-card-footer class="p-2 bg-light-subtle text-center">
        <b-row class="g-3">
          <b-col md="4" class="border-end">
            <p class="text-muted mb-1">Income</p>
            <p class="text-dark fs-18 fw-medium d-flex align-items-center justify-content-center gap-2 mb-0">
              23,675.00 <span class="badge text-success bg-success-subtle fs-12"><i
                  class="ri-arrow-up-line"></i>0.08%</span></p>
          </b-col>
          <b-col md="4" class="border-end">
            <p class="text-muted mb-1">Expenses</p>
            <p class="text-dark fs-18 fw-medium d-flex align-items-center justify-content-center gap-2 mb-0">
              11,562.00 <span class="badge text-danger bg-danger-subtle fs-12"><i
                  class="ri-arrow-down-line"></i>5.38%</span></p>
          </b-col>
          <b-col md="4">
            <p class="text-muted mb-1">Balance</p>
            <p class="text-dark fs-18 fw-medium d-flex align-items-center justify-content-center gap-2 mb-0">
              67,365.00 <span class="badge text-success bg-success-subtle fs-12"><i
                  class="ri-arrow-up-line"></i>2.89%</span></p>
          </b-col>
        </b-row>
      </b-card-footer>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { salesAnalyticChart } from '@/views/dashboards/analytics/components/data';
import { currency } from "@/helpers/constants";
</script>