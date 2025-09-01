<template>
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <p class="mb-2 fs-15 fw-medium">{{ item.title }}
            <template v-if="item.growth">
              <b-badge :variant="null"
                :class="item.growth > 0 ? 'text-success bg-success-subtle' : 'text-danger bg-danger-subtle'"
                class="fs-11">
                <i :class="item.growth > 0 ? 'ri-arrow-up-line' : 'ri-arrow-down-line'"></i>{{Math.abs(item.growth)}}%
              </b-badge>
            </template>
          </p>
          <h3 class="text-dark fw-bold d-flex align-items-center gap-2 mb-0">
            {{ item.prefix }}{{ item.statistic }}{{ item.suffix }}
          </h3>
        </div>
        <div>
          <div :class="`avatar-md bg-${item.variant} bg-opacity-10 rounded`">
            <div class="avatar-title">
              <Icon :icon="item.icon" :class="`fs-32 text-${item.variant}`" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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