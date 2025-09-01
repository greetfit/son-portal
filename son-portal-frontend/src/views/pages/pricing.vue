<template>
  <VerticalLayout>
    <PageTitle title="Pricing" subtitle="Pages" />
    <b-row class="justify-content-center">
      <b-col xxl="11">
        <div class="text-center my-4">
          <h3>Simple Pricing Plans</h3>
          <p class="text-muted text-center">Get the power and control you need to manage your organization's technical documentation</p>
        </div>
        <b-row class="justify-content-center pt-3">
          <b-col lg="3" v-for="(item, idx) in pricingPlans" :key="idx">
            <b-card no-body class="card-pricing">
              <b-card-body class="rounded-top text-center bg-gradient bg-primary">
                <div class="pricing-ribbon pricing-ribbon-primary float-end" v-if="item.ribbon">{{ item.ribbon }}</div>
                <h5 class="mt-0 mb-3 fs-14 text-uppercase fw-semibold text-white">{{ item.name }}</h5>
                <h2 class="mt-0 mb-0 fw-bold text-white">
                  {{ currency }}{{ item.price }}
                  <span class="fs-14 fw-medium text-white text-opacity-50">/ {{ item.period }}</span>
                </h2>
              </b-card-body>
              <b-card-body class="pt-0">
                <ul class="card-pricing-features text-muted ps-0 list-unstyled">
                  <li class="text-dark" v-for="(feat, idx) in item.features" :key="idx">
                    <Icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2" />
                    {{ feat }}
                  </li>
                </ul>
                <div class="mt-4 text-center">
                  <b-button variant="primary" class="px-sm-4 w-100" :class="!item.button.enabled && 'disabled'">
                    {{ item.button.text }}
                  </b-button>
                </div>
              </b-card-body>
            </b-card>
          </b-col>
        </b-row>
      </b-col>
    </b-row>
  </VerticalLayout>
</template>
<script setup lang="ts">
import VerticalLayout from '@/layouts/VerticalLayout.vue'
import { Icon } from '@iconify/vue'
import { currency } from '@/helpers/constants'
import { pricingPlans } from '@/views/pages/components/data'
import PageTitle from "@/components/PageTitle.vue";
</script>
