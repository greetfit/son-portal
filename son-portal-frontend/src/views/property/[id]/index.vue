<template>
  <VerticalLayout>
    <PageTitle title="Property Overview" subtitle="Real Estate" />
    <b-row>
      <b-col xl="3" lg="4">
        <OwnerDetails />
        <ScheduleTour />
      </b-col>
      <b-col xl="9" lg="8">
        <PropertyDetails />
      </b-col>
    </b-row>
    <b-row>
      <Location />
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import OwnerDetails from "@/views/property/[id]/components/OwnerDetails.vue";
import ScheduleTour from "@/views/property/[id]/components/ScheduleTour.vue";
import PropertyDetails from "@/views/property/[id]/components/PropertyDetails.vue";
import Location from "@/views/property/[id]/components/Location.vue";
</script>