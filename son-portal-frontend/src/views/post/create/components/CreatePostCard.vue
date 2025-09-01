<template>
  <b-card no-body>
    <b-card-body>
      <div class="position-relative">
        <img :src="blogImg" alt="" class="img-fluid rounded bg-light">
        <span class="position-absolute top-0 end-0 p-1">
          <b-badge variant="danger" class="text-light fs-13">Blog</b-badge>
        </span>
      </div>
      <div class="mt-3">
        <h4 class="lh-base">Essential Home Staging Tips: How to Showcase Your Property for Maximum Buyer
          Appeal</h4>
        <p class="mb-0">Home staging is a crucial step in the selling process that involves preparing your home to
          appeal to a wide range of potential buyers.</p>
      </div>
      <div class="d-flex align-items-center gap-1 mt-3">
        <div class="position-relative">
          <img :src="avatar6" alt="" class="avatar rounded-circle flex-shrink-0">
        </div>
        <div class="d-block ms-2 flex-grow-1">
            <span class="">
                 <a href="#" class="text-dark fw-medium">Danial D. Mitzel</a>
            </span>
          <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> Jun 6, 2023</p>
        </div>
        <div class="ms-auto">
          <span class="">
               <button type="button"
                       class="btn btn-soft-danger avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded-circle p-0">
                 <Icon
                     icon="solar:heart-broken"/></button>
          </span>
        </div>
      </div>
    </b-card-body>
    <b-card-footer class="bg-light-subtle">
      <b-row class="g-2">
        <b-col lg="6">
          <a href="#" class="btn btn-outline-primary w-100">Create Blog</a>
        </b-col>
        <b-col lg="6">
          <a href="#" class="btn btn-danger w-100">Cancel</a>
        </b-col>
      </b-row>
    </b-card-footer>

  </b-card>
</template>

<script setup lang="ts">
import blogImg from '@/assets/images/blog/blog.jpg'
import avatar6 from '@/assets/images/users/avatar-6.jpg'
import {Icon} from "@iconify/vue";
</script>
