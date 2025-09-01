<template>
  <b-card no-body>
    <b-card-header>
      <b-card-title tag="h4">Fresh Articles, News & Updates</b-card-title>
    </b-card-header>
    <b-card-body>
      <img :src="properties16" alt="" class="rounded-3 img-fluid">
      <div class="mt-3">
        <span class="">
          <a href="#!" class="text-dark fs-18 fw-medium">The Pros and Cons of Urban vs. Suburban Living: Finding the Right Fit for Your Lifestyle</a>
          <span class="badge px-2 py-1 bg-primary-subtle text-primary ms-1">Homes</span>
          <span class="badge px-2 py-1 bg-danger-subtle text-danger ms-1">Blog</span>
        </span>
        <p class="mt-2 text-muted">Deciding where to live is a major life choice that can significantly impact
          your lifestyle, finances, and overall happiness. One of the most common dilemmas people face is choosing
          between urban and suburban living. Both options offer unique benefits and challenges, and the right
          choice often depends on your personal preferences... <a href="#!" class="link-primary fw-medium">Read More</a></p>
        <div class="d-flex align-items-center gap-1">
          <div class="position-relative">
            <img :src="avatar2" alt="" class="avatar rounded-circle flex-shrink-0">
          </div>
          <div class="d-block ms-2 flex-grow-1">
            <span class="text-dark">
              <a href="#!" class="text-dark fw-medium">David D. McGlynn</a>
            </span>
            <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> April 18, 2023</p>
          </div>
          <div class="ms-auto">
            <span class="">
              <button type="button" class="btn btn-soft-danger avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded-circle p-0">
                <Icon icon="solar:heart-broken"/>
              </button>
            </span>
          </div>
        </div>
      </div>
    </b-card-body>
  </b-card>
</template>

<script setup lang="ts">
import properties16 from "@/assets/images/properties/p-16.jpg"
import avatar2 from "@/assets/images/users/avatar-2.jpg"
import {Icon} from "@iconify/vue";
</script>
