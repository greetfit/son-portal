<template>
  <VerticalLayout>
    <PageTitle title="Customers Add" subtitle="Customers" />
    <b-row>
      <b-col xl="3" lg="12">
        <CustomerCard />
      </b-col>

      <b-col xl="9" lg="12">
<FileUpload title="Add Customer Photo" />
        <CustomerInfo />
        <div class="mb-3 rounded">
          <b-row class="justify-content-end g-2">
            <b-col lg="2">
              <a href="#!" class="btn btn-outline-primary w-100">Create Customer</a>
            </b-col>
            <b-col lg="2">
              <a href="#!" class="btn btn-danger w-100">Cancel</a>
            </b-col>
          </b-row>
        </div>
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import CustomerCard from "@/views/customers/create/components/CustomerCard.vue"
import CustomerInfo from "@/views/customers/create/components/CustomerInfo.vue"
import FileUpload from "@/components/FileUpload.vue";
</script>