<template>
<b-col xl="4" lg="6">
        <b-card no-body>
          <b-card-header class="d-flex justify-content-between align-items-center pb-1">
            <b-card-title>Customer Visit by Device</b-card-title>
            <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
          <template v-slot:button-content>
            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded">
              Today
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
                <h3 class="d-flex align-items-center text-dark gap-2 mb-0">67,893<span
                    class="badge text-danger bg-danger-subtle px-2 py-1 fs-12"><i
                      class="ri-arrow-down-line"></i>0.66%</span></h3>
                <small>(Total Devices)</small>
              </div>
              <div class="avatar-md bg-light bg-opacity-50 rounded">
                <div class="avatar-title">
                <Icon icon="solar:devices-broken" class="fs-32 text-primary" />
                </div>
              </div>
            </div>
            <div class="mx-n3">
              <ApexChart :chart="customerVisitChart" id="customer_devices" class="apex-charts my-3" />
            </div>
            <b-row class="mt-4 mb-1">
              <b-col lg="6">
                <div class="border rounded p-2">
                  <p class="mb-1 text-muted"><i class="ri-smartphone-line text-dark"></i> Mobile</p>
                  <p class="fs-18 text-dark fw-medium">2.435 <span class="text-muted fs-14">60%</span></p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <p class="text-dark mb-0">Android</p>
                      <p class="mb-0">2,545</p>
                    </div>
                    <div class="text-end">
                      <p class="text-dark mb-0">IOS</p>
                      <p class="mb-0">487</p>
                    </div>
                  </div>
                  <b-progress class="progress-lg rounded-0 gap-1 overflow-visible mt-3 bg-light-subtle" style="height: 10px;">
                    <b-progress-bar variant="success" class="rounded-pill" :value="70" />
                    <b-progress-bar variant="dark" class="rounded-pill" :value="30" />
                  </b-progress>
                </div>
              </b-col>
              <b-col lg="6">
                <div class="border rounded p-2 text-end">
                  <p class="mb-1 text-muted"><i class="ri-computer-line text-dark"></i> Desktop</p>
                  <p class="fs-18 text-dark fw-medium">578 <span class="text-muted fs-14">20%</span></p>
                  <div class="d-flex justify-content-between">
                    <div class="text-start">
                      <p class="text-dark mb-0">Windows</p>
                      <p class="mb-0">523</p>
                    </div>
                    <div>
                      <p class="text-dark mb-0">Mac</p>
                      <p class="mb-0">876</p>
                    </div>
                  </div>
                  <b-progress class="progress-lg rounded-0 gap-1 overflow-visible mt-3 bg-light-subtle" style="height: 10px;">
                    <b-progress-bar variant="dark" class="rounded-pill" :value="30" />
                    <b-progress-bar variant="warning" class="rounded-pill" :value="70" />
                  </b-progress>
                </div>
              </b-col>
            </b-row>
          </b-card-body>
          <b-card-footer class="border-top">
            <b-row class="g-2">
              <b-col lg="7">
                <a href="#!" class="btn btn-primary w-100">View All</a>
              </b-col>
              <b-col lg="5">
                <a href="#!" class="btn btn-light w-100">Edit Data</a>
              </b-col>
            </b-row>
          </b-card-footer>
        </b-card>
      </b-col>
</template>
<script setup lang="ts">
import { customerVisitChart } from "@/views/dashboards/customer/components/data";
import { Icon } from "@iconify/vue";
</script>