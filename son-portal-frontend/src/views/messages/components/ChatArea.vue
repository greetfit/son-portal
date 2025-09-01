<template>
  <b-card no-body class="position-relative overflow-hidden">
    <b-card-header class="d-flex align-items-center mh-100 bg-light-subtle">
      <b-button variant="light" class="d-xxl-none d-flex align-items-center px-2 me-2" type="button"
        v-b-toggle.chat-sidebar>
        <i class="ri-menu-line fs-18"></i>
      </b-button>

      <div class="d-flex align-items-center">
        <img :src="avatar4" class="me-2 rounded" height="36" alt="avatar-4" />
        <div class="d-none d-md-flex flex-column">
          <h5 class="my-0 fs-16 fw-semibold">
            <a v-b-toggle.user-profile class="text-dark">
              David Wilson
            </a>
          </h5>
          <p class="mb-0 text-success fw-medium">Active <i class="ri-circle-fill fs-10"></i></p>
        </div>
      </div>

      <div class="flex-grow-1">
        <ul class="list-inline float-end d-flex gap-1 mb-0 align-items-center">
          <li class="list-inline-item fs-20 dropdown">
            <a class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-dark fs-20 p-0"
              @click="videoToggleModal">
              <Icon icon="solar:videocamera-record-bold-duotone" />
            </a>
          </li>

          <li class="list-inline-item fs-20 dropdown">
            <a class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-dark fs-20 p-0"
              @click="voiceToggleModal">
              <Icon icon="solar:outgoing-call-rounded-bold-duotone" />
            </a>
          </li>

          <li class="list-inline-item fs-20 dropdown">
            <a v-b-toggle.user-profile
              class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-dark fs-20 p-0">
              <Icon icon="solar:user-bold-duotone" />
            </a>
          </li>

          <b-dropdown variant="link" is="li" class="list-inline-item fs-20 d-none d-md-flex" no-caret
            menu-class="dropdown-menu-end" toggle-class="arrow-none text-dark p-0 m-0">
            <template #button-content>
              <i class="ri-more-2-fill"></i>
            </template>

            <b-dropdown-item><i class="ri-user-6-line me-2"></i>View Profile</b-dropdown-item>
            <b-dropdown-item><i class="ri-music-2-line me-2"></i>Media, Links and Docs</b-dropdown-item>
            <b-dropdown-item><i class="ri-search-2-line me-2"></i>Search</b-dropdown-item>
            <b-dropdown-item><i class="ri-image-line me-2"></i>Wallpaper</b-dropdown-item>
            <b-dropdown-item><i class="ri-arrow-right-circle-line me-2"></i>More</b-dropdown-item>
          </b-dropdown>
        </ul>
      </div>
    </b-card-header>

    <div class="chat-box">
      <simplebar is="ul" class="chat-conversation-list p-3 chatbox-height">

        <template v-for="(item, idx) in chatMessages" :key="idx">

          <li v-if="item.sender" class="d-flex gap-2 clearfix">
            <div class="chat-avatar text-center">
              <img :src="avatar4" alt="" class="avatar rounded-circle">
            </div>

            <div class="chat-conversation-text">
              <div>
                <p class="mb-2"><span class="text-dark fw-medium me-1">{{ item.sender.name }}</span> {{
                  item.timestamp
                }}</p>
              </div>
              <div v-for="message in item.messages" class="d-flex align-items-start">
                <div class="chat-ctext-wrap">
                  <p class="d-flex align-items-center gap-1">
                    {{ message }}
                  </p>
                </div>
                <DropDown class="chat-conversation-actions dropend">
                  <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i
                      class='ri-more-2-fill fs-18'></i></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-share-forward-line me-2"></i>Reply
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-share-line me-2"></i>Forward
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-file-copy-line me-2"></i>Copy
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-bookmark-line me-2"></i>Bookmark
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-star-line me-2"></i>Starred
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-information-2-line me-2"></i>Mark as Unread
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-delete-bin-line me-2"></i>Delete
                    </a>
                  </div>
                </DropDown>
              </div>
            </div>
          </li>

          <li v-else class="d-flex justify-content-end gap-2 clearfix odd">
            <div class="chat-conversation-text ms-0">
              <div>
                <p class="mb-2"> {{ item.timestamp }} <span class="text-dark fw-medium ms-1">You</span></p>
              </div>
              <div v-for="message in item.messages" class="d-flex justify-content-end mt-2">
                <DropDown class="chat-conversation-actions dropstart">
                  <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i
                      class='ri-more-2-fill fs-18'></i></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-share-forward-line me-2"></i>Reply
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-share-line me-2"></i>Forward
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-file-copy-line me-2"></i>Copy
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-bookmark-line me-2"></i>Bookmark
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-star-line me-2"></i>Starred
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-information-2-line me-2"></i>Mark as Unread
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                      <i class="ri-delete-bin-line me-2"></i>Delete
                    </a>
                  </div>
                </DropDown>
                <div class="chat-ctext-wrap">
                  <p>{{ message }}</p>
                </div>
              </div>
            </div>
            <div class="chat-avatar text-center">
              <img :src="avatar1" alt="" class="avatar rounded-circle">
            </div>
          </li>

        </template>
      </simplebar>

      <div class="bg-light bg-opacity-50 p-2">
        <b-form class="needs-validation" name="chat-form" id="chat-form" @submit.prevent="handleYupSubmit">
          <b-row class="align-items-center">
            <b-col class="mb-2 mb-sm-0 d-flex">
              <div class="input-group">
                <a class="btn btn-sm btn-primary rounded-start d-flex align-items-center input-group-text"><i
                    class="ri-emotion-line fs-18"></i></a>
                <b-form-input type="text" class="border-0" placeholder="Enter your message"
                  v-model="messageState.message" />
              </div>
            </b-col>
            <div class="col-sm-auto">
              <div class="d-flex gap-2">
                <a href="#" class="btn btn-soft-success btn-sm"><i class="ri-attachment-2 fs-18"></i></a>
                <a href="#" class="btn btn-soft-warning btn-sm"><i class="ri-video-on-line fs-18"></i></a>
                <b-button variant="primary" size="sm" type="submit" class="chat-send"><i
                    class="ri-send-plane-2-line fs-18"></i></b-button>
              </div>
            </div>
            <span v-if="error.length > 0" class="text-danger mt-2">{{ error }}</span>
          </b-row>
        </b-form>
      </div>
    </div>

    <!-- video call Modal -->
    <b-modal v-model="videoModal" size="sm" content-class="video-call" header-class="border-0 mb-5 justify-content-end"
      hide-footer centered>

      <template #header>
        <div class="video-call-head">
          <img :src="avatar1" class="rounded" alt="avatar-4" />
        </div>
      </template>

      <div class="video-call-action text-center pt-4 pb-0">
        <ul class="d-flex align-items-center justify-content-evenly bg-dark m-3 p-2 rounded-pill">

          <li class="list-inline-item avatar-sm me-2">
            <a class="avatar-title rounded-circle bg-soft-light text-white fs-16">
              <i class="ri-mic-off-line"></i>
            </a>
          </li>
          <li class="list-inline-item avatar-sm">
            <a class="avatar-title rounded-circle bg-soft-light text-white fs-16">
              <i class="ri-volume-up-line"></i>
            </a>
          </li>
          <li class="list-inline-item avatar-sm me-2">
            <a class="avatar-title rounded-circle bg-soft-light text-white fs-16">
              <i class="ri-camera-switch-line"></i>
            </a>
          </li>
          <li class="list-inline-item avatar-sm">
            <a class="avatar-title rounded-circle bg-soft-light text-white fs-16">
              <i class="ri-camera-off-line"></i>
            </a>
          </li>
          <li class="list-inline-item fw-bold" data-bs-dismiss="modal">
            <a href="#!" class="btn btn-danger btn-sm rounded-pill"><i class='ri-phone-line me-1'></i>10:02</a>
          </li>
        </ul>
      </div>
    </b-modal>

    <!-- voice call modal -->
    <b-modal v-model="voiceModal" size="sm" content-class="voice-call"
      header-class="border-0 mt-5 justify-content-center" body-class="pt-0 text-center" hide-footer centered>

      <template #header>
        <div class="voice-call-head">
          <img :src="avatar4" class="rounded-circle" alt="avatar-4" />
        </div>
      </template>

      <h5>Gaston Lapierre</h5>
      <p class="mb-5">Calling...</p>
      <div class="voice-call-action pt-4 pb-0">
        <ul class="d-flex align-items-center justify-content-between bg-dark mx-5 mb-3 p-2 rounded-pill">
          <li class="list-inline-item avatar-sm me-2">
            <a class="avatar-title rounded-circle bg-soft-light text-white fs-16">
              <i class="ri-mic-off-line"></i>
            </a>
          </li>
          <li class="list-inline-item avatar-sm me-2" data-bs-dismiss="modal">
            <a class="avatar-title rounded-circle bg-danger text-white fs-18">
              <Icon icon="solar:end-call-linear" />
            </a>
          </li>
          <li class="list-inline-item avatar-sm">
            <a class="avatar-title rounded-circle bg-soft-light text-white fs-16">
              <i class="ri-volume-up-line"></i>
            </a>
          </li>

        </ul>
      </div>
    </b-modal>

    <!-- Profile Start -->
    <b-offcanvas :body-scrolling="true" placement="end" class="position-absolute shadow border-start" id="user-profile"
      title="Profile" header-class="text-truncate" body-class="p-0">
      <simplebar>
        <div class="p-3">
          <div class="text-center">
            <img :src="avatar4" alt="shreyu" class="img-thumbnail avatar-lg rounded-circle mb-1" />
            <h4>Gilbert Chicoine</h4>
            <b-button variant="primary" size="sm" class="mt-1"><i class="bi bi-envelope me-1"></i>Send Email</b-button>
            <p class="text-muted mt-2 fs-14">
              Last Interacted:
              <strong class="text-success">Online</strong>
            </p>
          </div>

          <div class="mt-3">
            <hr />

            <p class="mt-3 mb-1">
              <strong><i class="bi bi-phone"></i>Phone Number:</strong>
            </p>
            <p>+1 456 9595 9594</p>

            <p class="mt-3 mb-1">
              <strong><i class="bi bi-geo-alt"></i>Location:</strong>
            </p>
            <p>California, USA</p>

            <p class="mt-3 mb-1">
              <strong><i class="bi bi-globe"></i>Languages:</strong>
            </p>
            <p>English, German, Spanish</p>

            <p class="mt-3 mb-2">
              <strong><i class="bi bi-people"></i>Groups:</strong>
            </p>
            <p class="mb-0">
              <b-badge :variant="null" class="badge-soft-success p-1 fs-14 me-1">Work</b-badge>
              <b-badge :variant="null" class="badge-soft-primary p-1 fs-14">Friends</b-badge>
            </p>
          </div>

          <h5 class="mt-3">
            <a href="javascript:void(0);" class="my-0">
              <span class="float-end">See All</span>
              Shared Photos
            </a>
          </h5>
          <b-row class="gx-1 pt-2">
            <b-col cols="4">
              <a href="javascript:void(0);">
                <img :src="smallImg1" alt="img-1" class="img-fluid rounded" />
              </a>
            </b-col>
            <b-col cols="4">
              <a href="javascript:void(0);">
                <img :src="smallImg2" alt="img-2" class="img-fluid rounded" />
              </a>
            </b-col>
            <b-col cols="4">
              <div class="position-relative overflow-hidden rounded">
                <a href="javascript:void(0);">
                  <img :src="smallImg3" alt="img-3" class="img-fluid rounded" />
                  <div class="bg-overlay bg-dark"></div>
                  <h3 class="position-absolute top-50 start-50 translate-middle my-0 text-white">+3</h3>
                </a>
              </div>
            </b-col>
          </b-row>
        </div>
      </simplebar>
    </b-offcanvas>

  </b-card>
</template>

<script setup lang="ts">
import { Icon } from "@iconify/vue";
import simplebar from 'simplebar-vue';
import { ref, watch, reactive } from 'vue';
import { object, string } from 'yup';

import avatar1 from "@/assets/images/users/avatar-1.jpg";
import avatar4 from "@/assets/images/users/avatar-4.jpg";
import smallImg1 from '@/assets/images/small/img-1.jpg';
import smallImg2 from '@/assets/images/small/img-2.jpg';
import smallImg3 from '@/assets/images/small/img-3.jpg';

import { chatMessagesData } from "@/views/messages/components/data";
import DropDown from "@/components/DropDown.vue";

const chatMessages = ref(chatMessagesData);

const videoModal = ref(false);
const voiceModal = ref(false);

const videoToggleModal = () => {
  videoModal.value = !videoModal.value;
};

const voiceToggleModal = () => {
  voiceModal.value = !voiceModal.value;
};

const error = ref('');

const messageSchema = object({
  message: string().required('Message is Required')
});

const messageState = reactive({
  message: ''
});

const handleYupSubmit = async (event: Event) => {
  await messageSchema
    .validate(messageState)
    .then((res) => {
      error.value = '';
      chatMessages.value.push({
        messages: [res.message],
        timestamp: '8:20 am',
      });
      messageState.message = '';
    })
    .catch((e) => {
      return (error.value = e.message);
    });
};

watch(
  chatMessages.value,
  () => {
    setTimeout(() => {
      chatMessages.value.push({
        messages: ['Server is not connected 😔'],
        timestamp: '8:20 am',
      });
    }, 1000);
  },
  { once: true }
);
</script>