<template>
  <b-col xl="3" lg="6">
    <b-card no-body>
      <b-card-header class="d-flex align-items-center border-bottom border-dashed">
        <b-card-title class="mb-0">Development Task</b-card-title>
        <div class="ms-auto">
          <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
            <template v-slot:button-content>
              <a href="#" class="dropdown-toggle drop-arrow-none card-drop p-0">
                <i class="ti ti-dots-vertical"></i>
              </a>
            </template>
            <b-dropdown-item>Download</b-dropdown-item>
            <b-dropdown-item>Share</b-dropdown-item>
          </b-dropdown>
        </div>
      </b-card-header>
      <b-card-body>
        <b-row>
          <b-col lg="5">
            <h5 class="text-dark fw-medium mb-1">250</h5>
            <p class="text-muted mb-0">Total properties </p>
          </b-col>
          <b-col lg="4" cols="3" class="text-center">
            <h5 class="text-dark fw-medium mb-1">30</h5>
            <p class="text-muted mb-0">Pending</p>
          </b-col>
          <b-col xl="3" cols="3" class="text-end">
            <h5 class="text-dark fw-medium mb-1">04</h5>
            <p class="text-muted mb-0">Day Left</p>
          </b-col>
        </b-row>
        <b-progress class="progress-lg bg-light-subtle rounded-0 gap-1 overflow-visible mt-2" style="height: 10px;">
          <b-progress-bar variant="primary" class="rounded-pill" :value="40" />
          <b-progress-bar variant="warning" class="rounded-pill" :value="30" />
          <b-progress-bar variant="info" class="rounded-pill" :value="30" />
        </b-progress>
        <p class="mb-0 mt-3"><span class="text-success fw-medium mb-0"><i class="ri-arrow-up-line"></i>34.4%</span>
          vs last month</p>
      </b-card-body>
      <b-card-footer class="d-flex justify-content-between  py-2">
        <p class="text-muted mb-0 d-flex align-items-center gap-1">Last Updated <span>:</span> <span
            class="text-dark">12 hour
            ago</span></p>
        <a href="#!" class="link-primary fw-medium">View More</a>
      </b-card-footer>
    </b-card>
  </b-col>
  <b-col xl="3" lg="6">
    <b-card no-body class="bg-primary bg-gradient">
      <b-card-body>
        <div class="d-flex align-items-center justify-content-between mb-3">
          <div>
            <b-card-title class="mb-2 text-white">Total Seal Properties </b-card-title>
            <p class="text-white fw-medium fs-24 mb-0">450</p>
          </div>
          <div>
            <div class="avatar-md bg-light rounded">
              <div class="avatar-title">
                <Icon icon="solar:home-bold-duotone" class="fs-32 text-primary" />
              </div>
            </div>
          </div>
        </div>
        <ApexChart :chart="sealPropertiesChart" id="seal_properties" class="apex-charts" />
      </b-card-body>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
import { sealPropertiesChart } from "@/views/agents/grid/components/data";
</script>