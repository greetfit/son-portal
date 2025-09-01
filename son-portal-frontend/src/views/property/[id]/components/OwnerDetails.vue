<template>
  <b-card no-body>
    <b-card-header class="bg-light-subtle">
      <b-card-title>Property Owner Details</b-card-title>
    </b-card-header>
    <b-card-body>
      <div class="text-center">
        <img :src="avatar1" alt=""
          class="avatar-xl rounded-circle border border-2 border-light mx-auto">
        <div class="mt-2">
          <a href="#!" class="fw-medium text-dark fs-16">Gaston Lapierre</a>
          <p class="mb-0">(Owner)</p>
        </div>
        <div class="mt-3">
          <ul class="list-inline justify-content-center d-flex gap-1 mb-0 align-items-center">
            <li class="list-inline-item">
              <a href="javascript: void(0);"
                class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-primary fs-20">
                <i class='ri-facebook-fill'></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a href="javascript: void(0);"
                class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-danger fs-20">
                <i class='ri-instagram-fill'></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a href="javascript: void(0);"
                class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-info fs-20">
                <i class='ri-twitter-fill'></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="javascript: void(0);"
                class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-success fs-20">
                <i class='ri-whatsapp-fill'></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </b-card-body>
    <b-card-footer class="bg-light-subtle">
      <b-row class="g-2">
        <b-col lg="6">
          <a href="#!" class="btn btn-primary w-100">
            <Icon icon="solar:phone-calling-bold-duotone" class="align-middle fs-18" /> Call Us
          </a>
        </b-col>
        <b-col lg="6">
          <a href="#!" class="btn btn-success w-100">
            <Icon icon="solar:chat-round-dots-bold-duotone" class="align-middle fs-16" /> Message
          </a>
        </b-col>
      </b-row>
    </b-card-footer>
  </b-card>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
import avatar1 from "@/assets/images/users/avatar-1.jpg"
</script>