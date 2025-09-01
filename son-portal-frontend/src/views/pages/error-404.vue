<template>
  <AuthLayout>
    <b-col xl="6">
      <b-card no-body class="auth-card">
        <b-card-body class="p-0">
          <b-row class="align-items-center g-0">
            <b-col>
              <div class="p-4">
                <div class="mx-auto mb-4 text-center">
                  <div class="mx-auto text-center auth-logo">
                    <router-link to="/" class="logo-dark">
                      <img :src="logodark" height="32" alt="logo dark" />
                    </router-link>
                    <router-link to="/" class="logo-light">
                      <img :src="logolight" height="28" alt="logo light" />
                    </router-link>
                  </div>

                  <img :src="images404" alt="auth" height="250" class="mt-5 mb-3" />

                  <h2 class="fs-22 lh-base">Page Not Found !</h2>
                  <p class="text-muted mt-1 mb-4">
                    The page you're trying to reach seems to have gone <br />
                    missing in the digital wilderness.
                  </p>

                  <div class="text-center">
                    <router-link to="/" class="btn btn-danger">Back to Home</router-link>
                  </div>
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

import logodark from '@/assets/images/logo-dark.png'
import logolight from '@/assets/images/logo-light.png'
import images404 from '@/assets/images/404.svg'
</script>
