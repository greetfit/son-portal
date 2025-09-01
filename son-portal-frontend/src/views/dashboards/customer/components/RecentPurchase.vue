<template>
<b-col xl="4" lg="6">
        <b-card no-body class="overflow-hidden">
          <b-card-header>
            <b-card-title>Recent Purchase Property</b-card-title>
          </b-card-header>
          <b-card-body>
            <div class="position-relative">
              <img :src="properties10" alt="" class="img-fluid rounded-top">
              <span class="position-absolute top-0 end-0 p-1">
                <span class="badge bg-danger text-white fs-13">Sold</span>
              </span>
            </div>
            <div class="d-flex align-items-center gap-2 mt-3 pt-1">
              <div class="avatar bg-light rounded">
                <div class="avatar-title">
                <Icon icon="solar:buildings-3-bold-duotone" class="fs-24 text-primary" />
                </div>
              </div>
              <div>
                <a href="#!" class="text-dark fw-medium fs-16">Woodis B. Apartment</a>
                <p class="text-muted mb-0">Bungalow Road
                  Niobrara</p>
              </div>
              <div class="ms-auto">
                <p class="fw-medium text-dark fs-18 mb-0">{{currency}}80,675.00 </p>
              </div>
            </div>
            <b-row class="mt-2 g-2">
              <b-col lg="2" cols="4">
                <span class="badge bg-light-subtle text-muted border fs-12">
                  <span class="fs-16"><Icon icon="solar:bed-broken" class="align-middle" /></span>
                  4 Beds
                </span>
              </b-col>
              <b-col lg="2" cols="4">
                <span class="badge bg-light-subtle text-muted border fs-12">
                  <span class="fs-16"><Icon icon="solar:bath-broken" class="align-middle" /></span>
                  3 Bath
                </span>
              </b-col>
              <b-col lg="2" cols="4">
                <span class="badge bg-light-subtle text-muted border fs-12">
                  <span class="fs-16"><Icon icon="solar:scale-broken"
                      class="align-middle" /></span>
                  1700ft
                </span>
              </b-col>
              <b-col lg="2" cols="4">
                <span class="badge bg-light-subtle text-muted border fs-12">
                  <span class="fs-16"><Icon icon="solar:double-alt-arrow-up-broken"
                      class="align-middle" /></span>
                  6 Floor
                </span>
              </b-col>
            </b-row>
            <div class="d-flex align-items-center gap-2 mt-3 pt-2">
              <div class="avatar">
                <img :src="avatar6" alt="avatar-3" class="img-fluid rounded-circle">
              </div>
              <div class="d-block">
                <span class="text-dark">
                  <a href="#!" class="text-dark fw-medium fs-15">Tiia Karppinen</a>
                </span>
                <p class="mb-0 fs-14 text-muted">tiiakarppinen@teleworm.us</p>
              </div>
              <div class="ms-auto">
                <i class="ri-checkbox-circle-line fs-20 text-success"></i>
              </div>
            </div>
          </b-card-body>
        </b-card>
      </b-col>
</template>
<script setup lang="ts">
import { currency } from "@/helpers/constants";
import { Icon } from "@iconify/vue";

import properties10 from "@/assets/images/properties/p-10.jpg";
import avatar6 from "@/assets/images/users/avatar-6.jpg";
</script>