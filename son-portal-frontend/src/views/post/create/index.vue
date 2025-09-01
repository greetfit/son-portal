<template>
  <VerticalLayout>
    <PageTitle title="Blog Create" subtitle="Blog"/>

    <b-row>

      <b-col xl="3" lg="4">
        <CreatePostCard/>
      </b-col>

      <b-col xl="9" lg="8">

        <FileUpload/>

        <b-card no-body>
          <b-card-header>
            <b-card-title tag="h4">Blog Information</b-card-title>
          </b-card-header>
          <b-card-body>
            <b-row>
              <b-col lg="6">
                <b-form-group label="Blog Title" class="mb-3">
                  <b-form-input type="text" placeholder="Name"/>
                </b-form-group>
              </b-col>
              <b-col lg="6">
                <ChoicesSelect id="choices-multiple-remove-button" label="Blog Tag" v-model="selectedBlogTag"
                               :options="blogTagOptions" multiple/>
              </b-col>
              <b-col lg="12">
                <b-form-group label="Add Description" class="mb-3">
                  <b-form-textarea id="blog-detail" :rows="3" placeholder="Description"/>
                </b-form-group>
              </b-col>
            </b-row>
          </b-card-body>
        </b-card>
        <b-card no-body>
          <b-card-header>
            <b-card-title tag="h4">Blog User Information</b-card-title>
          </b-card-header>
          <b-card-body>
            <b-row>
              <b-col lg="6">
                <b-form-group label="User Name" class="mb-3">
                  <b-form-input type="text" id="blog-user-name" placeholder="Name"/>
                </b-form-group>
              </b-col>
              <b-col lg="6">
                <b-form-group label="Date" class="mb-3">
                  <FlatPicker v-model="date" id="datetime-datepicker" placeholder="dd-mm-yyyy"
                              :options="{ dateFormat: 'd-m-Y' }"/>
                </b-form-group>
              </b-col>
              <b-col lg="12">
                <b-form-group label="User Detail">
                  <b-form-textarea id="user-detail" :rows="4" placeholder="Description"/>
                </b-form-group>
              </b-col>
            </b-row>
          </b-card-body>
        </b-card>
        <div class="mb-3 rounded">
          <b-row class="justify-content-end g-2">
            <b-col lg="2">
              <a href="#" class="btn btn-outline-primary w-100">Create Blog</a>
            </b-col>
            <b-col lg="2">
              <a href="#" class="btn btn-danger w-100">Cancel</a>
            </b-col>
          </b-row>
        </div>
      </b-col>
    </b-row>

  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import PageTitle from "@/components/PageTitle.vue";
import CreatePostCard from "@/views/post/create/components/CreatePostCard.vue";
import FileUpload from "@/components/FileUpload.vue";
import ChoicesSelect from "@/components/ChoicesSelect.vue";
import FlatPicker from '@/components/FlatPicker.vue';
import {ref} from "vue";


const selectedBlogTag = ref('Blog')

const blogTagOptions = [
  {text: 'Blog', value: 'Blog'},
  {text: 'Business', value: 'Business'},
  {text: 'Health', value: 'Health'},
  {text: 'Computer Software', value: 'Computer Software'},
  {text: 'Lifestyle blogs', value: 'Lifestyle blogs'},
  {text: 'Fashion', value: 'Fashion'},
]

const date = ref()
</script>