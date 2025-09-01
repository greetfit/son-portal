<template>
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center gap-3">
        <div class="rounded-3 bg-light avatar d-flex align-items-center justify-content-center">
          <img :src="item.icon" alt="" class="avatar-sm rounded">
        </div>
        <div>
          <h4 class="text-dark fw-semibold mb-1">{{ item.title }}</h4>
          <p class="mb-0 fw-medium"><span class="text-dark fw-semibold"> {{currency}} {{ item.statistic }} </span> Per Month</p>
        </div>
      </div>
      <div class="d-flex align-items-end justify-content-between mt-3">
        <p class="mb-0 fw-medium fs-15">Total Customer</p>
        <div class="text-end">
          <p class="mb-1 fw-semibold text-dark">Today</p>
          <h4 class="text-success mb-0 fw-semibold"><i class="ri-arrow-drop-up-fill"></i>+{{ item.growth }}</h4>
        </div>
      </div>
      <b-progress class="my-2 mt-3" style="height: 10px;">
        <b-progress-bar variant="primary" class="bg-opacity-75" striped animated :value="item.progress" />
      </b-progress>
      <div class="d-flex align-items-center justify-content-between">
        <h4 class="text-dark fw-bold mb-0">{{ item.total }}</h4>
        <div>
          <p class="mb-0">Goal : 10,000</p>
        </div>
      </div>

    </div>
  </div>
</template>

<script setup lang="ts">
import type { PropType } from "vue";
import type { StatisticCardType } from "@/types";
import { currency } from "@/helpers/constants";

defineProps({
  item: {
    type: Object as PropType<StatisticCardType>,
    required: true
  }
});
</script>