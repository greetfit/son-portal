<template>
  <VerticalLayout>
    <PageTitle title="Add Property" subtitle="Real Estate" />
    <b-row>
      <b-col xl="3" lg="4">
        <PropertyCard />
      </b-col>
      <b-col xl="9" lg="8">
        <FileUpload title="Add Property Photo" />
        <PropertyInfo />
        <div class="mb-3 rounded">
          <b-row class="justify-content-end g-2">
            <b-col lg="2">
              <a href="#!" class="btn btn-outline-primary w-100">Create Product</a>
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
import PropertyCard from "@/views/property/create/components/PropertyCard.vue";
import PropertyInfo from "@/views/property/create/components/PropertyInfo.vue";
import FileUpload from "@/components/FileUpload.vue";
</script>