<template>
  <VerticalLayout>
    <PageTitle title="Reviews" subtitle="Real Estate"/>

    <b-row>
      <b-col xl="12">
        <b-card no-body>
          <b-card-header class="d-flex justify-content-between align-items-center border-bottom">
            <div>
              <b-card-title tag="h4">All Reviews</b-card-title>
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
              <b-table-simple hover class="align-middle text-nowrap table-centered border-bottom mb-0">
                <b-thead class="bg-light-subtle">
                  <b-tr>
                    <b-th style="width: 20px;">
                      <b-form-checkbox/>
                    </b-th>
                    <b-th>Properties Photo &amp; Name</b-th>
                    <b-th>Date</b-th>
                    <b-th>Customer Name</b-th>
                    <b-th>Property Address</b-th>
                    <b-th>Rating</b-th>
                    <b-th class="w-25">Review</b-th>
                    <b-th>Status</b-th>
                    <b-th>Action</b-th>
                  </b-tr>
                </b-thead>
                <b-tbody>

                  <b-tr v-for="(item,idx) in propertyReviews" :key="idx">
                    <b-td>
                      <b-form-checkbox/>
                    </b-td>
                    <b-td>
                      <div class="d-flex align-items-center gap-2">
                        <div>
                          <img :src="item.property.image" alt=""
                               class="avatar-md rounded border border-light border-3">
                        </div>
                        <div>
                          <a href="#" class="text-dark fw-medium fs-15">{{ item.property.name }}</a>
                        </div>
                      </div>

                    </b-td>
                    <b-td>{{ item.date }}</b-td>
                    <b-td>{{ item.customerName }}</b-td>
                    <b-td>{{ item.property.address }}</b-td>
                    <b-td>{{ item.rating }}/5</b-td>
                    <b-td>
                      <ul class="d-flex text-warning m-0 fs-5 list-unstyled">

                        <li v-for="(star,idx) in Array.from(new Array(Math.floor(item.rating)))" :key="idx"><i
                            class="ri-star-fill"></i></li>

                        <template v-if="item.rating < 5">
                          <li v-for="(star,idx) in Array.from(new Array(6 - Math.ceil(item.rating)))" :key="idx"><i
                              class="ri-star-line"></i></li>
                        </template>

                      </ul>
                      <p class="my-1 text-dark fw-semibold">{{ item.review.title }}</p>
                      <p class="text-wrap mb-0">"{{ item.review.comment }}"</p>
                    </b-td>
                    <b-td>
                      <b-badge class="py-1 px-2 fs-12"
                               :class="item.status === 'published' ? 'bg-success-subtle text-success' : 'bg-warning-subtle text-warning ' ">
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

          <b-card-footer>
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
import {propertyReviews} from "@/views/reviews/data";
import {Icon} from "@iconify/vue";
import {toSentenceCase} from "@/helpers/change-casing";
import {ref} from "vue";

const perPageItem = ref(5)
const currentPage = ref(1)
</script>