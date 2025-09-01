<template>
  <div class="position-relative">
    <b-card-header
        class="border-bottom bg-light-subtle d-flex align-items-center justify-content-between gap-2">
      <b-button size="sm" class="btn-icon btn-soft-primary d-xl-none d-flex align-items-center px-2"
                v-b-toggle.navigation-menu>
        <i class='ri-menu-line fs-18'></i>
      </b-button>

      <b-form class="app-search d-none d-md-block w-50 me-auto">
        <div class="position-relative">
          <b-form-input type="search" placeholder="Search In Mails" autocomplete="off" value=""/>
          <Icon icon="solar:magnifer-broken" class="search-widget-icon"/>
        </div>
      </b-form>

      <div>
        <ul class="list-inline d-flex gap-1 mb-0 align-items-center">

          <li class="list-inline-item">
            <a href="#"
               class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-warning fs-20 p-0">
              <Icon icon="solar:star-bold-duotone"/>
            </a>
          </li>

          <DropDown is="li" class="list-inline-item d-none d-md-flex">
            <a href="javascript: void(0);"
               class="dropdown-toggle btn btn-light avatar-sm d-flex align-items-center justify-content-center fs-20 arrow-none text-dark fs-20"
               data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ri-more-2-fill"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="javascript: void(0);"><i class="ri-user-line me-2"></i>View Profile</a>
              <a class="dropdown-item" href="javascript: void(0);"><i class="ri-music-2-line me-2"></i>Media,
                Links and Docs</a>
              <a class="dropdown-item" href="javascript: void(0);"><i class="ri-search-line me-2"></i>Search</a>
              <a class="dropdown-item" href="javascript: void(0);"><i
                  class="ri-image-line me-2"></i>Wallpaper</a>
              <a class="dropdown-item" href="javascript: void(0);"><i
                  class="ri-arrow-right-circle-line me-2"></i>More</a>
            </div>
          </DropDown>
          <li class="list-inline-item">
            <a href="javascript: void(0);" class="btn btn-primary d-flex align-items-center gap-1">
              <Icon icon="solar:stopwatch-play-broken" class="fs-18"/>
              Snoozed</a>
          </li>
        </ul>
      </div>

      <b-button size="sm" class="btn-icon btn-soft-primary d-xl-none d-flex align-items-center px-2"
                v-b-toggle.inbox-mail>
        <i class='ri-menu-unfold-line fs-18'></i>
      </b-button>
    </b-card-header>

    <simplebar class="card-body" style="height: calc(100vh - 442px)">

      <div class="d-flex flex-column h-100">
        <div class="d-block">
          <div class="d-flex rounded gap-2">
            <div class="position-relative ">
              <img :src="avatar3" alt="" class="avatar rounded-circle flex-shrink-0">
            </div>
            <div class="d-block flex-grow-1">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div>
                  <a href="#" class="text-dark fw-medium fs-15">diannablair46skl@dayrep.com</a>
                  <p class="mb-0 text-muted d-flex align-items-center gap-1">to hello@dundermuffilin.com</p>
                </div>
                <div>
                  <p class="text-muted fs-13 mb-0">Mon , 1 Apr , 23.12</p>
                </div>
              </div>
              <div class="mt-4">
                <h4>
                  Documentation of last meeting
                </h4>
                <p class="text-dark mt-3">Hey : <span class="badge bg-primary-subtle fs-13 text-primary p-1">@Gaston Lapierre</span>
                </p>
                <p>Thank you all for your hard work and dedication to this project. Your contributions are
                  invaluable, and I am confident that together we will achieve our goals successfully. After
                  reviewing the current progress and considering various factors, I would like to share some
                  observations and next steps.</p>
                <p>Additionally, I would like to remind everyone of our upcoming team meeting scheduled for this
                  week. During this meeting, we will discuss the revised timeline in detail and address any
                  concerns or questions you may have ...</p>

                <div class="my-4 bg-light rounded p-2">
                  <b-row class="g-2">
                    <b-col lg="3">
                      <a href="#">
                        <img :src="small1" alt="" class="img-fluid rounded">
                      </a>
                    </b-col>
                    <b-col lg="3">
                      <a href="#">
                        <img :src="small2" alt="" class="img-fluid rounded">
                      </a>
                    </b-col>
                    <b-col lg="3">
                      <a href="#">
                        <img :src="small3" alt="" class="img-fluid rounded">
                      </a>
                    </b-col>
                    <b-col lg="3">
                      <a href="#">
                        <img :src="small4" alt="" class="img-fluid rounded">
                      </a>
                    </b-col>
                  </b-row>
                  <div class="d-flex align-items-center gap-2 mt-3">
                    <img :src="avatar3" alt="" class="avatar-sm rounded-circle">
                    <a href="#" class="text-dark fw-medium">Dianna Blair</a>
                    <p class="mb-0">attached 4 photos</p>
                    <div class="ms-auto">
                      <a href="#" class="text-muted d-flex align-items-center gap-1">See Photo
                        <Icon icon="solar:eye-bold" class="align-middle"/>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="my-4">
                  <b-row class="align-items-center text-center g-2">
                    <b-col lg="2">
                      <div class="border p-2 rounded bg-light-subtle">
                        <Icon icon="solar:file-download-bold" class="fs-28 text-primary"/>
                        <p class="mb-0">
                          <a href="#" class="text-dark fw-medium">Project About..</a>
                        </p>
                      </div>
                    </b-col>
                    <b-col lg="2">
                      <div class="border p-2 rounded bg-light-subtle">
                        <Icon icon="solar:figma-file-bold" class="fs-28 text-success"/>
                        <p class="mb-0">
                          <a href="#" class="text-dark fw-medium">Photo Psd...</a>
                        </p>
                      </div>
                    </b-col>
                    <b-col lg="2">
                      <div class="border p-2 rounded bg-light-subtle">
                        <Icon icon="solar:checklist-minimalistic-bold"
                              class="fs-28 text-danger"/>
                        <p class="mb-0">
                          <a href="#" class="text-dark fw-medium">Price List...</a>
                        </p>
                      </div>
                    </b-col>
                    <div class="col-lg-4">
                      <a href="#" class="link-primary fw-medium d-flex align-items-center gap-1">Download All
                        File
                        <Icon icon="solar:download-bold"/>
                      </a>
                    </div>
                  </b-row>
                </div>
                <div class="mt-4">
                  <p>We'd like to thank you for being an exceptional author and encourage you to continue
                    creating great work!</p>
                  <p class="mb-1 mt-3">Best Regards ,</p>
                  <p class="mb-0 text-dark fw-medium">Dianna Blair</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </simplebar>

    <b-card-footer class="bg-light-subtle border-top w-100">
      <div class="d-flex gap-2">
        <img :src="avatar1" alt="" class="avatar rounded-circle">
        <div class="w-100">
          <p class="mb-2"><span class="text-dark fw-medium">To : </span>diannablair46skl@dayrep.com</p>
          <b-form-textarea id="property-address" :rows="3"
                           placeholder="Type Message...."/>
          <div class="d-flex flex-wrap justify-content-between mt-2 align-items-center">
            <div class="d-flex gap-3">
              <b-form>
                <label for="file" class="text-dark fs-18 fw-medium">
                  <Icon icon="solar:folder-with-files-broken"/>
                </label>
                <input type="file" id="file" class="d-none"/>
              </b-form>
              <b-form>
                <label for="photo" class="text-dark fs-18 fw-medium">
                  <Icon icon="solar:album-broken"/>
                </label>
                <input type="file" id="photo" class="d-none"/>
              </b-form>
              <a href="#" class="text-dark fs-18 fw-medium">
                <Icon icon="solar:pen-broken"/>
              </a>
              <a href="#" class="text-dark fs-18 fw-medium">
                <Icon icon="solar:link-broken"/>
              </a>
              <a href="#" class="text-dark fs-18 fw-medium">
                <Icon icon="solar:trash-bin-2-broken"/>
              </a>
            </div>
            <div>
              <a href="#" class="btn btn-primary">Send</a>
              <a href="javascript: void(0);" class="btn btn-outline-secondary ms-1">Forward</a>

            </div>
          </div>
        </div>
      </div>
    </b-card-footer>

  </div>
</template>

<script setup lang="ts">
import {Icon} from "@iconify/vue";
import DropDown from "@/components/DropDown.vue";
import simplebar from 'simplebar-vue';

import avatar1 from "@/assets/images/users/avatar-1.jpg"
import avatar3 from "@/assets/images/users/avatar-3.jpg"

import small1 from "@/assets/images/small/img-1.jpg"
import small2 from "@/assets/images/small/img-2.jpg"
import small3 from "@/assets/images/small/img-3.jpg"
import small4 from "@/assets/images/small/img-4.jpg"
</script>
