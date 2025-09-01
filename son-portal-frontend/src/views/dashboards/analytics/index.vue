<template>
  <VerticalLayout>
    <PageTitle title="Analytics" subtitle="Dashboards" />
    <b-row>
      <b-col md="6" xl="3" v-for="(item, idx) in statistics" :key="idx">
        <StatisticsCard :item="item" />
      </b-col>
    </b-row>
    <b-row>
      <SalesAnalytic />
      <Widgets />
    </b-row>
    <b-row>
      <SocialSource />
      <MostSalesLocation />
      <WeeklySales />
    </b-row>
    <LatestTransaction />
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";

import StatisticsCard from "@/views/dashboards/analytics/components/StatisticsCard.vue";
import SalesAnalytic from "@/views/dashboards/analytics/components/SalesAnalytic.vue";
import Widgets from "@/views/dashboards/analytics/components/Widgets.vue";
import SocialSource from "@/views/dashboards/analytics/components/SocialSource.vue";
import MostSalesLocation from "@/views/dashboards/analytics/components/MostSalesLocation.vue";
import WeeklySales from "@/views/dashboards/analytics/components/WeeklySales.vue";
import LatestTransaction from "@/views/dashboards/analytics/components/LatestTransaction.vue";

import { statistics } from '@/views/dashboards/analytics/components/data';
</script>