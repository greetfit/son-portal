<template>
  <b-card no-body>
    <b-card-header class="d-flex justify-content-between align-items-center">
      <div>
        <b-card-title>Transaction History</b-card-title>
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
            <b-th>Order ID</b-th>
            <b-th>Transaction Date</b-th>
            <b-th>Property Type</b-th>
            <b-th>Properties Address</b-th>
            <b-th>Amount</b-th>
            <b-th>Status</b-th>
            <b-th>Agent Name</b-th>
            <b-th>Action</b-th>
          </b-tr>
        </b-thead>
        <b-tbody>
          <b-tr v-for="(item, idx) in transactions" :key="idx">
            <b-td>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" :id="`customCheck${idx}`">
                <label class="form-check-label" :for="`customCheck${idx}`">&nbsp;</label>
              </div>
            </b-td>
            <b-td>{{ item.id }}</b-td>
            <b-td>{{ item.date }}</b-td>
            <b-td>{{ toSentenceCase(item.category) }}</b-td>
            <b-td>{{ item.location }}</b-td>
            <b-td>{{ currency }}{{ item.amount }}</b-td>
            <b-td><span class="badge bg-success text-white fs-11">Paid</span></b-td>
            <b-td>{{ item.agentName }}</b-td>
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
      <b-pagination :total-rows="15" :per-page="5" prev-text="Previous" next-text="Next" class="justify-content-end mb-0" />
    </b-card-footer>
  </b-card>
</template>
<script setup lang="ts">
import { currency } from "@/helpers/constants";
import { Icon } from "@iconify/vue";
import { transactions } from "@/views/customers/[id]/components/data";
import { toSentenceCase } from "@/helpers/change-casing";
</script>