<template>
  <b-col xl="4">
    <b-card no-body class="bg-primary bg-gradient">
      <b-card-body>
        <b-row class="align-items-center justify-content-between">
          <b-col xl="7" lg="6" md="6">
            <h3 class="text-white fw-bold">{{ currency }}117,000.43</h3>
            <p class="text-white-50">My Balance</p>
            <b-row class="mt-4">
              <b-col lg="6" md="6" cols="6">
                <div class="d-flex gap-2">
                  <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-success bg-opacity-50 text-white rounded">
                      <i class="ri-arrow-down-line fs-4"></i>
                    </span>
                  </div>
                  <div class="d-block">
                    <h5 class="text-white fw-medium mb-0">{{ currency }}13,321.12</h5>
                    <p class="mb-0 text-white-50">Income</p>
                  </div>
                </div>
              </b-col>
              <b-col lg="6" md="6" cols="6">
                <div class="d-flex gap-2">
                  <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-danger bg-opacity-50 text-white rounded">
                      <i class="ri-arrow-up-line fs-4"></i>
                    </span>
                  </div>
                  <div class="d-block">
                    <h5 class="text-white fw-medium mb-0">{{ currency }}7,566.11</h5>
                    <p class="mb-0 text-white-50">Expanse</p>
                  </div>
                </div>
              </b-col>
            </b-row>
            <b-row class="mt-3 g-2">
              <b-col xl="6" lg="6" md="6">
                <a href="#!" class="btn btn-warning w-100 btn-sm">Send</a>
              </b-col>
              <b-col xl="6" lg="6" md="6">
                <a href="#!" class="btn bg-light bg-opacity-25 text-white w-100 btn-sm">Receive</a>
              </b-col>
            </b-row>
          </b-col>
          <b-col xl="5" lg="4" md="4">
            <img :src="moneyImg" alt="" class="img-fluid">
          </b-col>
        </b-row>
      </b-card-body>
    </b-card>
    <b-card no-body>
      <b-card-body class="p-0">
        <b-row class="g-3">
          <b-col xl="6" md="6">
            <div class="text-center p-3 border-end">
              <b-card-title tag="h5" class="mb-0 text-dark fw-medium">Property</b-card-title>
              <div class="avatar-md bg-light bg-opacity-50 rounded mx-auto my-3">
                <div class="avatar-title">
                  <Icon icon="solar:home-bold-duotone" class="fs-32 text-primary" />
                </div>
              </div>
              <h4 class="text-dark fw-medium">15,780</h4>

              <p class="text-muted">60% Target</p>

              <b-progress class="mt-3" style="height: 10px;">
                <b-progress-bar variant="primary" striped animated :value="60" />
              </b-progress>
            </div>
          </b-col>

          <b-col xl="6" md="6">
            <div class="text-center p-3">
              <b-card-title tag="h5" class="mb-0 text-dark fw-medium">Revenue</b-card-title>
              <div class="avatar-md bg-light bg-opacity-50 rounded mx-auto my-3">
                <div class="avatar-title">
                  <Icon icon="solar:money-bag-bold-duotone" class="fs-32 text-success" />
                </div>
              </div>
              <h4 class="text-dark fw-medium">{{ currency }}78.3M</h4>

              <p class="text-muted">80% Target</p>

              <b-progress class="mt-3" style="height: 10px;">
                <b-progress-bar variant="success" striped animated :value="80" />
              </b-progress>
            </div>
          </b-col>
        </b-row>
      </b-card-body>
      <b-card-footer class="border-top mt-1">
        <a href="#!" class="link-dark fw-medium">View More <i class="ri-arrow-right-line"></i></a>
      </b-card-footer>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
import { currency } from "@/helpers/constants";
import moneyImg from "@/assets/images/money.png"
</script>