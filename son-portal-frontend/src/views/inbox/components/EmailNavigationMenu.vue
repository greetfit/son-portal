<template>
  <div class="mb-3">
    <b-card-body class="bg-body-secondary d-flex justify-content-between gap-1">
      <b-button variant="danger" class="w-100 d-flex align-items-center justify-content-center"
                @click="toggleModal">
                  <span class="fw-semibold"><Icon icon="solar:pen-new-square-broken"
                                                  class="align-middle me-1 fs-16"/>Compose</span>
      </b-button>
      <b-button class="btn btn-icon btn-soft-danger d-xl-none" v-b-toggle.navigation-menu>
        <i class="ri-close-line fs-22"></i>
      </b-button>
    </b-card-body>
  </div>

  <simplebar style="height: calc(100vh - 280px)">

    <b-card-body class="pt-0">
      <div class="email-menu-list d-flex flex-column gap-2">
        <a href="#" class="active">
          <Icon icon="solar:inbox-broken" class="me-2 fs-18 text-muted"/>
          <span>Your Inbox</span>
          <span class="fs-12 text-primary ms-auto">5</span>
        </a>
        <a href="#">
          <Icon icon="solar:bookmark-broken" class="me-2 fs-18 text-muted"/>
          <span>Important</span>
        </a>
        <a href="#">
          <Icon icon="solar:stopwatch-play-broken" class="me-2 fs-18 text-muted"/>
          <span>Snoozed</span>
        </a>
        <a href="#">
          <Icon icon="solar:pen-2-broken" class="me-2 fs-18 text-muted"/>
          <span>Draft</span>
          <span class="fs-12 text-muted ms-auto">8</span>
        </a>
        <a href="#">
          <Icon icon="solar:file-send-broken" class="me-2 fs-18 text-muted"/>
          <span>Sent</span>
        </a>
        <a href="#">
          <Icon icon="solar:bag-3-broken" class="me-2 fs-18 text-muted"/>
          <span>Promotions</span>
          <span class="fs-12 text-muted ms-auto">3</span>
        </a>
        <a href="#">
          <Icon icon="solar:bell-bing-broken" class="me-2 fs-18 text-muted"/>
          <span>Update</span>
          <span class="fs-12 text-muted ms-auto">14</span>
        </a>
        <a href="#">
          <span><i class="ri-arrow-down-s-line"></i> More</span>
        </a>
      </div>
    </b-card-body>

    <div class="card-body border-top border-light">
      <a href="#" class="btn-link d-flex align-items-center text-dark fw-semibold my-md-0 my-2"
         v-b-toggle.labels>Labels
        <i class="ri-arrow-down-s-line ms-auto"></i></a>

      <b-collapse id="labels" visible>
        <div class="email-menu-list d-flex flex-column gap-2 mt-2">
          <a href="#">
            <Icon icon="solar:camera-square-bold" class="me-2 fs-18 text-success"/>
            <span>Collaboration</span>
          </a>

          <a href="#">
            <Icon icon="solar:camera-square-bold" class="me-2 fs-18 text-warning"/>
            <span>New Client</span>
          </a>
          <a href="#">
            <Icon icon="solar:camera-square-bold" class="me-2 fs-18 text-info"/>
            <span>Wedding</span>
          </a>

        </div>
      </b-collapse>
    </div>

    <b-card-body class="border-top border-light">
      <a href="#" class="btn-link d-flex align-items-center text-dark fw-semibold my-md-0 my-2"
         v-b-toggle.contacts>Contacts
        <i class="ri-arrow-down-s-line ms-auto"></i></a>

      <b-collapse id="contacts" visible>
        <div class="email-menu-list d-flex flex-column gap-1 mt-2">

          <a v-for="(item,idx) in contacts" :key="idx" href="#">
            <div class="d-flex align-items-center gap-2">
              <img :src="item.image" alt="" class="avatar-sm rounded-circle">
              <p class="mb-0">{{ item.name }}</p>
            </div>
          </a>

        </div>
      </b-collapse>
    </b-card-body>
  </simplebar>


  <b-modal v-model="showModal" class="compose-mail" id="compose-modal" hide-footer hide-header body-class="p-0">
    <div class="modal-header overflow-hidden bg-primary p-2">
      <h5 class="modal-title text-white" id="compose-modalLabel">New Message</h5>
      <button type="button" class="btn-close btn-close-white" @click="toggleModal"></button>
    </div>
    <div class="modal-body p-4">
      <div class="overflow-hidden">

        <div class="mb-2">
          <b-form-input type="email" id="toEmail" placeholder="To: "/>
        </div>
        <div class="mb-2">
          <b-form-input type="text" id="subject" placeholder="Subject "/>
        </div>

        <div class="my-2">
          <QuillEditor theme="snow" :toolbar="toolbar" style="height: 200px"
                       content-type="html"/>
        </div>

        <div>
          <a href="javascript: void(0);" class="btn btn-primary">Send</a>
        </div>

      </div>
    </div>
  </b-modal>
</template>

<script setup lang="ts">
import {Icon} from "@iconify/vue";
import {contacts} from "@/views/inbox/components/data";
import simplebar from 'simplebar-vue';
import {ref} from "vue";
import {QuillEditor} from "@vueup/vue-quill";

const showModal = ref(false)

const toggleModal = () => {
  showModal.value = !showModal.value;
}

const toolbar = [[{font: []}, {size: []}], ['bold', 'italic', 'underline', 'strike'], [{color: []}, {background: []}], [{script: 'super'}, {script: 'sub'}], [{header: [false, 1, 2, 3, 4, 5, 6]}, 'blockquote', 'code-block'], [{list: 'ordered'}, {list: 'bullet'}, {indent: '-1'}, {indent: '+1'}], ['direction', {align: []}], ['link', 'image', 'video'], ['clean']]

</script>
