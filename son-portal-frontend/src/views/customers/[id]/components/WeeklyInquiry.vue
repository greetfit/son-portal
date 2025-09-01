<template>
  <b-card no-body>
    <b-card-header class="d-flex align-items-center justify-content-between">
      <b-card-title>Weekly Inquiry</b-card-title>

      <div class="dropdown">
        <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded show" data-bs-toggle="dropdown"
          aria-expanded="true">
          This Month
        </a>
        <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end"
          style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);">
          <!-- item-->
          <a href="#!" class="dropdown-item">Day</a>
          <!-- item-->
          <a href="#!" class="dropdown-item">Month</a>
          <!-- item-->
          <a href="#!" class="dropdown-item">Year</a>
        </div>
      </div>
    </b-card-header>
    <b-card-body>
      <b-row>
        <b-col cols="12">
          <ApexChart :chart="weeklyInquiryChart" id="weekly-inquiry" class="apex-charts" />
        </b-col>
      </b-row>
    </b-card-body>
    <b-card-footer class="d-flex align-items-center justify-content-between border-top">
      <p class="mb-0 fw-medium fs-15">Jan-Dec 2023 </p>
      <p class="mb-0 text-dark fw-semibold fs-15">First Week 37</p>
    </b-card-footer>
  </b-card>
</template>
<script setup lang="ts">
import { weeklyInquiryChart } from "@/views/customers/[id]/components/data";
</script>