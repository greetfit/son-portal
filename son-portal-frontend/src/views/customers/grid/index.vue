<template>
  <VerticalLayout>
    <PageTitle title="Customer Grid" subtitle="Customers" />
    <b-row>
      <b-col md="6" xl="4" v-for="(item, idx) in customers" :key="idx">
        <CustomerCard :item="item" />
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import CustomerCard from "@/views/customers/grid/components/CustomerCard.vue";
import { customers } from "@/views/customers/grid/components/data";
</script>