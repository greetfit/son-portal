<template>
  <b-col xl="6" lg="6">
    <b-card no-body>
      <b-card-header class="d-flex justify-content-between align-items-center pb-1">
        <div>
          <b-card-title>Most Sales Location</b-card-title>
        </div>
        <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
          <template v-slot:button-content>
            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded">
              Asia
            </a>
          </template>

          <b-dropdown-item>U.S.A</b-dropdown-item>
          <b-dropdown-item>Russia</b-dropdown-item>
          <b-dropdown-item>China</b-dropdown-item>
          <b-dropdown-item>Canada</b-dropdown-item>
        </b-dropdown>
      </b-card-header>
      <b-card-body>
        <b-row>
          <b-col xl="12">
            <JsVectorMap id="most-sales-location" :height="322" class="mt-3" :options="worldMapOptions" />
          </b-col>
        </b-row>
        <b-progress class="mt-5 overflow-visible" style="height: 25px;">
          <b-progress-bar variant="primary" class="position-relative overflow-visible rounded-start" :value="20">
            <p class="progress-value text-start text-dark mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -50px !important;">Canada</p>
            <p class="progress-value text-start text-light mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -30px !important;">|</p>
            <p class="mb-0  text-start ps-1 ps-lg-2 text-white fs-14">71.1%</p>
          </b-progress-bar>
          <b-progress-bar variant="primary" class="bg-opacity-75 position-relative overflow-visible" :value="20">
            <p class="progress-value text-start text-dark mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -50px !important;">Canada</p>
            <p class="progress-value text-start text-light mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -30px !important;">|</p>
            <p class="mb-0  text-start ps-1 ps-lg-2 text-white fs-14">71.1%</p>
          </b-progress-bar>
          <b-progress-bar variant="primary" class="bg-opacity-50 position-relative overflow-visible" :value="20">
            <p class="progress-value text-start text-dark mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -50px !important;">Brazil</p>
            <p class="progress-value text-start text-light mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -30px !important;">|</p>
            <p class="mb-0  text-start ps-1 ps-lg-2 text-white fs-14">53.9%</p>
          </b-progress-bar>
          <b-progress-bar variant="primary" class="bg-opacity-25 position-relative overflow-visible" :value="20">
            <p class="progress-value text-start text-dark mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -50px !important;">Russia</p>
            <p class="progress-value text-start text-light mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -30px !important;">| </p>
            <p class="mb-0  text-start ps-1 ps-lg-2 text-white fs-14">49.2%</p>
          </b-progress-bar>
          <b-progress-bar variant="primary" class="bg-opacity-10 position-relative overflow-visible" :value="20">
            <p class="progress-value text-start text-dark mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -50px !important;">China </p>
            <p class="progress-value text-start text-light mb-0 mt-1 fs-14 fw-medium"
              style="left: 0% !important; top: -30px !important;">| </p>
            <p class="mb-0  text-start ps-1 ps-lg-2 text-white fs-14">38.8%</p>
          </b-progress-bar>
        </b-progress>
      </b-card-body>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
const worldMapOptions = {
  map: 'world',
  selector: '#most-sales-location',
  zoomOnScroll: true,
  zoomButtons: false,
  markersSelectable: true,
  markers: [
    { name: 'Canada', coords: [56.1304, -106.3468] },
    { name: 'Brazil', coords: [-14.235, -51.9253] },
    { name: 'Russia', coords: [61, 105] },
    { name: 'China', coords: [35.8617, 104.1954] },
    { name: 'United States', coords: [37.0902, -95.7129] }
  ],
  markerStyle: {
    initial: { fill: '#7f56da' },
    selected: { fill: '#22c55e' }
  },
  labels: {
    markers: {
      render: (marker: any) => marker.name
    }
  },
  regionStyle: {
    initial: {
      fill: 'rgba(169,183,197, 0.3)',
      fillOpacity: 1
    }
  }
};
</script>