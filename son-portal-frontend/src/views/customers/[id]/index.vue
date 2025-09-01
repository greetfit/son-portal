<template>
  <VerticalLayout>
    <PageTitle title="Customer Overview" subtitle="Customers" />
    <b-row>
      <b-col xl="8" lg="12">
        <CustomerDetails />
        <b-card no-body>
          <b-card-body>
            <b-row>
              <b-col lg="4">
                <div class="border p-2 rounded">
                  <div class="d-flex gap-3 align-items-center">
                    <div class="avatar bg-success bg-opacity-10 rounded">
                      <div class="avatar-title">
                        <Icon icon="solar:home-2-bold" class="fs-28 text-success" />
                      </div>
                    </div>
                    <div>
                      <p class="text-dark fw-semibold fs-16 mb-0">Active Property</p>
                      <p class="mb-0">350 Property Active</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                    <p class="mb-1 text-dark  fw-medium fa-15">View Property</p>
                    <div>
                      <p class="mb-0 text-dark fw-semibold fs-15">231</p>
                    </div>

                  </div>
                  <b-progress class="mt-2" style="height: 10px;">
                    <b-progress-bar variant="success" striped animated :value="60" />
                  </b-progress>
                </div>
              </b-col>
              <b-col lg="4">
                <div class="border p-2 rounded">
                  <div class="d-flex gap-3 align-items-center">
                    <div class="avatar bg-warning bg-opacity-10 rounded">
                      <div class="avatar-title">
                        <Icon icon="solar:home-bold" class="fs-28 text-warning" />
                      </div>
                    </div>
                    <div>
                      <p class="text-dark fw-semibold fs-16 mb-0">View Property</p>
                      <p class="mb-0">231 Property View</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                    <p class="mb-1 text-dark  fw-medium fa-15">Own Property</p>
                    <div>
                      <p class="mb-0 text-dark fw-semibold fs-15">27</p>
                    </div>

                  </div>
                  <b-progress class="mt-2" style="height: 10px;">
                    <b-progress-bar variant="warning" striped animated :value="20" />
                  </b-progress>
                </div>
              </b-col>
              <b-col lg="4">
                <div class="border p-2 rounded">
                  <div class="d-flex gap-3 align-items-center">
                    <div class="avatar bg-primary bg-opacity-10 rounded">
                      <div class="avatar-title">
                        <Icon icon="solar:money-bag-bold" class="fs-28 text-primary" />
                      </div>
                    </div>
                    <div>
                      <p class="text-dark fw-semibold fs-16 mb-0">Own Property</p>
                      <p class="mb-0">27 Property Own</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                    <p class="mb-1 text-dark  fw-medium fa-15">Invest On Property</p>
                    <div>
                      <p class="mb-0 text-dark fw-semibold fs-15">{{ currency }}928,128</p>
                    </div>

                  </div>
                  <b-progress class="mt-2" style="height: 10px;">
                    <b-progress-bar variant="primary" striped animated :value="80" />
                  </b-progress>
                </div>
              </b-col>
            </b-row>
          </b-card-body>
        </b-card>
        <InterestedProperties />
      </b-col>
      <b-col xl="4" lg="12">
        <WeeklyInquiry />
        <Transactions />
        <OwnProperty />
      </b-col>
    </b-row>

    <b-row>
      <b-col xl="12">
        <TransactionHistory />
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import { currency } from "@/helpers/constants";
import { Icon } from "@iconify/vue";
import { weeklyInquiryChart, ownPropertyChart } from "@/views/customers/[id]/components/data";
import CustomerDetails from "@/views/customers/[id]/components/CustomerDetails.vue";
import InterestedProperties from "@/views/customers/[id]/components/InterestedProperties.vue";
import WeeklyInquiry from "@/views/customers/[id]/components/WeeklyInquiry.vue";
import Transactions from "@/views/customers/[id]/components/Transactions.vue";
import OwnProperty from "@/views/customers/[id]/components/OwnProperty.vue";
import TransactionHistory from "@/views/customers/[id]/components/TransactionHistory.vue";
</script>