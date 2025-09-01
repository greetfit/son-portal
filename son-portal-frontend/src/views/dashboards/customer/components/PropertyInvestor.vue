<template>
  <b-col xl="4">
    <b-card no-body>
      <b-card-header>
        <b-card-title>Property Investor</b-card-title>
      </b-card-header>
      <b-card-body>
        <div class="d-flex align-items-center gap-3">
          <img :src="avatar2" class="rounded avatar-xl img-thumbnail" alt="img-7">
          <div class="">
            <h4 class="mb-1"><a href="customers-details.html" class="mb-1 link-dark fw-semibold">Daavid Nummi</a>
            </h4>
            <a href="#!" class="link-primary fw-medium fs-14">EastTribune.nl</a>
            <ul class="list-inline d-flex flex-wrap gap-1 mb-0 align-items-center mt-2">
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
                  class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
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
        </div>
        <div class="">
          <ApexChart :chart="propertyInvestorChart" id="customer_invest" class="apex-charts mt-3" />
        </div>
      </b-card-body>
      <b-card-footer class="border-top border-dashed gap-1 hstack">
        <a href="#!" class="btn btn-primary w-100">Open Chat</a>
        <a href="#!" class="btn btn-light w-100">Call To Customer</a>
      </b-card-footer>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { propertyInvestorChart } from "@/views/dashboards/customer/components/data";
import avatar2 from '@/assets/images/users/avatar-2.jpg'
</script>