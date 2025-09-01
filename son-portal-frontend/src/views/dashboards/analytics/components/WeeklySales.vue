<template>
  <b-col xl="3" lg="6">
    <b-card no-body>
      <b-card-header>
        <b-card-title>Weekly Sales</b-card-title>
      </b-card-header>
      <b-card-body>
        <b-carousel controls>
        <b-carousel-slide :img-src="properties9" />
        <b-carousel-slide :img-src="properties7" />
        <b-carousel-slide :img-src="properties8" />
        <b-carousel-slide :img-src="properties6" />
        <b-carousel-slide :img-src="properties10" />
      </b-carousel>
        <ApexChart :chart="weeklySalesChart" id="sales_funnel" class="apex-charts mt-4" />
      </b-card-body>
      <b-card-footer class="border-top d-flex align-items-center justify-content-between">
        <p class="text-muted fw-medium fs-15 mb-0"><span class="text-dark me-1">Total Property Seals : </span>5,746
        </p>
        <div>
          <a href="#!" class="btn btn-primary btn-sm">View More</a>
        </div>
      </b-card-footer>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { weeklySalesChart } from '@/views/dashboards/analytics/components/data';
import properties9 from "@/assets/images/properties/p-9.jpg"
import properties7 from "@/assets/images/properties/p-7.jpg"
import properties8 from "@/assets/images/properties/p-8.jpg"
import properties6 from "@/assets/images/properties/p-6.jpg"
import properties10 from "@/assets/images/properties/p-10.jpg"
</script>