<template>
  <b-card no-body>
    <b-card-body>
      <div class="position-relative">
        <img :src="properties1" alt="" class="img-fluid rounded bg-light">
        <span class="position-absolute top-0 end-0 p-1">
          <span class="badge bg-success text-light fs-13">For Rent</span>
        </span>
      </div>
      <div class="mt-3">
        <h4 class="mb-1">Dvilla Residences Batu<span class="fs-14 text-muted ms-1">(Residences)</span></h4>
        <p class="mb-1">4604 , Philli Lane Kiowa U.S.A</p>
        <h5 class="text-dark fw-medium mt-3">Price :</h5>
        <h4 class="fw-semibold mt-2 text-muted">{{ currency }}8,930.00</h4>
      </div>
      <b-row class="mt-2 g-2">
        <b-col lg="3" cols="3">
          <span class="badge bg-light-subtle text-muted border fs-12">
            <span class="fs-16">
              <Icon icon="solar:bed-broken" class="align-middle" />
            </span>
            5 Beds
          </span>
        </b-col>
        <b-col lg="3" cols="3">
          <span class="badge bg-light-subtle text-muted border fs-12">
            <span class="fs-16">
              <Icon icon="solar:bath-broken" class="align-middle" />
            </span>
            4 Bath
          </span>
        </b-col>
        <b-col lg="3" cols="3">
          <span class="badge bg-light-subtle text-muted border fs-12">
            <span class="fs-16">
              <Icon icon="solar:scale-broken" class="align-middle" />
            </span>
            1400ft
          </span>
        </b-col>
        <b-col lg="3" cols="3">
          <span class="badge bg-light-subtle text-muted border fs-12">
            <span class="fs-16">
              <Icon icon="solar:double-alt-arrow-up-broken" class="align-middle" />
            </span>
            3 Floor
          </span>
        </b-col>
      </b-row>
    </b-card-body>
    <b-card-footer class="bg-light-subtle">
      <b-row class="g-2">
        <b-col lg="6">
          <a href="#!" class="btn btn-outline-primary w-100">Add Property</a>
        </b-col>
        <b-col lg="6">
          <a href="#!" class="btn btn-danger w-100">Cancel</a>
        </b-col>
      </b-row>
    </b-card-footer>

  </b-card>
</template>
<script setup lang="ts">
import { currency } from "@/helpers/constants";
import { Icon } from "@iconify/vue";
import properties1 from "@/assets/images/properties/p-1.jpg";
</script>