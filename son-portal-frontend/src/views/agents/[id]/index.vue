<template>
  <VerticalLayout>
    <PageTitle title="Agent Overview" subtitle="Agents" />
    <b-row>
      <Hero />
    </b-row>
    <b-row class="justify-content-center">
      <b-col xl="8" lg="12">
        <AgentDetails />
      </b-col>
      <b-col xl="4" lg="12">
        <Collection />
        <PropertyPhotos />
        <Location />
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import Hero from "@/views/agents/[id]/components/Hero.vue";
import AgentDetails from "@/views/agents/[id]/components/AgentDetails.vue";
import Collection from "@/views/agents/[id]/components/Collection.vue";
import PropertyPhotos from "@/views/agents/[id]/components/PropertyPhotos.vue";
import Location from "@/views/agents/[id]/components/Location.vue";
</script>