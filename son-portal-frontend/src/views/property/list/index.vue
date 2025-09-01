<template>
  <VerticalLayout>
    <PageTitle title="Listing List" subtitle="Real Estate" />
    <b-row>
      <b-col md="6" xl="3" v-for="(item, idx) in statistics" :key="idx">
        <StatisticsCard :item="item" />
      </b-col>
    </b-row>
    <b-row>
      <b-col xl="12">
        <b-card no-body>
          <b-card-header class="d-flex justify-content-between align-items-center border-bottom">
            <div>
              <b-card-title class="mb-0">All Properties List</b-card-title>
            </div>
            <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
              <template v-slot:button-content>
                <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded">
                  This Month
                </a>
              </template>

              <b-dropdown-item>Download</b-dropdown-item>
              <b-dropdown-item>Export</b-dropdown-item>
              <b-dropdown-item>Import</b-dropdown-item>
            </b-dropdown>
          </b-card-header>
            <b-table-simple responsive hover class="align-middle text-nowrap table-centered mb-0">
              <b-thead class="bg-light-subtle">
                <b-tr>
                  <b-th style="width: 20px;">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="customCheck1">
                      <label class="form-check-label" for="customCheck1"></label>
                    </div>
                  </b-th>
                  <b-th>Properties Photo & Name</b-th>
                  <b-th>Size</b-th>
                  <b-th>Property Type</b-th>
                  <b-th>Rent/Sale</b-th>
                  <b-th>Bedrooms</b-th>
                  <b-th>Location</b-th>
                  <b-th>Price</b-th>
                  <b-th>Action</b-th>
                </b-tr>
              </b-thead>
              <b-tbody>
                <b-tr v-for="(item, idx) in properties" :key="idx">
                  <b-td>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" :id="`customCheck${idx}`">
                      <label class="form-check-label" :for="`customCheck${idx}`">&nbsp;</label>
                    </div>
                  </b-td>
                  <b-td>
                    <div class="d-flex align-items-center gap-2">
                      <div>
                        <img :src="item.property.img" alt="" class="avatar-md rounded border border-light border-3">
                      </div>
                      <div>
                        <a href="#!" class="text-dark fw-medium fs-15">{{ item.property.name }}</a>
                      </div>
                    </div>

                  </b-td>
                  <b-td>{{ item.property.size }}ft</b-td>
                  <b-td v-if="item.category">{{ toSentenceCase(item.category) }}</b-td>
                  <b-td v-if="item.availability">
                    <span class="badge py-1 px-2 fs-13"
                      :class="item.availability === 'rent' ? 'bg-success-subtle text-success' : item.availability === 'sold' ? 'bg-danger-subtle text-danger' : 'bg-warning-subtle text-warning'">
                      {{ toSentenceCase(item.availability) }}
                    </span>
                  </b-td>
                  <b-td>
                    <p class="mb-0">
                      <Icon icon="solar:bed-broken" class="align-middle fs-16" />
                      {{ item.property.beds }}
                    </p>
                  </b-td>
                  <b-td>{{ item.location }}</b-td>
                  <b-td>{{ currency }}{{ item.price }}</b-td>
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
import { properties } from "@/views/property/list/components/data";
import { currency } from "@/helpers/constants";
import { toSentenceCase } from "@/helpers/change-casing";
import { Icon } from "@iconify/vue";
import { statistics } from "@/views/property/list/components/data";
import StatisticsCard from "@/views/property/list/components/StatisticsCard.vue";
</script>