<template>
  <VerticalLayout>
    <PageTitle title="Messages" subtitle="Real Estate"/>

    <b-row class="g-1">
      <b-col xxl="3">

        <b-offcanvas size="xxl" id="chat-sidebar" class="h-100" placement="start" no-header body-class="p-0">
          <ChatSidebar/>
        </b-offcanvas>

        <div class="d-md-block d-none">
          <ChatSidebar/>
        </div>

      </b-col>

      <b-col xxl="9">
        <ChatArea/>
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import PageTitle from "@/components/PageTitle.vue";
import ChatSidebar from "@/views/messages/components/ChatSidebar.vue";
import ChatArea from "@/views/messages/components/ChatArea.vue";
</script>