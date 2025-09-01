<template>
  <VerticalLayout>
    <PageTitle title="Agent" subtitle="Dashboards" />
    <b-row>
      <b-col md="6" xl="3" v-for="(item, idx) in statistics" :key="idx">
        <StatisticsCard :item="item" :key="idx" />
      </b-col>
    </b-row>
    <b-row>
      <b-col xl="9">
        <b-row>
          <SalesFunnel />
          <TotalRevenue />
        </b-row>
        <RecentAgentStatus />
        <b-row>
          <RentCollection />
          <SessionsCountry />
        </b-row>
      </b-col>
      <b-col xl="3">
        <TopAgents />
        <Goals />
        <RecentJoinAgent />
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import { statistics } from "@/views/dashboards/agent/components/data";
import StatisticsCard from "@/views/dashboards/agent/components/StatisticsCard.vue";
import SalesFunnel from "@/views/dashboards/agent/components/SalesFunnel.vue";
import TotalRevenue from "@/views/dashboards/agent/components/TotalRevenue.vue";
import RecentAgentStatus from "@/views/dashboards/agent/components/RecentAgentStatus.vue";
import RentCollection from "@/views/dashboards/agent/components/RentCollection.vue";
import SessionsCountry from "@/views/dashboards/agent/components/SessionsCountry.vue";
import TopAgents from "@/views/dashboards/agent/components/TopAgents.vue";
import Goals from "@/views/dashboards/agent/components/Goals.vue";
import RecentJoinAgent from "@/views/dashboards/agent/components/RecentJoinAgent.vue";
import PageTitle from "@/components/PageTitle.vue";
</script>