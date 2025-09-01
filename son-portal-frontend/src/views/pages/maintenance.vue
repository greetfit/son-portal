<template>
  <AuthLayout>
    <b-col xl="12">
      <b-card no-body class="auth-card">
        <b-card-body class="p-0">
          <b-row class="align-items-center g-0">
            <b-col lg="4" class="d-none d-lg-inline-block border-end">
              <div class="auth-page-sidebar">
                <img :src="maintenance" alt="auth" class="img-fluid" />
              </div>
            </b-col>
            <b-col lg="8">
              <div class="p-4">
                <div class="mx-auto mb-5 text-center auth-logo">
                  <router-link to="/" class="logo-dark">
                    <img :src="logodark" height="32" alt="logo dark" />
                  </router-link>
                  <router-link to="/" class="logo-light">
                    <img :src="logolight" height="28" alt="logo light" />
                  </router-link>
                </div>
                <h2 class="fw-bold text-center lh-base">We are currently performing maintenance</h2>
                <p class="text-muted text-center mt-1 mb-4">We're making the system more awesome. We'll be back shortly.</p>
                <div class="text-center">
                  <a href="#" class="btn btn-danger">Contact Us</a>
                </div>
              </div>
            </b-col>
          </b-row>
        </b-card-body>
      </b-card>
    </b-col>
  </AuthLayout>
</template>
<script setup lang="ts">
import AuthLayout from '@/layouts/AuthLayout.vue'

import maintenance from '@/assets/images/maintenance.svg'
import logodark from '@/assets/images/logo-dark.png'
import logolight from '@/assets/images/logo-light.png'
</script>
