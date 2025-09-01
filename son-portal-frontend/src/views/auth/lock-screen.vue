<template>
  <AuthLayout>
    <b-col xl="5">
      <b-card no-body class="auth-card">
        <b-card-body class="px-3 py-5">
          <div class="mx-auto text-center">
            <LogoBox custom-class="auth-logo mb-4" :logo-height="30"/>
          </div>

          <h2 class="fw-bold text-center fs-18">Hi ! Gaston</h2>
          <p class="text-muted text-center mt-1 mb-4">Enter your password to access the admin.</p>

          <div class="px-4">
            <b-form class="authentication-form">
              <b-form-group class="mb-3">
                <b-form-input type="password" id="example-password" name="password"
                              class="bg-light bg-opacity-50 border-light py-2" placeholder="Enter your password"/>
              </b-form-group>

              <div class="mb-1 text-center d-grid">
                <b-button variant="danger" type="submit">Sign In</b-button>
              </div>
            </b-form>
          </div>
        </b-card-body>
      </b-card>
      <p class="mb-0 text-center text-white">Not you? return
        <router-link :to="{ name: 'auth.sign-up' }"
                     class="text-reset text-unline-dashed fw-bold ms-1">Sign Up
        </router-link>
      </p>
    </b-col>
  </AuthLayout>
</template>

<script setup lang="ts">
import AuthLayout from '@/layouts/AuthLayout.vue';
import LogoBox from "@/components/LogoBox.vue";
</script>
