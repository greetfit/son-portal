<template>
  <b-col lg="6">
    <b-card no-body>
      <b-card-header>
        <b-card-title>Customer By Country</b-card-title>
      </b-card-header>
      <b-card-body>
        <JsVectorMap id="world-map-markers" :height="448" :options="worldMapOptions" />
      </b-card-body>
    </b-card>
  </b-col>
</template>
<script setup lang="ts">
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