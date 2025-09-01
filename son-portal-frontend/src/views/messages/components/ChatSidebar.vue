<template>
  <b-card no-body class="position-relative overflow-hidden">
    <b-card-header class="border-0 d-flex justify-content-between align-items-center gap-3">
      <b-form class="chat-search pb-0">
        <div class="chat-search-box">
          <b-form-input type="text" name="search" placeholder="Search ..." />
          <b-button variant="link" size="sm" type="submit" class="search-icon p-0 fs-15"><i
              class="ri-search-eye-line"></i></b-button>
        </div>
      </b-form>
      <a href="#" class="fs-20" v-b-toggle.settings>
        <i class="ri-settings-2-line"></i>
      </a>
    </b-card-header>
    <b-card-title tag="h4" class="mb-3 mx-3">Active</b-card-title>
    <Swiper class="mx-3" :autoHeight="true" :spaceBetween="8" :slidesPerView="4"
      :breakpoints="{ '768': { slidesPerView: 4 }, '1020': { slidesPerView: 6 } }">
      <SwiperSlide v-for="(item, idx) in onlineContacts" :key="idx" class="avatar">
        <a href="#" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="position-relative">
            <img :src="item" alt="" class="avatar rounded-circle flex-shrink-0">
            <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-light border-2 rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
          </div>
        </a>
      </SwiperSlide>
    </Swiper>

    <b-card-title tag="h4" class="m-3">Message
      <b-badge variant="danger" pill>5</b-badge>
    </b-card-title>
    <ul class="nav nav-pills chat-tab-pills nav-justified p-1 rounded mx-1">
      <li class="nav-item">
        <a class="nav-link" :class="contactTab === 'chat-list' && 'active'" @click="contactTab = 'chat-list'">
          Chat
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" :class="contactTab === 'group-list' && 'active'" @click="contactTab = 'group-list'">
          Group
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" :class="contactTab === 'contact-list' && 'active'" @click="contactTab = 'contact-list'">
          Contact
        </a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane" :class="contactTab === 'chat-list' && 'show active'" id="chat-list">

        <simplebar class="px-2 mb-3 chat-setting-height">

          <div v-for="(item, idx) in contactList" :key="idx" class="d-flex flex-column h-100"
            :class="idx != contactList.length - 1 && 'border-bottom'">
            <a href="#" class="d-block">
              <div class="d-flex align-items-center p-2" :class="item.isChatting && 'bg-light bg-opacity-75'">
                <div class="position-relative">
                  <img :src="item.image" alt="" class="avatar rounded-circle flex-shrink-0">

                  <span v-if="item.isActive"
                    class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <div class="d-block ms-3 flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="mb-0">{{ item.name }}</h5>
                    <div>
                      <p v-if="item.timeStamp" class="text-muted fs-13 mb-0">{{ item.timeStamp }}</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0 d-flex align-items-center gap-1 d-flex align-items-center gap-1"
                      :class="item.isChatting ? 'text-primary fst-italic' : 'text-muted'">
                      {{ item.lastMsg }}
                    </p>
                    <div>
                      <i v-if="item.seen" class='ri-check-double-line fs-18 text-primary'></i>
                      <i v-if="item.pinned" class='ri-pushpin-2-fill text-success'></i>
                      <b-badge variant="danger" pill v-if="item.unreadMsg">{{ item.unreadMsg }}</b-badge>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </simplebar>
      </div>

      <div class="tab-pane" :class="contactTab === 'group-list' && 'show active'" id="group-list">
        <simplebar class="px-2 mb-3 chat-setting-height">

          <div class="d-flex flex-column h-100  border-bottom">
            <a href="#" class="d-block">
              <div class="d-flex align-items-center bg-light bg-opacity-75 p-2 mb-1 rounded">
                <div class="position-relative">
                  <div class="avatar flex-shrink-0">
                    <span class="avatar-title bg-primary text-white fs-4 rounded-circle">
                      <i class='ri-group-line'></i>
                    </span>
                  </div>
                </div>
                <div class="d-block ms-3 flex-grow-1">
                  <h5 class="mb-0 fw-medium">Create New Group</h5>
                </div>
              </div>
            </a>
          </div>

          <div v-for="(item, idx) in groupContacts" :key="idx" class="d-flex flex-column h-100"
            :class="idx != groupContacts.length - 1 && 'border-bottom'">
            <a href="#" class="d-block">
              <div class="d-flex align-items-center p-2 rounded">
                <div class="position-relative">
                  <div class="avatar flex-shrink-0">
                    <span class="avatar-title bg-primary-subtle text-primary fw-medium fs-4 rounded-circle">
                      {{ getFirstCharacter(item.name) }}
                    </span>
                  </div>
                  <span
                    class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <div class="d-block ms-3 flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="mb-0">{{ item.name }}</h5>
                    <div>
                      <p class="text-muted fs-13 mb-0">{{ item.timestamp }}</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0 text-muted d-flex align-items-center gap-1"><span v-if="item.lastActivity.name"
                        class="fw-medium text-primary">{{
                          item.lastActivity.name
                        }} :</span>{{ item.lastActivity.message }}</p>
                    <b-badge variant="danger" pill v-if="item.unreadMsg">{{ item.unreadMsg }}</b-badge>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </simplebar>
      </div>

      <div class="tab-pane" :class="contactTab === 'contact-list' && 'show active'" id="contact-list">
        <simplebar class="px-2 mb-3 chat-setting-height">

          <div class="d-flex flex-column h-100  border-bottom">
            <a href="#" class="d-block">
              <div class="d-flex align-items-center justify-content-between bg-light bg-opacity-75 p-2 mb-1 rounded">
                <div class="position-relative">
                  <div class="avatar flex-shrink-0">
                    <span class="avatar-title bg-primary text-white fs-4 rounded-circle">
                      <i class="ri-user-add-line"></i>
                    </span>
                  </div>
                </div>
                <div class="d-block ms-3 flex-grow-1">
                  <h5 class="mb-0 fw-medium">Add New Contact</h5>
                </div>
                <Icon icon="solar:qr-code-bold-duotone" class="fs-20 text-primary"></Icon>
              </div>
            </a>
          </div>


          <div v-for="(item, idx) in contactMessages" :key="idx" class="d-flex flex-column h-100"
            :class="idx != contactMessages.length - 1 && 'border-bottom'">
            <a href="#" class="d-block">
              <div class="d-flex align-items-center p-2 mb-1 rounded">
                <div class="position-relative">
                  <img :src="item.image" alt="" class="avatar rounded-circle flex-shrink-0">
                </div>
                <div class="d-block ms-3 flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="mb-0">{{ item.name }}</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0 text-muted d-flex align-items-center gap-1">{{ item.lastMsg }}</p>
                  </div>
                </div>
              </div>
            </a>
          </div>

        </simplebar>
      </div>

    </div>

    <b-offcanvas placement="start" id="settings" body-class="p-0" title="Setting" header-class="page-title p-3 my-0 h4">

      <simplebar class="p-0 h-100">

        <div class="d-flex align-items-center px-3 pb-3 border-bottom">
          <img :src="avatar1" class="me-2 rounded-circle" height="36" alt="avatar-1" />
          <div class="flex-grow-1">
            <div class="float-end">
              <a href="javascript:void(0);"><i class="ri-qr-code-line fs-20"></i></a>
            </div>
            <h5 class="my-0 fs-14">Gaston Lapierre</h5>
            <p class="mt-1 mb-0 text-muted"><span class="w-75">Hey there! I am using Chat.</span></p>
          </div>
        </div>

        <div class="px-3 my-3 app-chat-setting">
          <b-accordion class="custom-accordion" id="accordionSetting">
            <b-accordion-item class="border-0" header-tag="h5" header-class="my-0" button-class="px-0 pt-0"
              body-class="pb-0">
              <template #title>
                <span class="d-flex align-items-center">
                  <i class="bx bx-key me-3 fs-20"></i>
                  <span class="flex-grow-1">
                    <span class="fs-14 h5 mt-0 mb-1 d-block">Account</span>
                    <span class="mt-1 mb-0 text-muted w-75">Privacy, security, change number</span>
                  </span>
                </span>
              </template>
              <ul class="list-unstyled mb-0">
                <li class="mb-2">
                  <a href="javascript:void(0);"><i class="bx bx-lock-alt fs-18 me-2"></i>Privacy</a>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);"><i class="bx bx-check-Reback fs-18 me-2"></i>Security</a>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);"><i class="bx bx-badge-check fs-18 me-2"></i>Two-step verification</a>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);"><i class="bx bx-arrow-from-left fs-18 me-2"></i>Change number</a>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);"><i class="bx bx-info-circle fs-18 me-2"></i>Request account info</a>
                </li>
                <li>
                  <a href="javascript:void(0);"><i class="bx bx-trash fs-18 me-2"></i>Delete my account</a>
                </li>
              </ul>
            </b-accordion-item>
            <b-accordion-item class="border-0" header-tag="h5" header-class="my-0" button-class="px-0"
              body-class="pb-0">
              <template #title>
                <span class="d-flex align-items-center">
                  <i class="bx bx-message-dots me-3 fs-20"></i>
                  <span class="flex-grow-1">
                    <span class="fs-14 h5 mt-0 mb-1 d-block">Chats</span>
                    <span class="mt-1 mb-0 text-muted w-75">Theme, wallpapers, chat history</span>
                  </span>
                </span>
              </template>
              <h5 class="mb-2">Display</h5>
              <ul class="list-unstyled mb-0">
                <li class="mb-2 d-flex">
                  <i class="bx bx-palette fs-18 me-2"></i>
                  <div class="flex-grow-1">
                    <a href="javascript:void(0);">Theme</a>
                    <p class="mb-0 text-muted fs-12">System default</p>
                  </div>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);"><i class="bx bx-image fs-16 me-2"></i>Wallpaper</a>
                </li>
              </ul>
              <hr />
              <h5>Chat Setting</h5>
              <ul class="list-unstyled">
                <li class="mb-2 ms-2">
                  <div class="float-end">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="media" checked />
                    </div>
                  </div>
                  <a href="javascript:void(0);">Media Visibility</a>
                  <p class="mb-0 text-muted fs-12">Show Newly downloaded media in your phone's gallery</p>
                </li>
                <li class="mb-2 ms-2">
                  <div class="float-end">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="enter" />
                    </div>
                  </div>
                  <a href="javascript:void(0);">Enter is send</a>
                  <p class="mb-0 text-muted fs-12">Enter key will send your message</p>
                </li>
                <li class="mb-2 ms-2">
                  <a href="javascript:void(0);">Font size</a>
                  <p class="mb-0 text-muted fs-12">small</p>
                </li>
              </ul>
              <hr />
              <ul class="list-unstyled mb-0">
                <li class="mb-2">
                  <div class="d-flex">
                    <i class="bx bx-text fs-16 me-2"></i>
                    <div class="flex-grow-1">
                      <a href="javascript:void(0);">App Language</a>
                      <p class="mb-0 text-muted fs-12">English</p>
                    </div>
                  </div>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);"><i class="bx bx-cloud-upload fs-16 me-2"></i>Chat Backup</a>
                </li>
                <li>
                  <a href="javascript:void(0);"><i class="bx bx-history fs-16 me-2"></i>Chat History</a>
                </li>
              </ul>
            </b-accordion-item>
            <b-accordion-item class="border-0" header-tag="h5" header-class="my-0" button-class="px-0"
              body-class="pb-0">
              <template #title>
                <span class="d-flex align-items-center">
                  <i class="bx bx-bell me-3 fs-20"></i>
                  <span class="flex-grow-1">
                    <span class="fs-14 h5 mt-0 mb-1 d-block">Notification</span>
                    <span class="mt-1 mb-0 text-muted w-75">Message, group, call tones</span>
                  </span>
                </span>
              </template>
              <ul class="list-unstyled mb-0">
                <li class="mb-2">
                  <div class="float-end">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="conversation" checked />
                    </div>
                  </div>
                  <a href="javascript:void(0);">Conversation Tones</a>
                  <p class="mb-0 text-muted fs-12">Play sound for incoming and outgoing message.</p>
                </li>
              </ul>
              <hr />
              <h5>Messages</h5>
              <ul class="list-unstyled mb-0">
                <li class="mb-2">
                  <a href="javascript:void(0);">Notification Tone</a>
                  <p class="mb-0 text-muted fs-12">Default ringtone</p>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);">Vibrate</a>
                  <p class="mb-0 text-muted fs-12">Default</p>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);">Light</a>
                  <p class="mb-0 text-muted fs-12">White</p>
                </li>
              </ul>
              <hr />
              <h5>Groups</h5>
              <ul class="list-unstyled mb-0">
                <li class="mb-2">
                  <a href="javascript:void(0);">Notification Tone</a>
                  <p class="mb-0 text-muted fs-12">Default ringtone</p>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);">Vibrate</a>
                  <p class="mb-0 text-muted fs-12">Off</p>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);">Light</a>
                  <p class="mb-0 text-muted fs-12">Dark</p>
                </li>
              </ul>
              <hr />
              <h5>Calls</h5>
              <ul class="list-unstyled mb-0">
                <li class="mb-2">
                  <a href="javascript:void(0);">Ringtone</a>
                  <p class="mb-0 text-muted fs-12">Default ringtone</p>
                </li>
                <li>
                  <a href="javascript:void(0);">Vibrate</a>
                  <p class="mb-0 text-muted fs-12">Default</p>
                </li>
              </ul>
            </b-accordion-item>
            <b-accordion-item class="border-0" header-tag="h5" header-class="my-0" button-class="px-0"
              body-class="pb-0">
              <template #title>
                <span class="d-flex align-items-center">
                  <i class="bx bx-history me-3 fs-20"></i>
                  <span class="flex-grow-1">
                    <span class="fs-14 h5 mt-0 mb-1 d-block">Storage and data</span>
                    <span class="mt-1 mb-0 text-muted w-75">Network usage, auto download</span>
                  </span>
                </span>
              </template>
              <ul class="list-unstyled mb-0">
                <li class="d-flex">
                  <i class="bx bx-folder fs-16 me-2"></i>
                  <div class="flex-grow-1">
                    <a href="javascript:void(0);">Manage storage</a>
                    <p class="mb-0 text-muted fs-12">2.4 GB</p>
                  </div>
                </li>
              </ul>
              <hr />
              <ul class="list-unstyled mb-0">
                <li class="d-flex">
                  <i class="bx bx-wifi fs-16 me-2"></i>
                  <div class="flex-grow-1">
                    <a href="javascript:void(0);">Network usage</a>
                    <p class="mb-0 text-muted fs-12">7.2 GB sent - 13.8 GB received</p>
                  </div>
                </li>
              </ul>
              <hr />
              <h5 class="mb-0">Media auto-download</h5>
              <p class="mb-0 text-muted fs-12">Voice message are always automatically downloaded</p>
              <ul class="list-unstyled mb-0 mt-2">
                <li class="mb-2">
                  <a href="javascript:void(0);">When using mobile data</a>
                  <p class="mb-0 text-muted fs-12">No media</p>
                </li>
                <li class="mb-2 ms-2">
                  <a href="javascript:void(0);">When connected on wi-fi</a>
                  <p class="mb-0 text-muted fs-12">No media</p>
                </li>
                <li class="mb-2 ms-2">
                  <a href="javascript:void(0);">When roaming</a>
                  <p class="mb-0 text-muted fs-12">No media</p>
                </li>
              </ul>
              <hr />
              <h5 class="mb-0">Media upload quality</h5>
              <p class="mb-0 text-muted fs-12">Choose the quality of media files to be sent</p>
              <ul class="list-unstyled mb-0 mt-2">
                <li class="ms-2">
                  <a href="javascript:void(0);">Photo upload quality</a>
                  <p class="mb-0 text-muted fs-12">Auto (recommended)</p>
                </li>
              </ul>
            </b-accordion-item>
            <b-accordion-item class="border-0" header-tag="h5" header-class="my-0" button-class="px-0"
              body-class="pb-0">
              <template #title>
                <span class="d-flex align-items-center">
                  <i class="bx bx-info-circle me-3 fs-20"></i>
                  <span class="flex-grow-1">
                    <span class="fs-14 h5 mt-0 mb-1 d-block">Help</span>
                    <span class="mt-1 mb-0 text-muted w-75">Help center, contact us, privacy policy</span>
                  </span>
                </span>
              </template>
              <ul class="list-unstyled mb-0">
                <li class="mb-2">
                  <a href="javascript:void(0);"><i class="bx bx-info-circle fs-16 me-2"></i>Help center</a>
                </li>
                <li class="mb-2 d-flex">
                  <i class="bx bxs-contact fs-16 me-2"></i>
                  <div class="flex-grow-1">
                    <a href="javascript:void(0);">Contact us</a>
                    <p class="mb-0 text-muted fs-12">Questions?</p>
                  </div>
                </li>
                <li class="mb-2">
                  <a href="javascript:void(0);"><i class="bx bx-book-content fs-16 me-2"></i>Teams and Privacy
                    Policy</a>
                </li>
                <li>
                  <a href="javascript:void(0);"><i class="bx bx-info-circle fs-16 me-2"></i>App info</a>
                </li>
              </ul>
            </b-accordion-item>
          </b-accordion>
        </div>

      </simplebar>
    </b-offcanvas>

  </b-card>
</template>

<script setup lang="ts">
import { ref } from "vue";
import simplebar from 'simplebar-vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { contactList, onlineContacts, contactMessages, groupContacts } from "@/views/messages/components/data";
import { Icon } from "@iconify/vue";
import { getFirstCharacter } from "@/helpers/change-casing";
import avatar1 from "@/assets/images/users/avatar-1.jpg";

const contactTab = ref('chat-list')

</script>