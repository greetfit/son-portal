<template>
  <VerticalLayout>
    <PageTitle title="Inbox" subtitle="Real Estate"/>
    <b-card no-body>
      <b-row class="g-0">

        <b-col xl="2">

          <div class="d-md-block d-none">
            <EmailNavigationMenu/>
          </div>

          <b-offcanvas size="xl" placement="start" no-header id="navigation-menu">
            <EmailNavigationMenu/>
          </b-offcanvas>

        </b-col>

        <b-col xl="3">

          <div class="d-md-block d-none">
            <InboxMail/>
          </div>

          <b-offcanvas size="xl" placement="end" no-header id="inbox-mail" body-class="px-0">
            <InboxMail/>
          </b-offcanvas>

        </b-col>

        <b-col xl="7">
          <EmailView/>
        </b-col>

      </b-row>
    </b-card>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import PageTitle from "@/components/PageTitle.vue";
import EmailNavigationMenu from "@/views/inbox/components/EmailNavigationMenu.vue";
import InboxMail from "@/views/inbox/components/InboxMail.vue";
import EmailView from "@/views/inbox/components/EmailView.vue";
</script>