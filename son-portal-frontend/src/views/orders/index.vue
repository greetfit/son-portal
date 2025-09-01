<template>
  <VerticalLayout>
    <PageTitle title="Orders" subtitle="Real Estate"/>

    <b-row>
      <b-col xl="12">
        <b-card no-body>
          <b-card-header class="d-flex justify-content-between align-items-center border-bottom">
            <div>
              <b-card-title tag="h4">All Order List</b-card-title>
            </div>
            <b-dropdown variant="link" toggle-class="p-0 m-0" no-caret>
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
            <div class="table-responsive mb-0">
              <b-table-simple hover class="align-middle text-nowrap table-centered mb-0">
                <b-thead class="bg-light-subtle">
                  <b-tr>
                    <b-th style="width: 20px;">
                      <b-form-checkbox/>
                    </b-th>
                    <b-th>Customer Photo & Name</b-th>
                    <b-th>Purchase Date</b-th>
                    <b-th>Contact</b-th>
                    <b-th>Property Type</b-th>
                    <b-th>Amount</b-th>
                    <b-th>Purchase Properties</b-th>
                    <b-th>Amount Status</b-th>
                    <b-th>Action</b-th>
                  </b-tr>
                </b-thead>
                <b-tbody>

                  <b-tr v-for="(item,idx) in orders" :key="idx">
                    <b-td>
                      <b-form-checkbox/>
                    </b-td>
                    <b-td>
                      <div class="d-flex align-items-center gap-2">
                        <div>
                          <img :src="item.customer.image" alt="" class="avatar-sm rounded-circle">
                        </div>
                        <div>
                          <a href="#" class="text-dark fw-medium fs-15">{{ item.customer.name }}</a>
                        </div>
                      </div>
                    </b-td>
                    <b-td>{{ item.purchasedDate }}</b-td>
                    <b-td>{{ item.contactNo }}</b-td>
                    <b-td>{{ toSentenceCase(item.property.type) }}</b-td>
                    <b-td>{{ currency }}{{ item.amount }}</b-td>
                    <b-td>{{ item.property.address }}</b-td>
                    <b-td>
                      <b-badge class="text-white fs-11"
                               :class="item.status === 'paid' ? 'bg-success' : item.status === 'unpaid' ? 'bg-warning' : 'bg-danger'">
                        {{ toSentenceCase(item.status) }}
                      </b-badge>
                    </b-td>
                    <b-td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-light btn-sm">
                          <Icon icon="solar:eye-broken" class="align-middle fs-18"/>
                        </a>
                        <a href="#" class="btn btn-soft-primary btn-sm">
                          <Icon icon="solar:pen-2-broken" class="align-middle fs-18"/>
                        </a>
                        <a href="#" class="btn btn-soft-danger btn-sm">
                          <Icon icon="solar:trash-bin-minimalistic-2-broken"
                                class="align-middle fs-18"/>
                        </a>
                      </div>
                    </b-td>
                  </b-tr>
                </b-tbody>
              </b-table-simple>
            </div>
          </b-card-body>

          <b-card-footer class="border-top">
            <b-pagination v-model="currentPage" :total-rows="15" :per-page="perPageItem" prev-text="Previous"
                          next-text="Next" class="justify-content-end mb-0"/>
          </b-card-footer>
        </b-card>
      </b-col>

    </b-row>

  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import PageTitle from "@/components/PageTitle.vue";
import {orders} from "@/views/orders/data";
import {ref} from "vue";
import {Icon} from "@iconify/vue";
import {currency} from "@/helpers/constants";
import {toSentenceCase} from "@/helpers/change-casing";

const perPageItem = ref(5)
const currentPage = ref(1)
</script>