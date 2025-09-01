<template>
  <b-card no-body>
    <b-card-body>
      <b-form class="app-search d-none d-md-block me-auto">
        <div class="position-relative">
          <input type="search" class="form-control" placeholder="Search" autocomplete="off" value="">
          <Icon icon="solar:magnifer-broken" class="search-widget-icon"/>
        </div>
      </b-form>
      <div>
        <div class="mt-4 border-bottom border-dashed pb-2">
          <h4 class="card-title">Categories</h4>
        </div>
        <div class="my-3 ms-2">
          <div class="form-check mb-2">
            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label text-dark ms-2" for="flexCheckDefault">Fashion</label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckChecked1">
            <label class="form-check-label text-dark ms-2" for="flexCheckChecked1">Business</label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckChecked2">
            <label class="form-check-label text-dark ms-2" for="flexCheckChecked2">Health</label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckChecked3">
            <label class="form-check-label text-dark ms-2" for="flexCheckChecked3">Computer Software</label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckChecked4">
            <label class="form-check-label text-dark ms-2" for="flexCheckChecked4">Lifestyle blogs</label>
          </div>
        </div>
      </div>

      <div class="mt-4">
        <div class="border-bottom border-dashed pb-2">
          <h4 class="card-title">Popular Post</h4>
        </div>
        <ul class="list-unstyled my-3">
          <li v-for="(item,idx) in blogData" :key="idx" class="mb-3 pb-3 border-bottom">
            <b-row>
              <b-col lg="4">
                <a class="me-3" href="#"><img :src="item.image" alt=""
                                              class="img-fluid rounded"></a>
              </b-col>
              <div class="col-lg-8">
                <a href="#" class="text-dark fw-medium fs-15">{{ item.title }}</a>
                <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> {{
                    item.date.toLocaleString('en-us', {
                      month: 'short', day: '2-digit', year: 'numeric'
                    })
                  }}</p>

              </div>
            </b-row>
          </li>
        </ul>
      </div>

      <div class="mt-4">
        <div class="border-bottom border-dashed pb-2">
          <h4 class="card-title">Text Widget</h4>
        </div>
        <p class="mt-3 text-muted">
          Our blog delivers valuable content designed to help you excel in your role. Explore our articles,
          interviews, and expert commentary to gain valuable insights, expand your knowledge, and stay ahead of
          the curve. Whether you're seeking practical tips, strategic advice, or inspiration for your career,
          Admin Nexus is here to support your journey to success.
        </p>
      </div>

      <div class="mt-4">
        <div class="border-bottom border-dashed pb-2">
          <h4 class="card-title">Tags</h4>
        </div>
        <div class="d-flex gap-2 flex-wrap mt-3">
          <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Home</b-badge>
          <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Tutorials</b-badge>
          <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Blog</b-badge>
          <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Real Estate</b-badge>
          <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Business</b-badge>
        </div>
      </div>

    </b-card-body>
  </b-card>
</template>

<script setup lang="ts">
import {Icon} from "@iconify/vue";
import {blogData} from "@/views/post/[id]/components/data";
</script>
