<template>
<b-card no-body>
          <b-card-header>
            <b-card-title>Own Property</b-card-title>
          </b-card-header>
          <b-card-body>
            <ApexChart :chart="ownPropertyChart" id="own-property" class="apex-charts" />

            <div class="d-flex justify-content-between align-content-center">
              <div class="d-flex align-items-center gap-3">
                <div class="avatar flex-shrink-0">
                  <span class="avatar-title bg-danger-subtle text-danger fw-bold rounded">
                    <i class="ri-arrow-up-line fs-20"></i>
                  </span>
                </div>
                <div>
                  <h4 class="text-dark fw-semibold mb-1">{{ currency }}928,128</h4>
                  <p class="mb-0 text-muted">Total Invest On Property</p>
                </div>
              </div>
              <div class="d-flex align-items-center gap-3">
                <div class="avatar flex-shrink-0">
                  <span class="avatar-title bg-success-subtle text-success fw-bold rounded">
                    <i class="ri-arrow-down-line fs-20"></i>
                  </span>
                </div>
                <div>
                  <h4 class="text-dark fw-semibold mb-1">{{ currency }}613,321.12</h4>
                  <p class="mb-0 text-muted">Income</p>
                </div>
              </div>
            </div>
          </b-card-body>
        </b-card>
</template>
<script setup lang="ts">
import { currency } from "@/helpers/constants";
import { ownPropertyChart } from "@/views/customers/[id]/components/data";
</script>