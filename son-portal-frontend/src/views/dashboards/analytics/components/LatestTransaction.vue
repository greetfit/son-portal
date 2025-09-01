<template>
  <b-row>
    <b-col xl="12">
      <b-card no-body>
        <b-card-header class="d-flex justify-content-between align-items-center">
          <div>
            <b-card-title>Latest Transaction</b-card-title>
          </div>
          <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
            <template v-slot:button-content>
              <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded">
                This Month
              </a>
            </template>
            <b-dropdown-item>Week</b-dropdown-item>
            <b-dropdown-item>Months</b-dropdown-item>
            <b-dropdown-item>Years</b-dropdown-item>
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
                <b-th>Purchase ID</b-th>
                <b-th>Buyer Name</b-th>
                <b-th>Invoice</b-th>
                <b-th>Purchase Date</b-th>
                <b-th>Total Amount</b-th>
                <b-th>Payment Method</b-th>
                <b-th>Payment Status</b-th>
                <b-th>Action</b-th>
              </b-tr>
            </b-thead>
            <b-tbody>
              <b-tr v-for="(item, idx) in latestTransaction" :key="idx">
                <b-td>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" :id="`customCheck${idx}`">
                    <label class="form-check-label" :for="`customCheck${idx}`">&nbsp;</label>
                  </div>
                </b-td>
                <b-td><a href="javascript: void(0);" class="text-dark fw-medium">#{{ item.id }}</a> </b-td>
                <b-td>
                  <img :src="item.buyer.img" class="avatar-sm rounded-circle me-2" alt="...">
                  {{ item.buyer.name }}
                </b-td>
                <b-td>{{ item.invoice }}</b-td>
                <b-td> {{ item.date }}</b-td>
                <b-td> {{ currency }}{{ item.amount }} </b-td>
                <b-td> {{ toSentenceCase(item.paymentMethod) }} </b-td>
                <b-td> <span class="badge py-1 px-2 fs-12"
                    :class="item.status === 'completed' ? 'bg-success-subtle text-success' : item.status === 'cancel' ? 'bg-danger-subtle text-danger' : 'bg-warning-subtle text-warning'">
                    {{ toSentenceCase(item.status) }}
                  </span>
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
      </b-card>
    </b-col>
  </b-row>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
import { currency } from "@/helpers/constants";
import { latestTransaction } from "@/views/dashboards/analytics/components/data";
import { toSentenceCase } from "@/helpers/change-casing";
</script>