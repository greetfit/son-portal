<template>
  <VerticalLayout>
    <PageTitle title="Blog Details" subtitle="Blog" />

    <b-row>
      <b-col lg="8">
        <b-card no-body>
          <b-card-body>
            <div class="position-relative">
              <img :src="blog" alt="" class="img-fluid rounded">
            </div>
            <div class="d-flex align-items-center gap-1 my-3">
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
                      <a href="javascript: void(0);" class="dropdown-toggle arrow-none text-dark"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-more-2-fill"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript: void(0);"><i class="ri-user-6-line me-2"></i>View Profile</a>
                        <a class="dropdown-item" href="javascript: void(0);"><i class="ri-music-2-line me-2"></i>Media, Links and Docs</a>
                        <a class="dropdown-item" href="javascript: void(0);"><i class="ri-search-2-line me-2"></i>Search</a>
                        <a class="dropdown-item" href="javascript: void(0);"><i class="ri-image-line me-2"></i>Wallpaper</a>
                        <a class="dropdown-item" href="javascript: void(0);"><i class="ri-arrow-right-circle-line me-2"></i>More</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="d-flex gap-2 flex-wrap my-2">
              <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Home</b-badge>
              <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Tutorials</b-badge>
              <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Blog</b-badge>
              <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Real Estate</b-badge>
              <b-badge variant="light" class="text-dark px-2 py-1 fs-12">Business</b-badge>
            </div>
            <span class="text-dark d-inline-block mb-2 mt-1">
              <a href="#" class="text-dark fs-4 fw-medium">Essential Home Staging Tips: How to Showcase Your Property for Maximum Buyer Appeal</a>
            </span>
            <p class="text-muted">Home staging is a crucial step in the selling process that involves preparing your
              home to appeal to a wide range of potential buyers. The goal is to highlight the property's best features
              and create a welcoming atmosphere that resonates with buyers' emotions. Here are essential home staging
              tips to help you showcase your property effectively:</p>
            <p class="mb-2 text-muted"><span class="text-dark fw-semibold mb-0">Declutter and Depersonalize :
              </span>Start
              by removing excess clutter and personal items such as family photos and personal memorabilia. This helps
              buyers envision themselves living in the space and allows them to focus on the home's features.</p>
            <p class="mb-2 text-muted"><span class="text-dark fw-semibold mb-0">Enhance Curb Appeal : </span>Improve the
              exterior of your home to create a positive first impression. This includes landscaping, cleaning the
              driveway and walkways, and adding inviting elements like potted plants or a fresh coat of paint to the
              front door.</p>
            <div class="border-start border-primary border-2 p-3 bg-primary bg-opacity-10 rounded mt-3">
              <h5>We Are Best</h5>
              <p class="mb-0">A business consulting agency is involved in the planning, implementation, and education of
                businesses. We work directly</p>
            </div>
            <div class="d-flex bg-light border border-dashed gap-3 rounded my-4 p-3">
              <a href="#" class="d-flex align-items-center fs-16 text-dark">
                <Icon icon="solar:like-bold-duotone" class="me-1" />
                3,422
              </a>
              <a href="#" class="d-flex align-items-center fs-16 text-dark">
                <Icon icon="solar:eye-bold" class="me-1" />
                4,565
              </a>
              <a href="#" class="d-flex align-items-center fs-16 text-dark">
                <Icon icon="solar:chat-square-call-bold" class="me-1" />
                356
              </a>
            </div>

            <h4 class="card-title">Post Comments</h4>
            <textarea class="form-control my-3" rows="5" placeholder="Write Comment ......"></textarea>
            <div class="d-flex justify-content-end">
              <a href="#" class="btn btn-primary">Post Comment</a>
            </div>
            <h4 class="card-title d-flex align-items-center mt-3">
              <Icon icon="solar:chat-square-like-outline" class="me-1" />
              Comment
            </h4>
            <Comments />
          </b-card-body>
        </b-card>
      </b-col>
      <div class="col-lg-4 col-md-6">
        <Blogs />
        <PhotoCard />
      </div>
    </b-row>

  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import PageTitle from "@/components/PageTitle.vue";
import { useRoute } from 'vue-router';
import { Icon } from "@iconify/vue";

import blog from "@/assets/images/blog/blog.jpg";
import avatar6 from "@/assets/images/users/avatar-6.jpg";
import Comments from "@/views/post/[id]/components/Comments.vue";
import PhotoCard from "@/views/post/[id]/components/PhotoCard.vue";
import Blogs from "@/views/post/[id]/components/Blogs.vue";

const route = useRoute();
</script>
