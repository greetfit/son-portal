<template>
  <VerticalLayout>
    <PageTitle title="Agent Grid" subtitle="Agents" />
    <b-row>
      <WelcomeCard />
      <Widgets />
    </b-row>

    <b-row>
      <b-col lg="12">
        <b-card no-body class="bg-body shadow-none">
          <b-card-header class="border-0">
            <b-row class="justify-content-between align-items-center">
              <b-col lg="6">
                <p class="mb-0 text-muted">Showing all <span class="text-dark fw-semibold">311</span> Agent</p>
              </b-col>
              <b-col lg="6">
                <div class="text-md-end mt-3 mt-md-0">
                  <b-button type="button" variant="outline-primary" class="me-1"><i class="ri-settings-2-line me-1"></i>More Setting</b-button>
                  <b-button type="button" variant="outline-primary" class="me-1"><i class="ri-filter-line me-1"></i> Filters</b-button>
                  <b-button type="button" variant="success" class="me-1"><i class="ri-add-line"></i> New Agent</b-button>
                </div>
              </b-col>
            </b-row>
          </b-card-header>
        </b-card>
      </b-col>
    </b-row>

    <b-row>
      <b-col xl="4" lg="6" v-for="(item, idx) in agents" :key="idx">
        <AgentCard :item="item" />
      </b-col>
    </b-row>
    <div class="p-3 border-top">
      <b-pagination :total-rows="15" :per-page="5" prev-text="Previous" next-text="Next" class="justify-content-end mb-0" />
    </div>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import AgentCard from "@/views/agents/grid/components/AgentCard.vue";
import WelcomeCard from "@/views/agents/grid/components/WelcomeCard.vue";
import Widgets from "@/views/agents/grid/components/Widgets.vue";
import { agents } from "@/views/agents/grid/components/data";
</script>