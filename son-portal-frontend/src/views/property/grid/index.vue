<template>
  <VerticalLayout>
    <PageTitle title="Listing Grid" subtitle="Real Estate" />
    <b-row>
      <b-col xl="3" lg="12">
        <Filters />
      </b-col>

      <b-col xl="9" lg="12">
        <b-row>
          <b-col lg="4" md="6" v-for="(item, idx) in properties" :key="idx">
            <PropertyCard :item="item" />
          </b-col>
        </b-row>

        <div class="p-3 border-top">
          <b-pagination :total-rows="15" :per-page="5" prev-text="Previous" next-text="Next" class="justify-content-end mb-0" />
        </div>
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import { properties } from "@/views/property/grid/components/data";
import PropertyCard from "@/views/property/grid/components/PropertyCard.vue";
import Filters from "@/views/property/grid/components/Filters.vue";
</script>