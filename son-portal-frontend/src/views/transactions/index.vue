<template>
  <VerticalLayout>
    <PageTitle title="Transactions" subtitle="Real Estate"/>

    <b-row>
      <b-col xl="12">
        <b-card no-body>
          <b-card-header class="d-flex justify-content-between align-items-center border-bottom">
            <div>
              <b-card-title tag="h4">All Transactions List</b-card-title>
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
                    <b-th>Transactions ID</b-th>
                    <b-th>Customer Photo & Name</b-th>
                    <b-th>Date</b-th>
                    <b-th>Amount</b-th>
                    <b-th>Payment Method</b-th>
                    <b-th>Agent Name</b-th>
                    <b-th>Invested Property</b-th>
                    <b-th>Status</b-th>
                    <b-th>Action</b-th>
                  </b-tr>
                </b-thead>
                <b-tbody>

                  <b-tr v-for="(item,idx) in transactions" :key="idx">
                    <b-td>
                      <b-form-checkbox/>
                    </b-td>
                    <b-td><a role="button" @click="toggleTransactionsModal" class="link-primary fw-semibold">{{
                        item.id
                      }}</a></b-td>
                    <b-td>
                      <div class="d-flex align-items-center gap-2">
                        <a href="#" class="rounded-circle">
                          <div class="position-relative">
                            <img :src="item.customer.image" alt=""
                                 class="avatar-sm rounded-circle flex-shrink-0 ">
                            <span class="position-absolute bottom-0 end-0  rounded-circle">
                              <span class=""><i
                                  class="ri-circle-fill fs-10 align-bottom text-success bg-light rounded-circle"></i></span>
                            </span>
                          </div>
                        </a>
                        <div>
                          <a href="#" class="text-dark fw-medium fs-15">{{ item.customer.name }}</a>
                        </div>
                      </div>

                    </b-td>
                    <b-td>{{ item.date }}</b-td>
                    <b-td>{{ currency }}{{ item.amount }}</b-td>
                    <b-td>
                      <div class="d-flex gap-2">
                        <template v-if="item.payment.cardDetails">
                          <div>
                            <img v-if="item.payment.cardDetails.type === 'mastercard'" :src="mastercard" alt=""
                                 class="avatar-xs">
                            <img v-if="item.payment.cardDetails.type === 'visa'" :src="visa" alt="" class="avatar-xs">
                          </div>
                          <div>
                            <p class="text-dark mb-1 fw-medium">{{ toSentenceCase(item.payment.cardDetails.type) }} ****
                              {{ item.payment.cardDetails.lastDigits }}</p>
                            <p class="mb-0">Card Payment </p>
                          </div>
                        </template>
                        <template v-if="item.payment.bankDetails">
                          <div v-if="item.payment.bankDetails.type === 'paypal'">
                            <img :src="paypal" alt="" class="avatar-xs">
                          </div>
                          <div>
                            <p class="text-dark mb-1 fw-medium">{{ item.payment.bankDetails.email }}</p>
                            <p class="mb-0">Bank Payment </p>
                          </div>
                        </template>
                      </div>
                    </b-td>
                    <b-td>{{ item.agent }}</b-td>
                    <b-td>{{ item.property }}</b-td>
                    <b-td>
                      <b-badge class="badge py-1 px-2 fs-12"
                               :class="item.status === 'completed'? 'bg-success-subtle text-success' : item.status === 'pending' ? 'bg-warning-subtle text-warning' : 'bg-danger-subtle text-danger'">
                        {{
                          toSentenceCase(item.status)
                        }}
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
          <b-card-footer>
            <b-pagination v-model="currentPage" :total-rows="15" :per-page="perPageItem" prev-text="Previous"
                          next-text="Next" class="justify-content-end mb-0"/>
          </b-card-footer>
        </b-card>
      </b-col>

    </b-row>

    <b-modal v-model="showTransactionsModal" hide-header hide-footer>
      <b-card no-body class="border-0 mb-0 shadow-none">
        <b-card-body class="p-0 pb-3">
          <div class="d-flex align-items-center gap-3">
            <a href="#" class="rounded-circle">
              <div class="position-relative">
                <img :src="avatar2" alt=""
                     class="avatar-md rounded-circle flex-shrink-0 img-thumbnail">
                <span class="position-absolute bottom-0 end-0  rounded-circle">
                  <span class=""><i
                      class="ri-verified-badge-fill fs-18 align-bottom text-primary bg-light rounded-circle"></i></span>
                </span>
              </div>
            </a>
            <div>
              <a href="#" class="text-dark fw-semibold fs-18">Ray C. Nichols</a>
              <p class="mb-0">raycnichols@teleworm.us</p>
            </div>
            <div class="ms-auto">
              <span class="badge bg-primary-subtle text-primary py-1 px-2 fs-12">Premium</span>
            </div>
          </div>
          <div class="p-3 bg-primary bg-gradient rounded-4 mt-4 border border-light border-2 shadow-sm">
            <div class="d-flex align-items-center">
              <img :src="chip" alt="" class="avatar">
              <div class="ms-auto">
                <img :src="mastercard" alt="" class="avatar">
              </div>
            </div>
            <div class="mt-5">

              <h4 class="text-white d-flex gap-2"><span class="text-white-50">XXXX</span> <span
                  class="text-white-50">XXXX</span> <span class="text-white-50">XXXX</span> 3467</h4>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <div>
                <p class="text-white-50 mb-2">Holder Name</p>
                <h4 class="mb-0 text-white">Ray C. Nichols</h4>
              </div>
              <div>
                <p class="text-white-50 mb-2">Valid</p>
                <h4 class="mb-0 text-white">05/26</h4>
              </div>
              <img :src="contactlessPayment" alt="" class="img-fluid">
            </div>
          </div>
          <div class="mt-4">
            <h4 class="text-dark fw-medium">Transactions History (2)</h4>
            <div class="d-flex align-items-center gap-3 mt-3 border p-2 rounded">
              <div class="avatar bg-primary bg-opacity-10 rounded">
                <Icon icon="solar:square-transfer-horizontal-bold"
                      class="fs-28 text-primary avatar-title"/>
              </div>
              <div>
                <p class="mb-1 text-dark fw-medium fs-15">Michael A. Miner</p>
                <p class="text-muted mb-0">michaelminer@dayrep.com</p>
              </div>
              <div class="ms-auto">
                <p class="mb-1 fs-16 text-dark fw-medium">$13,987 <span><i
                    class="ri-checkbox-circle-line text-success ms-1"></i></span></p>
                <p class="mb-0 fs-13">TXN-341220</p>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mt-3 border p-2 rounded">
              <div class="avatar bg-primary bg-opacity-10 rounded">
                <Icon icon="solar:square-transfer-horizontal-bold"
                      class="fs-28 text-primary avatar-title"/>
              </div>
              <div>
                <p class="mb-1 text-dark fw-medium fs-15">Theresa T. Brose</p>
                <p class="text-muted mb-0">theresbrosea@dayrep.com</p>
              </div>
              <div class="ms-auto">
                <p class="mb-1 fs-16 text-dark fw-medium">$2,710 <span><i
                    class="ri-checkbox-circle-line text-success ms-1"></i></span></p>
                <p class="mb-0 fs-13">TXN-836451</p>
              </div>
            </div>

          </div>
        </b-card-body>
        <b-card-footer class="border-top px-1">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <p class="mb-0 fs-15">Total Amount</p>
            </div>
            <div>
              <p class="mb-0 text-primary fw-semibold fs-16">{{ currency }}16,697</p>
            </div>
          </div>
        </b-card-footer>
      </b-card>
    </b-modal>

  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import PageTitle from "@/components/PageTitle.vue";
import {transactions} from "@/views/transactions/data";
import {Icon} from "@iconify/vue";
import {currency} from "@/helpers/constants";
import {toSentenceCase} from "@/helpers/change-casing";
import {ref} from "vue";

import mastercard from "@/assets/images/card/mastercard.svg"
import visa from "@/assets/images/card/visa.svg"
import paypal from "@/assets/images/card/paypal.svg"
import chip from "@/assets/images/chip.png"
import avatar2 from "@/assets/images/users/avatar-2.jpg"
import contactlessPayment from "@/assets/images/contactless-payment.png"

const perPageItem = ref(5)
const currentPage = ref(1)

const showTransactionsModal = ref(false)

const toggleTransactionsModal = () => {
  showTransactionsModal.value = !showTransactionsModal.value
}
</script>