<template>
  <b-card no-body>
    <b-card-header class="d-flex align-items-center justify-content-between pb-0">
      <b-card-title>Goals</b-card-title>
      <div>
        <a href="#!" class="link-dark fs-20"><i class="ri-settings-4-line"></i></a>
      </div>
    </b-card-header>
    <b-card-body class="pt-0">
      <ApexChart :chart="goalsChart" id="agent_goals" class="apex-charts mb-4" />
      <h5>Income Statistic</h5>
      <b-row class="align-items-center justify-content-center mt-3 ">
        <b-col lg="6" cols="6">
          <div class="d-flex align-items-center gap-2">
            <div class="avatar bg-light bg-opacity-50 rounded">
            <div class="avatar-title">
              <Icon icon="solar:wallet-money-broken" class="fs-28 text-primary" />
              </div>
            </div>
            <div>
              <p class="mb-0 fs-16 text-dark fw-semibold">{{currency}}12,167</p>
              <small>From June</small>
            </div>
          </div>
        </b-col>
        <b-col lg="6" cols="6">
          <div class="d-flex align-items-center justify-content-end gap-2">
            <div class="avatar bg-light bg-opacity-50 rounded">
            <div class="avatar-title">
              <Icon icon="solar:wallet-money-broken" class="fs-28 text-primary" />
              </div>
            </div>
            <div>
              <p class="mb-0 fs-16 text-dark fw-semibold">{{currency}}14,900</p>
              <small>From July</small>
            </div>
          </div>
        </b-col>
      </b-row>
    </b-card-body>
  </b-card>
</template>
<script setup lang="ts">
import { goalsChart } from "@/views/dashboards/agent/components/data";
import { currency } from "@/helpers/constants";
import { Icon } from "@iconify/vue";
</script>