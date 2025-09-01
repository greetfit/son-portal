<template>
  <VerticalLayout>
    <PageTitle title="Agent List" subtitle="Agents" />
    <b-row>
      <b-col lg="12">
        <b-card no-body>
          <b-card-header class="border-0">
            <b-row class="justify-content-between">
              <b-col lg="6">
                <b-row class="align-items-center">
                  <b-col lg="6">
                    <b-form class="app-search d-none d-md-block me-auto">
                      <div class="position-relative">
                        <b-form-input type="search" placeholder="Search Agent" autocomplete="off" value="" />
                        <Icon icon="solar:magnifer-broken" class="search-widget-icon" />
                      </div>
                    </b-form>
                  </b-col>
                  <b-col lg="4">
                    <h5 class="text-dark fw-medium mb-0">311 <span class="text-muted"> Agent</span></h5>
                  </b-col>
                </b-row>
              </b-col>
              <b-col lg="6">
                <div class="text-md-end mt-3 mt-md-0">
                  <b-button type="button" variant="outline-primary" class="me-1"><i
                      class="ri-settings-2-line me-1"></i>More Setting</b-button>
                  <b-button type="button" variant="outline-primary" class="me-1"><i class="ri-filter-line me-1"></i>
                    Filters</b-button>
                  <b-button type="button" variant="success" class="me-1"><i class="ri-add-line"></i> New
                    Agent</b-button>
                </div>
              </b-col>
            </b-row>
          </b-card-header>
        </b-card>
      </b-col>
    </b-row>

    <b-row>
      <b-col xl="12">
        <b-card no-body>
          <b-card-header class="d-flex justify-content-between align-items-center border-bottom">
            <div>
              <b-card-title>All Agent List</b-card-title>
            </div>
            <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
              <template v-slot:button-content>
                <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  This Month
                </a>
              </template>
              <b-dropdown-item>Download</b-dropdown-item>
              <b-dropdown-item>Export</b-dropdown-item>
              <b-dropdown-item>Import</b-dropdown-item>
            </b-dropdown>
          </b-card-header>
          <b-card-body class="p-0">
            <b-table-simple responsive hover class="align-middle text-nowrap table-centered mb-0">
              <b-thead class="bg-light-subtle">
                <b-tr>
                  <b-th>Agent Photo & Name</b-th>
                  <b-th>Address</b-th>
                  <b-th>Email</b-th>
                  <b-th>Contact</b-th>
                  <b-th>Experience</b-th>
                  <b-th>Date</b-th>
                  <b-th>Status</b-th>
                  <b-th>Action</b-th>
                </b-tr>
              </b-thead>
              <b-tbody>
                <b-tr v-for="(item, idx) in agents" :key="idx">
                  <b-td>
                    <div class="d-flex align-items-center gap-2">
                      <div>
                        <img :src="item.agent.img" alt="" class="avatar-sm rounded-circle">
                      </div>
                      <div>
                        <a href="#!" class="text-dark fw-medium fs-15">{{ item.agent.name }}</a>
                      </div>
                    </div>
                  </b-td>
                  <b-td>{{ item.location }}</b-td>
                  <b-td>{{ item.email }}</b-td>
                  <b-td>+{{ item.contact }}</b-td>
                  <b-td>{{ item.experience }} Year</b-td>
                  <b-td>{{ item.date }}</b-td>
                  <b-td v-if="item.status">
                    <b-badge :variant="null" class="py-1 px-2 fs-13"
                      :class="item.status === 'active' ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger'">
                      {{ toSentenceCase(item.status) }}
                    </b-badge>
                  </b-td>
                  <b-td>
                    <div class="d-flex gap-2">
                      <a href="#!" class="btn btn-light btn-sm">
                        <Icon icon="solar:eye-broken" class="align-middle fs-18" />
                      </a>
                      <a href="#!" class="btn btn-soft-primary btn-sm">
                        <Icon icon="solar:pen-2-broken" class="align-middle fs-18" />
                      </a>
                      <a href="#!" class="btn btn-soft-danger btn-sm">
                        <Icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18" />
                      </a>
                    </div>
                  </b-td>
                </b-tr>
              </b-tbody>
            </b-table-simple>
          </b-card-body>
          <b-card-footer>
            <b-pagination :total-rows="15" :per-page="5" prev-text="Previous" next-text="Next"
              class="justify-content-end mb-0" />
          </b-card-footer>
        </b-card>
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import { agents } from "@/views/agents/list/components/data";
import { Icon } from "@iconify/vue";
import { toSentenceCase } from "@/helpers/change-casing";
</script>