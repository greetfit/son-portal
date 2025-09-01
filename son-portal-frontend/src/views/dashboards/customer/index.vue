<template>
  <VerticalLayout>
    <PageTitle title="Customers" subtitle="Dashboards" />
    <b-row>
      <b-col xl="8" lg="12">
        <b-row>
          <b-col md="6" xl="6" v-for="(item, idx) in statistics" :key="idx">
            <StatisticsCard :item="item" />
          </b-col>
        </b-row>
        <b-row>
          <b-col lg="6"> </b-col>
        </b-row>
      </b-col>
      <PropertyInvestor />
    </b-row>
    <b-row>
      <CustomersInvest />
      <CustomerCountry />
    </b-row>
    <b-row>
      <TopCustomer />
      <CustomerVisit />
      <RecentPurchase />
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import StatisticsCard from "@/views/dashboards/customer/components/StatisticsCard.vue";
import PropertyInvestor from "@/views/dashboards/customer/components/PropertyInvestor.vue";
import CustomersInvest from "@/views/dashboards/customer/components/CustomersInvest.vue";
import CustomerCountry from "@/views/dashboards/customer/components/CustomerCountry.vue";
import TopCustomer from "@/views/dashboards/customer/components/TopCustomer.vue";
import CustomerVisit from "@/views/dashboards/customer/components/CustomerVisit.vue";
import RecentPurchase from "@/views/dashboards/customer/components/RecentPurchase.vue";
import { statistics } from "@/views/dashboards/customer/components/data";
</script>