<template>
  <b-card no-body>
    <b-card-body>
      <div class="d-flex flex-wrap align-items-center gap-3">
        <div class="position-relative">
          <img :src="avatar2" alt="avatar-2" class="avatar-xl user-img img-thumbnail rounded-circle">
          <div class="badge bg-success rounded-2 position-absolute bottom-0 start-50 translate-middle-x mb-n1 fs-11">
            # 1</div>
        </div>
        <div class="d-block">
          <a href="#!" class="text-dark fw-medium fs-16">Michael A. Miner</a>
          <p class="mb-0">michaelminer@dayrep.com</p>
        </div>
        <div class="ms-lg-auto">
          <a href="#!" class="btn btn-primary">Message</a>{{ ' ' }}
          <a href="#!" class="btn btn-outline-secondary">Work With Michael</a>
        </div>
      </div>
      <div class="mt-3">
        <p class="d-flex align-items-center gap-2">
          <Icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary" />Lincoln Drive Harrisburg, PA 17101
          U.S.A
        </p>
        <p class="d-flex align-items-center gap-2">
          <Icon icon="solar:outgoing-call-rounded-bold-duotone" class="fs-18 text-primary" />+123 864-357-7713
        </p>

        <b-card-title class="mb-2 mt-3">Social Media :</b-card-title>
        <ul class="list-inline d-flex gap-1 mb-0 mt-3 align-items-center">
          <li class="list-inline-item" v-for="(item, idx) in socialMediaLink" :key="idx">
            <a href="javascript: void(0);"
              :class="`btn btn-soft-${item.variant} avatar-sm d-flex align-items-center justify-content-center fs-20`">
              <i :class="item.icon"></i>
            </a>
          </li>

        </ul>
      </div>
      <div class="mt-4">
        <b-card-title class="mb-2">About Michael :</b-card-title>
        <p class="mb-2">Meet Michael, a dedicated and experienced real estate agent who is committed to making
          your real estate journey smooth and successful. With a passion for helping clients achieve their dreams,
          Michael brings a wealth of knowledge and expertise to every transaction.</p>
        <p class="mb-2">Michael has been a prominent figure in the real estate industry for over a decade. His
          career began with a focus on residential properties, quickly expanding to include commercial real estate
          and investment properties. Michael's extensive experience and deep understanding of the market allow him
          to navigate even the most complex transactions with ease.</p>
        <p class="mb-2"><span class="fw-medium text-dark">Agency</span><span class="mx-2">:</span>Universo
          Realtors</p>
        <p class="mb-2"><span class="fw-medium text-dark">Agent License</span><span
            class="mx-2">:</span>LC-5758-2048-3944</p>
        <p class="mb-2"><span class="fw-medium text-dark">Text Number</span><span class="mx-2">:</span>TC-9275-PC-55685
        </p>
        <p class="mb-2"><span class="fw-medium text-dark">Services Area</span><span class="mx-2">:</span>Lincoln
          Drive Harrisburg</p>
        <div class="my-2">
          <a href="#!" class="link-primary fw-medium">Viw More <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
      <div class="mt-4">
        <b-card-title class="mb-3">Property Status :</b-card-title>
        <b-row class="g-2">
          <b-col xl="4" lg="6" v-for="(item, idx) in propertyStatus" :key="idx">
            <b-card no-body class="mb-0 shadow-none border">
              <b-card-body>
                <b-row class="justify-content-between align-items-center">
                  <b-col xl="5">
                    <div class="avatar bg-primary bg-opacity-10 rounded mb-3">
                      <div class="avatar-title">
                        <Icon :icon="item.icon" class="fs-28 text-primary" />
                      </div>
                    </div>
                    <p class="fw-medium fs-15 mb-1">{{ item.title }}</p>
                    <p class="mb-0 fw-semibold text-dark fs-20">{{ item.statistic }}</p>
                  </b-col>
                  <b-col lg="6">
                    <ApexChart :chart="item.chartOption" id="property_sale" class="apex-charts" />
                  </b-col>
                </b-row>
              </b-card-body>
            </b-card>
          </b-col>
        </b-row>
      </div>
      <div class="mt-4">
        <b-card-title class="mb-3">Reviews :</b-card-title>
        <b-row>
          <b-col lg="6">
            <b-card no-body class="bg-light-subtle mb-0">
              <b-card-body>
                <div class="d-flex align-items-center gap-2">
                  <img :src="avatar3" alt="" class="rounded-circle avatar-md">
                  <div>
                    <h5 class="fw-semibold text-dark mb-1">Esther Howard</h5>
                    <p class="m-0">@kasyrhh <span class="ms-1">(U.S.A)</span></p>

                  </div>
                </div>
                <p class="my-3">"The team at agent went above and beyond to
                  understand my needs and tailor their solutions to fit my business
                  requirements Not only did they exceed our expectations "</p>
                <ul class="d-flex text-warning m-0 fs-18  list-unstyled">
                  <li>
                    <i class="ri-star-fill"></i>
                  </li>
                  <li>
                    <i class="ri-star-fill"></i>
                  </li>
                  <li>
                    <i class="ri-star-fill"></i>
                  </li>
                  <li>
                    <i class="ri-star-fill"></i>
                  </li>
                  <li>
                    <i class="ri-star-half-line"></i>
                  </li>
                </ul>
                <p class="fw-medium text-muted mb-0">3 Days Ago</p>

              </b-card-body>
            </b-card>
          </b-col>
          <b-col lg="6">
            <b-card no-body class="bg-light-subtle mb-0">
              <b-card-body>
                <div class="d-flex align-items-center gap-2">
                  <img :src="avatar4" alt="" class="rounded-circle avatar-md">
                  <div>
                    <h5 class="fw-semibold text-dark mb-1">Elbart Bant</h5>
                    <p class="m-0">@ryejghf <span class="ms-1">(Canada)</span></p>

                  </div>
                </div>
                <p class="my-3">"The agent team exceeded expectations in my needs and customizing their solutions
                  to perfectly align with my business requirements game-changer for our business."</p>
                <ul class="d-flex text-warning m-0 fs-18  list-unstyled">
                  <li>
                    <i class="ri-star-fill"></i>
                  </li>
                  <li>
                    <i class="ri-star-fill"></i>
                  </li>
                  <li>
                    <i class="ri-star-fill"></i>
                  </li>
                  <li>
                    <i class="ri-star-fill"></i>
                  </li>
                  <li>
                    <i class="ri-star-half-line"></i>
                  </li>
                </ul>
                <p class="fw-medium text-muted mb-0">15 Days Ago</p>

              </b-card-body>
            </b-card>
          </b-col>
        </b-row>
      </div>
      <b-card-title class="mt-4">Property File :</b-card-title>
      <div class="mt-3 d-flex flex-wrap gap-2">
        <div class="d-flex p-2 gap-2 bg-light-subtle align-items-center text-start position-relative border rounded"
          v-for="(item, idx) in propertyFile" :key="idx">
          <Icon :icon="item.icon" :class="`text-${item.variant} fs-24`" />
          <div>
            <h4 class="fs-14 mb-1"><a href="#!" class="text-dark stretched-link">{{ item.name }}</a></h4>
            <p class="fs-12 mb-0">{{ item.size }} MB</p>
          </div>
          <i class="ri-download-cloud-line fs-20 text-muted" />
        </div>
      </div>
    </b-card-body>
  </b-card>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";

import { propertyFile, propertyStatus } from "@/views/agents/[id]/components/data";
import { socialMediaLink } from "@/helpers/social-link";

import avatar2 from '@/assets/images/users/avatar-2.jpg';
import avatar3 from '@/assets/images/users/avatar-3.jpg';
import avatar4 from '@/assets/images/users/avatar-4.jpg';
</script>