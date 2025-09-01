<template>
  <div class="border-start border-light border-end h-100">
    <b-card-body>

      <div class="d-flex justify-content-between align-items-center gap-2">
        <button class="btn p-0 d-lg-none d-flex" v-b-toggle.inbox-mail>
          <i class='ri-expand-right-line fs-22'></i>
        </button>
        <h5 class="mb-0 text-dark d-flex align-items-center gap-1">
          <Icon icon="solar:inbox-bold-duotone" class="align-middle"/>
          Inbox Mail
        </h5>
        <DropDown>
          <a href="javascript: void(0);" class="dropdown-toggle arrow-none text-dark"
             data-bs-toggle="dropdown" aria-expanded="false">
            <i class="ri-more-2-fill fs-18"></i>
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
      </div>
      <div class="d-flex justify-content-between mt-3">
        <form class="app-search d-none d-md-block w-100">
          <div class="position-relative">
            <input type="search" class="form-control" placeholder="Search" autocomplete="off" value="">
            <Icon icon="solar:magnifer-broken" class="search-widget-icon"/>
          </div>
        </form>
      </div>
    </b-card-body>

    <div class="border-top border-light overflow-hidden">
      <simplebar style="max-height: calc(100vh - 301px)">

        <ul class="list-unstyled email-list-group mb-0">

          <li v-for="(item,idx) in messages" :key="idx" class="">
            <div class="d-flex flex-column h-100 border-bottom">
              <a href="#" class="d-block">
                <div class="mail-select d-flex align-items-center p-3 m-1 rounded" :class="item.isActive && 'selected'">
                  <div class="position-relative">
                    <img :src="item.image" alt=""
                         class="avatar rounded-circle flex-shrink-0">
                  </div>
                  <div class="d-block ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <h5 class="mb-0" :class="item.isActive && 'text-white'">{{ item.name }}</h5>
                      <div>
                        <p class="fs-13 mb-0" :class="item.isActive ? 'text-white' : 'text-muted'">{{ item.time }}</p>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="mb-0 d-flex align-items-center gap-1"
                         :class="item.isActive ? 'text-white' : 'text-muted'">
                        {{ item.message }}</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </li>

          <li>
            <div class="d-flex justify-content-center my-2">
              <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </li>

        </ul>
      </simplebar>
    </div>
  </div>
</template>

<script lang="ts" setup>
import {Icon} from "@iconify/vue";
import simplebar from 'simplebar-vue';
import {messages} from "@/views/inbox/components/data";
import DropDown from "@/components/DropDown.vue";

</script>