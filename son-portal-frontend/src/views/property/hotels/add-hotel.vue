<template>
  <VerticalLayout>
    <PageTitle title="Basic Form" subtitle="Form" />
    <b-row>
      <b-col xl="12">
        <form @submit.prevent="onSubmit">
          <UIComponentCard title="Testing form" id="basic">
            <div class="mt-3">
              <!-- ID -->
              <b-form-group label="ID" label-for="PostID" class="mb-3">
                <b-form-input
                  id="PostID"
                  type="number"
                  v-model.number="form.id"
                  :min="4"
                  :state="!errors.id"
                  placeholder="Enter ID (>= 4)"
                />
                <div class="invalid-feedback d-block" v-if="errors.id">
                  {{ errors.id[0] }}
                </div>
              </b-form-group>

              <!-- Title -->
              <b-form-group label="Title" label-for="Title" class="mb-3">
                <b-form-input
                  id="Title"
                  v-model="form.title"
                  :state="!errors.title"
                  placeholder="Enter title"
                />
                <div class="invalid-feedback d-block" v-if="errors.title">
                  {{ errors.title[0] }}
                </div>
              </b-form-group>

              <!-- Description -->
              <b-form-group label="Description" label-for="Description" class="mb-3">
                <b-form-input
                  id="Description"
                  v-model="form.description"
                  :state="!errors.description"
                  placeholder="Enter description"
                />
                <div class="invalid-feedback d-block" v-if="errors.description">
                  {{ errors.description[0] }}
                </div>
              </b-form-group>
            </div>

            <div class="text-right mt-5">
              <b-button
                id="lockbutton"
                variant="primary"
                type="submit"
                :disabled="loading"
              >
                <span v-if="loading" class="spinner-border spinner-border-sm me-2"></span>
                Submit
              </b-button>
            </div>
          </UIComponentCard>
        </form>
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import UIComponentCard from "@/components/UIComponentCard.vue";
import PageTitle from "@/components/PageTitle.vue";
import { ref } from "vue";
import { api } from "@/services/api"; // baseURL => dev: '/api' via proxy, prod: `${VITE_API_URL}/api`

const form = ref({ id: 4, title: "", description: "" }); // start from 4
const loading = ref(false);
const errors = ref<Record<string, string[]>>({});

async function onSubmit() {
  loading.value = true;
  errors.value = {};
  try {
    const { data } = await api.post("/posts", form.value);
    console.log("Saved:", data);
    // reset (keep id as-is; change if you want to auto-increment)
    form.value = { id: 4, title: "", description: "" };
  } catch (e: any) {
    if (e?.response?.status === 422) {
      errors.value = e.response.data.errors ?? {};
    } else {
      console.error(e);
    }
  } finally {
    loading.value = false;
  }
}
</script>
