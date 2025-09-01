<template>
  <b-card no-body>
    <b-card-body>
      <b-row class="align-items-center justify-content-between">
        <b-col cols="6">
          <div class="avatar-md bg-light bg-opacity-50 rounded">
            <div class="avatar-title">
              <Icon :icon="item.icon" class="fs-32 text-primary" />
            </div>
          </div>
          <p class="text-muted mb-2 mt-3">{{ item.title }}</p>
          <h3 class="text-dark fw-bold d-flex align-items-center gap-2 mb-0">
            {{ item.prefix }}{{ item.statistic }}{{ item.suffix }}
            <template v-if="item.growth">
              <b-badge :variant="null"
                :class="item.growth > 0 ? 'text-success bg-success-subtle' : 'text-danger bg-danger-subtle'"
                class="fs-12">
                <i :class="item.growth > 0 ? 'ri-arrow-up-line' : 'ri-arrow-down-line'"></i>{{ Math.abs(item.growth) }}%
              </b-badge>
            </template>
          </h3>
        </b-col>
        <b-col cols="6">
          <ApexChart :chart="statisticChart" id="total_customers" class="apex-charts" />
        </b-col>
      </b-row>
    </b-card-body>
  </b-card>
</template>

<script setup lang="ts">
import type { PropType } from "vue";
import type { StatisticCardType } from "@/types";
import { Icon } from "@iconify/vue";
import { statisticChart } from "@/views/dashboards/analytics/components/data";

defineProps({
  item: {
    type: Object as PropType<StatisticCardType>,
    required: true
  }
});
</script>