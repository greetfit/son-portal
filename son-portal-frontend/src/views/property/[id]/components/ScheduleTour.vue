<template>
  <b-card no-body>
    <b-card-header class="bg-light-subtle">
      <b-card-title>Schedule A Tour</b-card-title>
    </b-card-header>
    <b-card-body>
      <form>
        <b-form-group class="mb-3">
          <b-form-input id="schedule-date" placeholder="dd-mm-yyyy" />
        </b-form-group>
        <b-form-group class="mb-3">
          <b-form-input id="schedule-time" placeholder="12:00 PM" />
        </b-form-group>
        <b-form-group class="mb-3">
          <b-form-input id="schedule-name" placeholder="Your Full Name" />
        </b-form-group>
        <b-form-group class="mb-3">
          <b-form-input type="email" id="schedule-email" placeholder="Email" />
        </b-form-group>
        <b-form-group class="mb-3">
          <b-form-input type="number" id="schedule-number" placeholder="Number" />
        </b-form-group>
        <b-form-group>
          <b-form-textarea id="schedule-textarea" rows="5" placeholder="Message" />
        </b-form-group>
      </form>

    </b-card-body>
    <b-card-footer class="bg-light-subtle">
      <a href="#!" class="btn btn-primary w-100">Send Information</a>
    </b-card-footer>
  </b-card>
</template>
<script setup lang="ts">
</script>