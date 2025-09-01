<template>
  <b-col lg="7">
    <b-card no-body>
      <b-card-header class="d-flex justify-content-between align-items-center border-0">
        <b-card-title>Sessions by Country</b-card-title>
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
        <b-row class="justify-content-between mt-1">
          <b-col lg="6">
            <div class="d-flex align-items-center gap-2">
              <div class="avatar-md bg-light bg-opacity-50 rounded">
                <div class="avatar-title">
                  <Icon icon="solar:user-rounded-broken" class="fs-32 text-primary" />
                </div>
              </div>
              <div>
                <p class="mb-0 fs-20 text-dark fw-medium">145.678</p>
                <small>(Total Visitors)</small>
              </div>
            </div>
              <JsVectorMap id="world-map-markers" :height="235" class="mt-4" :options="worldMapOptions" />
          </b-col>
          <b-col lg="5" dir="ltr">
            <div class="p-3 bg-light-subtle rounded border border-light">
              <!-- Country Data -->
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">
                  <Icon icon="circle-flags:us" class="fs-16 align-middle me-1" /> <span class="align-middle">United
                    States</span>
                </p>
                <p class="mb-0 fs-13 fw-semibold">659k</p>
              </div>
              <b-row class="align-items-center mb-3">
                <div class="col">
                  <b-progress class="progress-soft progress-sm">
                    <b-progress-bar variant="secondary" :value="82.05" />
                  </b-progress>
                </div>
                <div class="col-auto">
                  <p class="mb-0 fs-12 text-muted fw-medium">82.05%</p>
                </div>
              </b-row>

              <!-- Country Data -->
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">
                  <Icon icon="circle-flags:ru" class="fs-16 align-middle me-1" /> <span
                    class="align-middle">Russia</span>
                </p>
                <p class="mb-0 fs-13 fw-semibold">485k</p>
              </div>
              <b-row class="align-items-center mb-3">
                <div class="col">
                  <b-progress class="progress-soft progress-sm">
                    <b-progress-bar variant="info" :value="70.5" />
                  </b-progress>
                </div>
                <div class="col-auto">
                  <p class="mb-0 fs-12 text-muted fw-medium">70.5%</p>
                </div>
              </b-row>

              <!-- Country Data -->
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">
                  <Icon icon="circle-flags:cn" class="fs-16 align-middle me-1" /> <span
                    class="align-middle">China</span>
                </p>
                <p class="mb-0 fs-13 fw-semibold">355k</p>
              </div>
              <b-row class="align-items-center mb-3">
                <div class="col">
                  <b-progress class="progress-soft progress-sm">
                    <b-progress-bar variant="warning" :value="65.8" />
                  </b-progress>
                </div>
                <div class="col-auto">
                  <p class="mb-0 fs-12 text-muted fw-medium">65.8%</p>
                </div>
              </b-row>

              <!-- Country Data -->
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">
                  <Icon icon="circle-flags:ca" class="fs-16 align-middle me-1" /> <span
                    class="align-middle">Canada</span>
                </p>
                <p class="mb-0 fs-13 fw-semibold">204k</p>
              </div>
              <b-row class="align-items-center">
                <div class="col">
                  <b-progress class="progress-soft progress-sm">
                    <b-progress-bar variant="success" :value="55.8" />
                  </b-progress>
                </div>
                <div class="col-auto">
                  <p class="mb-0 fs-12 text-muted fw-medium">55.8%</p>
                </div>
              </b-row>
              <div class="mt-2 pt-1 text-center">
                <a href="#!" class="link-primary">Add Other <i class='ri-add-line'></i></a>
              </div>
            </div>
          </b-col>
        </b-row>
      </b-card-body>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
const worldMapOptions = {
  map: 'world',
  selector: '#world-map-markers',
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