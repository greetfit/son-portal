<template>
  <b-card no-body>
    <b-card-header>
      <b-card-title>Location</b-card-title>
    </b-card-header>
    <b-card-body>
      <JsVectorMap id="agent-location" :height="228" class="my-4" :options="worldMapOptions" />

      <div class="d-flex align-items-center bg-light justify-content-between p-3 rounded">
        <div>
          <h5 class="fw-medium mb-1 text-dark">Walker Art Center</h5>
          <p class="mb-2">Lincoln Drive Harrisburg, PA 17101 U.S.A</p>
          <div class="d-flex gap-2 align-items-center">
            <ul class="d-flex text-warning m-0 fs-18  list-unstyled">
              <li>
                <i class="ri-star-fill"></i>
              </li>
              <li>
                <i class="ri-star-fill"></i>
              </li>
              <li>
                <i class="ri-star-fill"></i>
              </li>
              <li>
                <i class="ri-star-fill"></i>
              </li>
              <li>
                <i class="ri-star-half-line"></i>
              </li>
            </ul>
            <p class="mb-0 fw-medium fs-15 text-dark">4.5 <span class="text-muted fs-13">(5809 Review)</span></p>
          </div>
        </div>
        <div>
          <div class="avatar bg-dark rounded">
            <div class="avatar-title">
              <Icon icon="solar:point-on-map-perspective-bold" class="fs-30 text-light" />
            </div>
          </div>
        </div>
      </div>
    </b-card-body>
  </b-card>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";

const worldMapOptions = {
  map: 'world',
  selector: '#agent-location',
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