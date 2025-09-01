<template>
  <b-col lg="6">
    <b-card no-body>
      <b-card-header>
        <b-card-title>Recent Customers Invest</b-card-title>
      </b-card-header>
      <b-card-body>
        <div
          class="d-flex flex-wrap gap-2 align-items-center bg-light-subtle border justify-content-between p-3 rounded mb-3">
          <div>
            <h5 class="fw-medium mb-1 text-dark fs-16">Customer Buy Property</h5>
            <div class="avatar-group mt-3">
              <div class="avatar d-flex align-items-center justify-content-center" v-for="(img, idx) in recentCustomers"
                :key="idx">
                <img :src="img" alt="" class="rounded-circle avatar border border-light border-3">
              </div>
            </div>
          </div>
          <div class="text-end">
            <h5 class="fw-medium mb-3 text-dark fs-16">Revenue</h5>
            <h3 class="text-dark fw-bold d-flex align-items-center gap-2 mb-0"> <span
                class="text-success mb-0 fs-16 fw-semibold"><i class="ri-arrow-drop-up-fill"></i>+22.0</span>
              {{ currency }}67435.00</h3>
          </div>
        </div>
        <ApexChart :chart="recentCustomersInvestChart" id="datalabels-column2" class="apex-charts" />
      </b-card-body>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { recentCustomersInvestChart } from "@/views/dashboards/customer/components/data";
import { currency } from "@/helpers/constants";

import avatar6 from "@/assets/images/users/avatar-6.jpg";
import avatar7 from "@/assets/images/users/avatar-7.jpg";
import avatar8 from "@/assets/images/users/avatar-8.jpg";
import avatar9 from "@/assets/images/users/avatar-9.jpg";
import avatar10 from "@/assets/images/users/avatar-10.jpg";

const recentCustomers = [avatar6, avatar7, avatar8, avatar9, avatar10];
</script>