<template>
  <b-card no-body>
    <b-card-body>
      <div class="position-relative">
        <img :src="properties11" alt="" class="img-fluid rounded">
        <span class="position-absolute top-0 start-0 p-2">
          <span class="badge bg-warning text-light px-2 py-1 fs-13">For Sale</span>
        </span>
      </div>
      <div class="d-flex flex-wrap justify-content-between my-3 gap-2">
        <div>
          <a href="#!" class="fs-18 text-dark fw-medium">Hayfield Ashton Place Residences at Willow Brook
            Valley</a>
          <p class="d-flex align-items-center gap-1 mt-1 mb-0">
            <Icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary" />1668 Lincoln
            Drive Harrisburg, PA 17101 U.S.A
          </p>
        </div>
        <div>
          <ul class="list-inline float-end d-flex gap-1 mb-0 align-items-center">
            <li class="list-inline-item fs-20 dropdown">
              <a href="javascript: void(0);"
                class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-dark fs-20 p-0"
                data-bs-toggle="modal" data-bs-target="#videocall">
                <Icon icon="solar:share-bold-duotone" />
              </a>
            </li>

            <li class="list-inline-item fs-20 dropdown">
              <a href="javascript: void(0);"
                class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-danger fs-20 p-0"
                data-bs-toggle="modal" data-bs-target="#voicecall">
                <Icon icon="solar:heart-angle-bold-duotone" />
              </a>
            </li>

            <li class="list-inline-item fs-20 dropdown">
              <a data-bs-toggle="offcanvas" href="#user-profile"
                class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-warning fs-20 p-0">
                <Icon icon="solar:star-bold-duotone" />
              </a>
            </li>

            <li class="list-inline-item fs-20 dropdown d-none d-md-flex">
              <a href="javascript: void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="ri-more-2-fill"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript: void(0);"><i class="ri-user-6-line me-2"></i>View
                  Profile</a>
                <a class="dropdown-item" href="javascript: void(0);"><i class="ri-music-2-line me-2"></i>Media,
                  Links and Docs</a>
                <a class="dropdown-item" href="javascript: void(0);"><i class="ri-search-2-line me-2"></i>Search</a>
                <a class="dropdown-item" href="javascript: void(0);"><i class="ri-image-line me-2"></i>Wallpaper</a>
                <a class="dropdown-item" href="javascript: void(0);"><i
                    class="ri-arrow-right-circle-line me-2"></i>More</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="d-flex align-items-center gap-2">
        <div class="avatar-sm bg-success-subtle rounded">
          <div class="avatar-title">
            <Icon icon="solar:wallet-money-bold-duotone" class="fs-24 text-success" />
          </div>
        </div>
        <p class="fw-medium text-dark fs-18 mb-0">{{ currency }}80,675.00 </p>
      </div>
      <div class="bg-light-subtle p-2 mt-3 rounded border border-dashed">
        <b-row class="align-items-center text-center g-2">
          <b-col xl="2" lg="3" md="6" cols="6" class="border-end">
            <p class="text-muted mb-0 fs-15 fw-medium d-flex align-items-center justify-content-center gap-1">
              <Icon icon="solar:bed-broken" class="fs-18 text-primary" /> 5 Bedroom
            </p>
          </b-col>
          <b-col xl="2" lg="3" md="6" cols="6" class="border-end">
            <p class="text-muted mb-0 fs-15 fw-medium d-flex align-items-center justify-content-center gap-1">
              <Icon icon="solar:bath-broken" class="fs-18 text-primary" /> 4 Bathrooms
            </p>
          </b-col>
          <b-col xl="2" lg="3" md="6" cols="6" class="border-end">
            <p class="text-muted mb-0 fs-15 fw-medium d-flex align-items-center justify-content-center gap-1">
              <Icon icon="solar:scale-broken" class="fs-18 text-primary" /> 1800sqft
            </p>
          </b-col>
          <b-col xl="2" lg="3" md="6" cols="6" class="border-end">
            <p class="text-muted mb-0 fs-15 fw-medium d-flex align-items-center justify-content-center gap-1">
              <Icon icon="solar:double-alt-arrow-up-broken" class="fs-18 text-primary" /> 3
              Floor
            </p>
          </b-col>
          <b-col xl="2" lg="3" md="6" cols="6" class="border-end">
            <p class="text-muted mb-0 fs-15 fw-medium d-flex align-items-center justify-content-center gap-1">
              <span class="badge p-1 bg-light fs-12 text-dark"><i
                  class="ri-star-fill align-text-top fs-14 text-warning me-1"></i> 4.4</span> Review

            </p>
          </b-col>
          <b-col xl="2" lg="3" md="6" cols="6">
            <p class="text-muted mb-0 fs-15 fw-medium d-flex align-items-center justify-content-center gap-1">
              <Icon icon="solar:check-circle-broken" class="fs-18 text-primary" /> For Sale
            </p>
          </b-col>
        </b-row>
      </div>
      <h5 class="text-dark fw-medium mt-3">Some Facility :</h5>
      <div class="d-flex flex-wrap align-items-center gap-2 mt-3">
        <span class="badge bg-light-subtle text-muted border fw-medium fs-13 px-2 py-1">Big Swimming pool </span>
        <span class="badge bg-light-subtle text-muted border fw-medium fs-13 px-2 py-1">Near Airport </span>
        <span class="badge bg-light-subtle text-muted border fw-medium fs-13 px-2 py-1">Big Size Garden </span>
        <span class="badge bg-light-subtle text-muted border fw-medium fs-13 px-2 py-1">4 Car Parking </span>
        <span class="badge bg-light-subtle text-muted border fw-medium fs-13 px-2 py-1">24/7 Electricity </span>
        <span class="badge bg-light-subtle text-muted border fw-medium fs-13 px-2 py-1">Personal Theater </span>

      </div>
      <h5 class="text-dark fw-medium mt-3">Property Details :</h5>
      <p class="mt-2">Property refers to any item that an individual or a business holds legal title to. This can
        include tangible items, such as houses, cars, or appliances, as well as intangible items that hold
        potential future value, such as stock and bond certificates. Legally, property is classified into two
        categories: personal property and real property. This distinction originates from English common law, and
        our contemporary legal system continues to differentiate between these two types.</p>
      <div class="d-flex align-items-center justify-content-between">
        <a href="#!" class="link-primary fw-medium">View More Detail <i class="ri-arrow-right-line"></i></a>
        <div>
          <p class="mb-0 d-flex align-items-center gap-1">
            <Icon icon="solar:calendar-date-broken" class="fs-18 text-primary" /> 10 May 2024
          </p>
        </div>
      </div>
    </b-card-body>
  </b-card>
</template>
<script setup lang="ts">
import { currency } from "@/helpers/constants";
import { Icon } from "@iconify/vue";
import properties11 from "@/assets/images/properties/p-11.jpg";
</script>