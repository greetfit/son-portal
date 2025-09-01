<template>
  <header>
    <div class="topbar">
      <b-container fluid>
        <div class="navbar-header">
          <div class="d-flex align-items-center gap-2">
            <!-- Menu Toggle Button -->
            <div class="topbar-item">
              <button type="button" class="button-toggle-menu topbar-button" @click="toggleLeftSideBar">
                <i class="ri-menu-2-line fs-24"></i>
              </button>
            </div>

            <!-- App Search-->
            <form class="app-search d-none d-md-block me-auto">
              <div class="position-relative">
                <input type="search" class="form-control" placeholder="Search..." autocomplete="off" value="">
                <i class="ri-search-line search-widget-icon"></i>
              </div>
            </form>
          </div>

          <div class="d-flex align-items-center gap-1">
            <!-- Theme Color (Light/Dark) -->
            <div class="topbar-item">
              <button type="button" class="topbar-button" id="light-dark-mode" @click="toggleTheme">
                <i class="ri-moon-line fs-24 light-mode"></i>
                <i class="ri-sun-line fs-24 dark-mode"></i>
              </button>
            </div>

            <!-- Category -->
            <div class="dropdown topbar-item d-none d-lg-flex">
              <button type="button" class="topbar-button" data-toggle="fullscreen" @click="toggleFullScreen">
                <i class="ri-fullscreen-line fs-24 fullscreen"></i>
                <i class="ri-fullscreen-exit-line fs-24 quit-fullscreen"></i>
              </button>
            </div>

            <!-- Notification -->
            <DropDown class="topbar-item">
              <button type="button" class="topbar-button position-relative" id="page-header-notifications-dropdown"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ri-notification-3-line fs-24"></i>
                <span class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill">3<span
                    class="visually-hidden">unread messages</span></span>
              </button>
              <div class="dropdown-menu py-0 dropdown-lg dropdown-menu-end"
                   aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                  <b-row class="align-items-center">
                    <div class="col">
                      <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                    </div>
                    <div class="col-auto">
                      <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                        <small>Clear All</small>
                      </a>
                    </div>
                  </b-row>
                </div>
                <simplebar data-simplebar style="max-height: 280px;">
                  <a v-for="(item, idx) in notifications" :key="idx" href="javascript:void(0);"
                     class="dropdown-item py-3 border-bottom text-wrap">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img v-if="item.user?.avatar" :src="item.user.avatar"
                             class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-1"/>

                        <div v-else-if="item.icon" class="avatar-sm me-2">
                        <span class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle">
                          <Icon :icon="item.icon"/>
                        </span>
                        </div>

                        <div v-else class="avatar-sm me-2">
                        <span class="avatar-title bg-soft-info text-info fs-20 rounded-circle">
                          {{ item.user?.name?.slice(0, 1) }}
                        </span>
                        </div>
                      </div>

                      <div class="flex-grow-1">
                        <p v-if="item.user?.name" class="mb-0 fw-semibold">
                          {{ item.user.name }}
                        </p>

                        <p v-if="item.title" class="mb-0 fw-semibold text-wrap">
                          {{ item.title }}
                        </p>

                        <p v-if="item.message" class="mb-0 text-wrap">
                          {{ item.message }}
                        </p>
                        <p v-if="item.content" class="mb-0 text-wrap">
                          {{ item.content }}
                        </p>
                      </div>
                    </div>
                  </a>
                </simplebar>
                <div class="text-center py-3">
                  <a href="javascript:void(0);" class="btn btn-primary btn-sm">View All Notification <i
                      class="ri-arrow-right-line ms-1"></i></a>
                </div>
              </div>
            </DropDown>

            <!-- Theme Setting -->
            <div class="topbar-item d-none d-md-flex">
              <button type="button" class="topbar-button" id="theme-settings-btn" v-b-toggle="'theme-settings'">
                <i class="ri-settings-4-line fs-24"></i>
              </button>
            </div>

            <!-- User -->
            <DropDown class="topbar-item">
              <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
              <span class="d-flex align-items-center">
                <img class="rounded-circle" width="32" :src="avatar1" alt="avatar-1">
              </span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <h6 class="dropdown-header">Welcome Gaston!</h6>

                <router-link class="dropdown-item" :to="{ name: item.route?.name }"
                             v-for="(item, idx) in profileMenuItems" :key="idx">
                  <Icon v-if="item.icon" :icon="item.icon" class="align-middle me-2 fs-18"></Icon>
                  <span class="align-middle">{{
                      item.label
                    }}</span>
                </router-link>

                <div class="dropdown-divider my-1"></div>

                <router-link class="dropdown-item text-danger" to="">
                  <Icon icon="solar:logout-3-broken" class="align-middle me-2 fs-18"/>
                  <span class="align-middle">Logout</span>
                </router-link>
              </div>
            </DropDown>
          </div>
        </div>
      </b-container>
    </div>
  </header>
</template>

<script setup lang="ts">
import {Icon} from "@iconify/vue";
import simplebar from 'simplebar-vue'
import {onMounted} from 'vue';
import {useLayoutStore} from '@/stores/layout';
import {toggleDocumentAttribute} from "@/helpers";
import DropDown from "@/components/DropDown.vue";
import avatar1 from "@/assets/images/users/avatar-1.jpg";
import {notifications, profileMenuItems} from "@/layouts/partials/data";


const toggleFullScreen = () => {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen()
    document.body.classList.add('fullscreen-enable')
  } else if (document.exitFullscreen) {
    document.exitFullscreen()
    document.body.classList.remove('fullscreen-enable')
  }
}

const useLayout = useLayoutStore();

const toggleTheme = () => {
  if (useLayout.layout.theme === 'light') {
    return useLayout.setTheme('dark');
  }
  useLayout.setTheme('light');
};

const toggleLeftSideBar = () => {
  if (useLayout.layout.leftSideBarSize === 'default') {
    return useLayout.setLeftSideBarSize('condensed');
  }
  if (useLayout.layout.leftSideBarSize === 'condensed') {
    return useLayout.setLeftSideBarSize('default');
  }
  toggleDocumentAttribute('class', 'sidebar-enable');
  showBackdrop();
};

const showBackdrop = () => {
  let backdrop = document.createElement('div') as HTMLDivElement;
  if (backdrop) {
    backdrop.classList.add('offcanvas-backdrop', 'fade', 'show');
    document.body.appendChild(backdrop);
    document.body.style.overflow = 'hidden';
    if (window.innerWidth > 1040) {
      document.body.style.paddingRight = '15px';
    }

    backdrop.addEventListener('click', function (e) {
      toggleDocumentAttribute('class', '');
      document.body.removeChild(backdrop);
      document.body.style.overflow = '';
      document.body.style.paddingRight = '';
    });
  }
};

onMounted(() => {
  useLayout.init();
});
</script>
