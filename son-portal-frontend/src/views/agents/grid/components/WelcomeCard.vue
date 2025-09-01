<template>
  <b-col xl="6" lg="12">
    <b-card no-body>
      <b-card-body>
        <b-row class="align-items-center">
          <b-col lg="7">
            <h4 class="text-dark mb-1">Welcome Back , Gaston</h4>
            <p class="fs-14">This is your properties portfolio report</p>
            <b-row class="align-items-center text-center mb-2">
              <b-col lg="7" class="border-end border-light">
                <b-row class="align-items-center">
                  <b-col lg="6">
                    <ApexChart :chart="gridChart" id="grid-chart" class="apex-charts" />
                  </b-col>
                  <b-col lg="6">
                    <h5>Properties</h5>
                    <h2 class="fw-semibold text-dark">250</h2>

                  </b-col>
                </b-row>
              </b-col>
              <b-col lg="5">
                <div class="ps-2">
                  <p class="d-flex align-items-center mb-2 gap-2"><i class='ri-circle-fill text-primary'></i>80
                    Vacant</p>
                  <p class="d-flex align-items-center mb-2 gap-2"><i class='ri-circle-fill text-warning'></i>40
                    Occupied</p>
                  <p class="d-flex align-items-center gap-2 mb-0"><i class='ri-circle-fill text-success'></i>30
                    Unlisted</p>
                </div>
              </b-col>
            </b-row>
            <p class="text-muted mb-0 d-flex align-items-center gap-1">Last Updated <span>:</span> <span
                class="text-dark">4 day ago</span></p>
          </b-col>
          <b-col lg="5" class="text-end">
            <img :src="home2" alt="" class=" img-fluid">
          </b-col>
        </b-row>
      </b-card-body>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { gridChart } from "@/views/agents/grid/components/data";
import home2 from "@/assets/images/home-2.png"
</script>