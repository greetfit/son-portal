<template>
  <b-card no-body>
    <b-card-body>
      <b-carousel controls>
        <b-carousel-slide :img-src="properties14" />
        <b-carousel-slide :img-src="properties13" />
        <b-carousel-slide :img-src="properties11" />
        <b-carousel-slide :img-src="properties15" />
      </b-carousel>

      <div class="d-flex align-items-center my-3 gap-3">
        <img :src="avatar2" alt="" class="rounded-circle avatar-xl img-thumbnail">
        <div>
          <h3 class="fw-semibold mb-1">Daavid Nummi</h3>
          <a href="#!" class="link-primary fw-medium fs-14">EastTribune.nl</a>
        </div>

      </div>
      <div class="d-flex flex-wrap align-items-start justify-content-between gap-3 mt-3">

        <div>
          <a href="#!" class="btn btn-primary"><i class="ri-chat-1-fill"></i> Chat Us</a>{{ ' ' }}
          <a href="#!" class="btn btn-outline-primary"><i class="ri-phone-fill"></i> Phone</a>
        </div>
        <div class="d-flex gap-1">
          <a href="javascript: void(0);"
            class="btn btn-dark avatar-sm d-flex align-items-center justify-content-center fs-20">
            <i class="ri-edit-fill"></i>
          </a>
          <a href="javascript: void(0);"
            class="btn btn-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
            <i class="ri-share-fill"></i>
          </a>
        </div>
      </div>

      <b-row class="my-4">
        <b-col lg="3">
          <p class="text-dark fw-semibold fs-16 mb-1">Email Address :</p>
          <p class="mb-0">daavidnumminen@teleworm.us</p>
        </b-col>
        <b-col lg="3">
          <p class="text-dark fw-semibold fs-16 mb-1">Phone Number :</p>
          <p class="mb-0">+231 06-75820711</p>
        </b-col>
        <b-col lg="4">
          <p class="text-dark fw-semibold fs-16 mb-1">Location :</p>
          <p class="mb-0">Schoolstraat 161 5151 HH Drunen </p>
        </b-col>
        <b-col lg="2">
          <p class="text-dark fw-semibold fs-16 mb-1">Status :</p>
          <p class="mb-0"><span class="badge bg-success text-white fs-12 px-2 py-1">Available</span> </p>
        </b-col>
      </b-row>

      <b-row>
        <b-col lg="4">
          <b-card-title class="mb-2">Social Media :</b-card-title>
          <ul class="list-inline d-flex gap-1 mb-0 align-items-center mt-3">
            <li class="list-inline-item">
              <a href="javascript: void(0);"
                class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                <i class="ri-facebook-fill"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a href="javascript: void(0);"
                class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                <i class="ri-instagram-fill"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a href="javascript: void(0);"
                class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                <i class="ri-twitter-fill"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="javascript: void(0);"
                class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                <i class="ri-whatsapp-fill"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="javascript: void(0);"
                class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                <i class="ri-mail-fill"></i>
              </a>
            </li>
          </ul>
        </b-col>
        <b-col lg="8">
          <b-card-title class="mb-2">Preferences :</b-card-title>
          <p class="mb-0"><i class="ri-circle-fill fs-10 me-2 text-success"></i> 3-4 bedrooms, 2-3 bathrooms</p>
          <p class="mb-0"><i class="ri-circle-fill fs-10 me-2 text-success"></i> Close to public transportation,
            good school district, backyard, modern kitchen</p>
        </b-col>
      </b-row>
    </b-card-body>
  </b-card>
</template>
<script setup lang="ts">
import properties14 from "@/assets/images/properties/p-14.jpg";
import properties13 from "@/assets/images/properties/p-13.jpg";
import properties11 from "@/assets/images/properties/p-11.jpg";
import properties15 from "@/assets/images/properties/p-15.jpg";
import avatar2 from "@/assets/images/users/avatar-2.jpg";
</script>