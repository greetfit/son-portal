<template>
  <b-row>
    <b-col lg="12">
      <b-card no-body>
        <b-card-header class="d-flex justify-content-between align-items-center border-0">
          <div>
            <b-card-title class="mb-1">Recent Agent Status</b-card-title>
            <p class="text-muted mb-0">More than {{currency}}50K</p>
          </div>
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
          <b-row class="align-items-center g-2">
            <b-col lg="12">
              <b-row class="g-2 text-center">
                <b-col lg="4">
                  <div class="border bg-light-subtle p-2 rounded">
                    <p class="text-muted mb-1">Today</p>
                    <h5 class="text-dark mb-1">{{currency}}8,839</h5>
                  </div>
                </b-col>
                <b-col lg="4">
                  <div class="border bg-light-subtle p-2 rounded">
                    <p class="text-muted mb-1">This Month</p>
                    <h5 class="text-dark mb-1">{{currency}}52,356 <span class="text-success font-size-13">0.2 % <i
                          class="mdi mdi-arrow-up ms-1"></i></span></h5>
                  </div>
                </b-col>
                <b-col lg="4">
                  <div class="border bg-light-subtle p-2 rounded">
                    <p class="text-muted mb-1">This Year</p>
                    <h5 class="text-dark mb-1">{{currency}}78M <span class="text-success font-size-13">0.1 % <i
                          class="mdi mdi-arrow-up ms-1"></i></span></h5>
                  </div>
                </b-col>
              </b-row>
              <ApexChart :chart="recentAgentStatusChart" id="markers" class="apex-charts mt-5" />
            </b-col>
          </b-row>
        </b-card-body>
      </b-card>
    </b-col>
  </b-row>
</template>
<script setup lang="ts">
import { recentAgentStatusChart } from "@/views/dashboards/agent/components/data";
import { currency } from "@/helpers/constants";
</script>