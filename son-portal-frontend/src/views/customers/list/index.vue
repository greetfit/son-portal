<template>
  <VerticalLayout>
    <PageTitle title="Customer List" subtitle="Customers" />
    <b-row>
      <b-col xl="12">
        <b-card no-body>
          <b-card-header class="d-flex justify-content-between align-items-center border-bottom">
            <div>
              <b-card-title>All Customer List</b-card-title>
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
          <b-card-body class="p-0">
              <b-table-simple responsive hover class="align-middle text-nowrap table-centered mb-0">
                <b-thead class="bg-light-subtle">
                  <b-tr>
                    <b-th style="width: 20px;">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="customCheck1">
                        <label class="form-check-label" for="customCheck1"></label>
                      </div>
                    </b-th>
                    <b-th>Customer Photo & Name</b-th>
                    <b-th>Email</b-th>
                    <b-th>Contact</b-th>
                    <b-th>Property Type</b-th>
                    <b-th>Interested Properties</b-th>
                    <b-th>Status</b-th>
                    <b-th>Last Contacted</b-th>
                    <b-th>Action</b-th>
                  </b-tr>
                </b-thead>
                <b-tbody>
                  <b-tr v-for="(item, idx) in customers" :key="idx">
                    <b-td>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" :id="`customCheck${idx}`">
                        <label class="form-check-label" :for="`customCheck${idx}`">&nbsp;</label>
                      </div>
                    </b-td>
                    <b-td>
                      <div class="d-flex align-items-center gap-2">
                        <div>
                          <img :src="item.customer.img" alt="" class="avatar-sm rounded-circle">
                        </div>
                        <div>
                          <a href="#!" class="text-dark fw-medium fs-15">{{ item.customer.name }}</a>
                        </div>
                      </div>

                    </b-td>
                    <b-td>{{ item.email }}</b-td>
                    <b-td>+{{ item.contact }}</b-td>
                    <b-td v-if="item.category">{{ toSentenceCase(item.category) }}</b-td>
                    <b-td>{{ item.interestedProperties }}</b-td>
                    <b-td v-if="item.status">{{ kebabToTitleCase(item.status) }}</b-td>
                    <b-td>{{ item.date }}</b-td>
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
import { customers } from "@/views/customers/list/components/data";
import { Icon } from "@iconify/vue";
import { kebabToTitleCase, toSentenceCase } from "@/helpers/change-casing";
</script>