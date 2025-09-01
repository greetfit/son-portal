<template>
  <VerticalLayout>
    <PageTitle title="Blog Grid" subtitle="Blog"/>
    <b-row>
      <b-col xl="5" lg="12">
        <FreshArticle/>
      </b-col>
      <b-col xl="7" lg="12">
        <Articles/>
      </b-col>
    </b-row>
    <b-row>
      <b-col xl="3" lg="6" v-for="(item,idx) in postData" :key="idx">
        <PostCard :item="item"/>
      </b-col>
    </b-row>
  </VerticalLayout>
</template>

<script setup lang="ts">
import VerticalLayout from "@/layouts/VerticalLayout.vue";
import PageTitle from "@/components/PageTitle.vue";
import FreshArticle from "@/views/post/components/FreshArticle.vue";
import Articles from "@/views/post/components/Articles.vue";
import PostCard from "@/views/post/components/PostCard.vue";
import {postData} from "@/views/post/components/data";
</script>