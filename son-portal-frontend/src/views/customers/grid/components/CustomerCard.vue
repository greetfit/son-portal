<template>
  <b-card no-body class="overflow-hidden">
    <b-card-body>
      <div class="customer-bg rounded position-relative">
        <img :src="item.customer.img" alt=""
          class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
        <span class="position-absolute top-0 end-0 p-1">
          <button type="button"
            class="btn btn-dark avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light p-0">
            <Icon icon="solar:pen-new-square-broken" />
          </button>
        </span>
      </div>
      <div class="mt-5 pt-3 ms-1">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <a href="customers-details.html" class="fs-18 link-primary fw-semibold">{{ item.customer.name }}</a>
          <div v-if="item.availability">
            <span class="badge text-white fs-12 px-2 py-1"
              :class="item.availability === 'available' ? 'bg-success' : 'bg-danger'">{{
                toSentenceCase(item.availability) }}</span>
          </div>
        </div>
        <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Email Address : </span> {{ item.email }}
        </p>
        <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Contact Number : </span> +{{
          item.contact }} </p>
        <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Address : </span> {{ item.address }}
        </p>
        <b-row class="mt-3 justify-content-between" v-if="item.property">
          <b-col lg="3">
            <p class="fw-medium mb-2">View Property</p>
            <h5 class="mb-0 fw-semibold text-dark">{{ item.property.view }}</h5>
          </b-col>
          <b-col lg="3">
            <p class="fw-medium mb-2">Own Property</p>
            <h5 class="mb-0 fw-semibold text-dark">{{ item.property.own }}</h5>
          </b-col>
          <b-col lg="4">
            <p class="fw-medium mb-2">Invest On Property</p>
            <h5 class="mb-0 fw-semibold text-dark">{{ currency }}{{ item.property.invest }}
            </h5>
          </b-col>
        </b-row>
        <h4 class="mt-3 fs-17">Social Information :</h4>
        <ul class="list-inline d-flex gap-1 mb-0 align-items-center mt-3">
          <li class="list-inline-item">
            <a href="javascript: void(0);"
              class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
              <i class="ri-facebook-fill"></i>
            </a>
          </li>

          <li class="list-inline-item">
            <a href="javascript: void(0);"
              class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
              <i class="ri-instagram-fill"></i>
            </a>
          </li>

          <li class="list-inline-item">
            <a href="javascript: void(0);"
              class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center fs-20">
              <i class="ri-twitter-fill"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="javascript: void(0);"
              class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
              <i class="ri-whatsapp-fill"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="javascript: void(0);"
              class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
              <i class="ri-mail-fill"></i>
            </a>
          </li>
        </ul>
      </div>
    </b-card-body>
    <b-card-footer class="border-top border-dashed gap-1 hstack">
      <a href="#!" class="btn btn-primary w-100">Open Chat</a>
      <a href="#!" class="btn btn-light w-100">Call To Customer</a>
    </b-card-footer>
  </b-card>
</template>

<script setup lang="ts">
import type { PropType } from "vue";
import type { CustomerType } from '@/types';
import { Icon } from "@iconify/vue";
import { currency } from "@/helpers/constants";
import { toSentenceCase } from "@/helpers/change-casing";

defineProps({
  item: {
    type: Object as PropType<CustomerType>,
    required: true
  }
});
</script>