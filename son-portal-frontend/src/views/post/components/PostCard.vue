<template>
  <b-card no-body>
    <b-card-body class="p-2">
      <div class="ratio ratio-16x9">
        <iframe :src="item.link" class="rounded"></iframe>
      </div>
      <span class="text-dark d-inline-block my-2">
        <a href="#" class="text-dark fs-18 fw-medium">{{ item.title }}</a>
        <div>
        <span v-for="tag in item.tags"
              :class="`badge px-2 py-1 bg-${tag == 'Tutorials' ? 'success' : tag == 'News' ? 'warning' : tag == 'Homes' ? 'primary' : 'danger'}-subtle text-${tag == 'Tutorials' ? 'success' : tag == 'News' ? 'warning' : tag == 'Homes' ? 'primary' : 'danger'} ms-1`">{{
            tag
          }}</span>
        </div>
      </span>
      <p class="text-muted">{{ item.description }}</p>
      <div class="d-flex align-items-center gap-1">
        <div class="d-block flex-grow-1">
          <span class="text-dark">
            <a href="#" class="text-dark fw-medium">{{ item.name }}</a>
          </span>
          <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> {{
              item.date.toLocaleString('en-us', {
                month: 'short',
                day: '2-digit',
                year: 'numeric'
              })
            }}</p>
        </div>
        <div class="ms-auto">
          <span class="">
            <button type="button"
                    class="btn btn-soft-danger avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded-circle p-0">
              <Icon icon="solar:heart-broken"/></button>
          </span>
        </div>
      </div>

    </b-card-body>
  </b-card>
</template>

<script setup lang="ts">
import type {PropType} from "vue";
import type {PostType} from "@/views/post/components/data";
import {Icon} from "@iconify/vue";

defineProps({
  item: {
    type: Object as PropType<PostType>,
    required: true
  }
})
</script>
