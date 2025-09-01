<template>
  <b-card no-body>
    <b-card-body>
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <b-card-title class="mb-2 ">{{ item.title }}</b-card-title>
          <p class="text-muted fw-medium fs-22 mb-0">{{ item.prefix }}{{ item.statistic }} {{ item.suffix }}</p>
        </div>
        <div>
          <div class="avatar-md bg-primary bg-opacity-10 rounded">
            <div class="avatar-title">
              <Icon :icon="item.icon" class="fs-32 text-primary" />
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-between mt-3">
        <p class="mb-0" v-if="item.growth">
          <span class="fw-medium mb-0" :class="item.growth > 0 ? 'text-success' : 'text-danger'">
            <i :class="item.growth > 0 ? 'ri-arrow-up-line' : 'ri-arrow-down-line'"></i>
            {{ Math.abs(item.growth) }}%
          </span>
          vs last month
        </p>
        <div>
          <a href="#!" class="link-primary fw-medium">See Details <i class='ri-arrow-right-line align-middle'></i></a>
        </div>
      </div>
    </b-card-body>
  </b-card>
</template>

<script setup lang="ts">
import type { PropType } from "vue";
import type { StatisticCardType } from "@/types";
import { Icon } from "@iconify/vue";

defineProps({
  item: {
    type: Object as PropType<StatisticCardType>,
    required: true
  }
});
</script>