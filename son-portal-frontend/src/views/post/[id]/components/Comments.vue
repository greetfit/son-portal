<template>
  <div v-for="(item,idx) in commentsData" :class="`ps-0 pt-3 mt-3 ${idx == 0 && 'border-top'}`" :key="idx">
    <div class="d-sm-flex align-items-top">
      <div class="position-relative">
        <img :src="item.image" alt="" class="avatar rounded-circle flex-shrink-0">
      </div>
      <div class="flex-grow-1 ms-sm-3">
        <span class="">
          <a href="#" class="text-dark fw-medium">{{ item.name }}}</a>
        </span>
        <p class="text-muted mb-2">{{
            item.date.toLocaleString('en-us', {
              month: 'short',
              day: '2-digit',
              year: 'numeric',
              hour: 'numeric',
              minute: "numeric"
            })
          }}</p>

        <p class="text-muted">{{ item.description }}</p>
        <div class="d-flex gap-3 fs-16">
          <a href="#" class="d-flex align-items-center text-dark">
            <Icon icon="solar:like-bold-duotone" class="me-1"/>
            {{ item.like }}</a>
          <a href="#" class="d-flex align-items-center text-dark">
            <Icon icon="solar:chat-square-call-bold" class="me-1"/>
            {{ item.comment }}</a>
        </div>
        <template v-if="item.reply">

          <div v-for="(reply,idx) in item.reply" class="d-sm-flex align-items-top mt-4 " :key="idx">
            <div class="position-relative">
              <img :src="reply.image" alt='avatar' class="avatar rounded-circle flex-shrink-0"/>
            </div>
            <div class="flex-grow-1 ms-sm-3">
                        <span>
                          <a href="#" class="text-dark fw-medium">{{ reply.name }}</a>
                        </span>
              <p class="text-muted mb-2">{{
                  reply.date.toLocaleString('en-us', {
                    month: 'short', day: '2-digit', year:
                        'numeric', hour: 'numeric', minute: "numeric"
                  })
                }}</p>
              <p class="text-muted">{{ reply.description }}</p>
              <div class="d-flex gap-3 fs-16">
                <a href="#!" class="d-flex align-items-center text-dark">
                  <Icon icon="solar:like-bold-duotone" class="me-1"/>
                  {{ reply.like }}</a>
                <a href="#!" class="d-flex align-items-center text-dark">
                  <Icon icon="solar:chat-square-call-bold" class="me-1"/>
                  {{ reply.comment }}</a>
              </div>
            </div>
          </div>
        </template>
      </div>

      <a href="#" data-bs-toggle="tooltip" data-bs-title="Comment" data-bs-placement="top">
        <div class="avatar-sm flex-shrink-0 mt-2 ">
                  <span class="avatar-title bg-light text-dark fs-4 rounded border border-dashed">
                    <Icon icon="solar:chat-square-bold-duotone"/>
                  </span>
        </div>
      </a>

    </div>
  </div>
</template>

<script setup lang="ts">
import {Icon} from "@iconify/vue";
import {commentsData} from "@/views/post/[id]/components/data";
</script>
