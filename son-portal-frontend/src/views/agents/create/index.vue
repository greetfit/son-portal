<template>
  <VerticalLayout>
    <PageTitle title="Add Agent" subtitle="Agents" />
    <b-row>
      <b-col xl="3" lg="4">
        <AgentCard />
      </b-col>

      <b-col xl="9" lg="8">
        <AddPhoto />
        <AgentInfo />

        <div class="mb-3 rounded">
          <b-row class="justify-content-end g-2">
            <b-col lg="2">
              <a href="#!" class="btn btn-outline-primary w-100">Create Agent</a>
            </b-col>
            <b-col lg="2">
              <a href="#!" class="btn btn-danger w-100">Cancel</a>
            </b-col>
          </b-row>
        </div>
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import AgentCard from "@/views/agents/create/components/AgentCard.vue";
import AddPhoto from "@/views/agents/create/components/AddPhoto.vue";
import AgentInfo from "@/views/agents/create/components/AgentInfo.vue";
</script>