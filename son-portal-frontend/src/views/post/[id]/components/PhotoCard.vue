<template>
  <b-card no-body class="mt-4">
    <b-card-header class="d-flex border-bottom border-dashed">
      <b-card-title tag="h4">Photo And Video</b-card-title>
      <div class="ms-auto">
        <a href="#" class="text-muted fw-semibold">See all</a>
      </div>
    </b-card-header>
    <b-card-body>
      <b-row class="g-0">
        <b-col lg="4" v-for="(item,idx) in images" :key="idx">
          <a href="#" class="d-block m-1">
            <img :src="item" alt="" class="img-fluid rounded">
          </a>
        </b-col>
      </b-row>
    </b-card-body>
  </b-card>
</template>

<script setup lang="ts">
import small1 from '@/assets/images/small/img-1.jpg'
import small2 from '@/assets/images/small/img-2.jpg'
import small3 from '@/assets/images/small/img-3.jpg'
import small4 from '@/assets/images/small/img-4.jpg'
import small5 from '@/assets/images/small/img-5.jpg'
import small6 from '@/assets/images/small/img-6.jpg'
import small7 from '@/assets/images/small/img-7.jpg'
import small8 from '@/assets/images/small/img-8.jpg'
import small9 from '@/assets/images/small/img-9.jpg'
import small10 from '@/assets/images/small/img-10.jpg'

const images = [small1, small2, small3, small4, small5, small6, small7, small8, small9, small10, small4, small5]

</script>
