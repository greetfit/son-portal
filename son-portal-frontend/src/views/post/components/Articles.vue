<template>
  <b-card no-body>
    <b-card-body>
      <div v-for="(article,idx) in articleData" :key="idx" class="border-bottom" :class="idx==0?'pb-3':'py-3'">
        <span class="text-dark">
          <a href="#" class="text-dark fs-18 fw-medium">{{ article.title }}</a>
        </span>
        <div class="mb-2 mt-1">

          <span v-for="(tag) in article.tags" :class="`badge px-2 py-1 bg-${tag == 'Tutorials' ? 'success' : tag == 'Blog' ? 'danger' : 'primary'}-subtle text-${tag == 'Tutorials' ? 'success' : tag == 'Blog' ? 'danger' : 'primary'} ms-1`">
            {{ tag }}
          </span>

        </div>
        <p class="mt-2 text-muted">{{ article.description }}</p>
        <div class="d-flex align-items-center gap-1">
          <div class="position-relative">
            <img :src="article.image" alt="" class="avatar rounded-circle flex-shrink-0">
          </div>
          <div class="d-block ms-2 flex-grow-1">
            <span class="text-dark">
              <a href="#" class="text-dark fw-medium">{{ article.name }}</a>
            </span>
            <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> {{
                article.date.toLocaleDateString('en-us', {
                  month: 'short',
                  day: '2-digit',
                  year: 'numeric'
                })
              }}</p>
          </div>
          <div class="ms-auto">
            <span class="">
              <button type="button"
                      class="btn btn-soft-danger avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded-circle p-0">
                <Icon icon="solar:heart-broken"/></button>
            </span>
          </div>
        </div>
      </div>

      <div class="pt-3">
        <span class="text-dark">
          <a href="#" class="text-dark fs-18 fw-medium">The Future of Smart Homes: Technology Trends in Real Estate</a>
          <span
              class="badge px-2 py-1 bg-danger-subtle text-danger ms-1">Blog</span>
          <span
              class="badge px-2 py-1 bg-warning-subtle text-warning ms-1">News</span>
        </span>
        <div class="row my-2 align-items-center">
          <div class="col-lg-3">
            <img alt="" :src="small3" class="rounded-3 img-fluid">
          </div>
          <div class="col-lg-9">
            <p class="my-2 text-muted">The concept of smart homes has evolved rapidly over the past few years,
              driven by advancements in technology and an increasing demand for convenience, security, and energy
              efficiency. </p>
            <p class="mb-3 text-muted"><span class="text-dark fw-semibold mb-0">Seamless Integration : </span>The
              Internet of Things (IoT) is the backbone of smart home technology, enabling devices and systems to
              communicate and work together seamlessly. In the future, the integration of IoT will become more
              sophisticated.</p>
            <a href="#" class="link-primary">View More</a>
          </div>
        </div>
        <div class="d-flex align-items-center gap-1 mt-2 pt-1">
          <div class="position-relative">
            <img :src="avatar8" alt="" class="avatar rounded-circle flex-shrink-0">
          </div>
          <div class="d-block ms-2 flex-grow-1">
            <span class="text-dark">
              <a href="#"
                 class="text-dark fw-medium">Gabriela E. Phelps</a>
            </span>
            <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> March 14, 2023</p>
          </div>
          <div class="ms-auto">
            <span class="">
              <button type="button" class="btn btn-soft-danger avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded-circle p-0">
                <Icon icon="solar:heart-broken"/></button>
            </span>
          </div>
        </div>
      </div>
    </b-card-body>
  </b-card>
</template>

<script setup lang="ts">
import {Icon} from "@iconify/vue";
import small3 from "@/assets/images/small/img-3.jpg"
import avatar8 from "@/assets/images/users/avatar-8.jpg"
import {articleData} from "@/views/post/components/data";
</script>