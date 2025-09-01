<template>
  <b-card no-body>
    <b-card-header>
      <b-card-title>Property Photos</b-card-title>
    </b-card-header>
    <b-card-body>
      <b-carousel controls>
        <b-carousel-slide v-for="(item, idx) in properties" :key="idx" :img-src="item.img" caption-tag="span">
          <template #caption>
            <div class="d-none d-md-block bg-light rounded p-2 text-start">
              <div class="d-flex align-items-center gap-2">
                <div class="avatar bg-primary rounded">
                  <div class="avatar-title">
                    <Icon :icon="item.icon" class="fs-24 text-white" />
                  </div>
                </div>
                <div>
                  <a href="#!" class="text-dark fw-medium fs-16">{{ item.name }}</a>
                  <p class="text-muted mb-0">{{ item.location }}</p>
                </div>
              </div>
            </div>
          </template>
        </b-carousel-slide>
      </b-carousel>
    </b-card-body>
  </b-card>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
import { properties } from "@/views/agents/[id]/components/data";
</script>