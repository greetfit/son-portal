<template>
  <b-col lg="5">
    <b-card no-body>
      <b-card-header class="d-flex justify-content-between align-items-center border-0">
        <b-card-title>Collection of Rent</b-card-title>
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
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="text-muted fs-14 mb-2">Total</p>
            <h3 class="text-dark fw-bold mb-1">{{ currency }}500.50K</h3>
          </div>
          <div class="avatar-md bg-light bg-opacity-50 rounded">
            <div class="avatar-title">
              <Icon icon="solar:hand-money-broken" class="fs-32 text-primary" />
            </div>
          </div>
        </div>
        <b-progress class="mt-3" style="height: 15px;">
          <b-progress-bar variant="success" striped animated :value="50" />
        </b-progress>
        <div class="d-flex align-items-center justify-content-between mt-3">
          <div>
            <p class="mb-2 text-success fs-15 fw-medium">Collected</p>
            <h4 class="text-dark fw-bold mb-0">{{ currency }}250.50K</h4>
          </div>
          <div class="text-end">
            <p class="mb-2 fs-15 fw-medium">Pending</p>
            <h4 class="text-dark fw-bold mb-0">{{ currency }}250.00K</h4>
          </div>
        </div>
        <div class="d-flex align-items-center bg-light-subtle border justify-content-between p-3 rounded mt-4">
          <div>
            <h5 class="fw-medium mb-1 text-dark fs-16">Tenants with invoice due</h5>
            <div class="avatar-group mt-3">
              <div class="avatar d-flex align-items-center justify-content-center" v-for="(img, idx) in tenants"
                :key="idx">
                <img :src="img" alt="" class="rounded-circle avatar border border-light border-3">
              </div>
            </div>
          </div>
          <div>
            <a href="#!" class="btn btn-primary">Send Reminder</a>
          </div>
        </div>
      </b-card-body>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { currency } from "@/helpers/constants";
import { Icon } from "@iconify/vue";

import avatar4 from "@/assets/images/users/avatar-4.jpg";
import avatar5 from "@/assets/images/users/avatar-5.jpg";
import avatar3 from "@/assets/images/users/avatar-3.jpg";
import avatar6 from "@/assets/images/users/avatar-6.jpg";
import avatar7 from "@/assets/images/users/avatar-7.jpg";

const tenants = [avatar4, avatar5, avatar3, avatar6, avatar7];
</script>