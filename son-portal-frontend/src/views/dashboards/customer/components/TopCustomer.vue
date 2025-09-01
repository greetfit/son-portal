<template>
  <b-col xl="4" lg="6">
    <b-card no-body>
      <b-card-header class="d-flex justify-content-between align-items-center border-0">
        <div>
          <b-card-title class="mb-1">Top Customer</b-card-title>
          <p class="mb-0 fs-13">390 Customer</p>
        </div>
        <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
          <template v-slot:button-content>
            <i class="ri-edit-box-line fs-20 text-dark"></i>
          </template>

          <b-dropdown-item>New Agent</b-dropdown-item>
          <b-dropdown-item>Old Agent</b-dropdown-item>
        </b-dropdown>
      </b-card-header>
      <b-card-body>
        <template v-for="(item, idx) in topCustomer" :key="idx">
          <div class="d-flex align-items-center justify-content-between"
            :class="!idx ? 'border-bottom pb-3' : idx === topCustomer.length - 1 ? 'pt-3' : 'border-bottom py-3'">
            <div class="d-flex align-items-center gap-2">
              <div class="avatar">
                <img :src="item.img" alt="avatar-3" class="img-fluid rounded-circle">
              </div>
              <div class="d-block">
                <span class="text-dark">
                  <a href="#!" class="text-dark fw-medium fs-15">{{ item.name }}</a>
                </span>
                <p class="mb-0 fs-14 text-muted">{{ item.email }}</p>
              </div>
            </div>
            <div>
              <p class="text-muted fw-medium mb-0">{{ currency }}{{ item.amount }}</p>
            </div>
          </div>
        </template>
      </b-card-body>
      <b-card-footer class="border-top">
        <a href="#!" class="btn btn-primary w-100">View All</a>
      </b-card-footer>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { currency } from "@/helpers/constants";
import { topCustomer } from "@/views/dashboards/customer/components/data";
</script>