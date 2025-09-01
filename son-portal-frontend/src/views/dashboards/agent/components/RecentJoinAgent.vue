<template>
  <b-card no-body>
    <b-card-header class="d-flex justify-content-between align-items-center border-0">
      <div>
        <b-card-title class="mb-1">Recent Join Agent</b-card-title>
        <p class="mb-0 fs-13">190 Agent Join</p>
      </div>
      <b-dropdown variant="link" toggle-class="p-0 m-0" menu-class="dropdown-menu-end" no-caret>
        <template v-slot:button-content>
          <a href="#" class="dropdown-toggle rounded arrow-none">
            <i class="ri-edit-box-line fs-20 text-dark"></i>
          </a>
        </template>

        <b-dropdown-item>New Agent</b-dropdown-item>
        <b-dropdown-item>Old Agent</b-dropdown-item>
      </b-dropdown>
    </b-card-header>
    <b-card-body class="pt-2">
      <template v-for="(item, idx) in recentJoinAgent" :key="idx">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2"
          :class="!idx ? 'border-bottom pb-3' : idx === recentJoinAgent.length - 1 ? 'pt-3' : 'border-bottom py-3'">
          <div class="d-flex align-items-center gap-2">
            <div class="avatar">
              <img :src="item.img" alt="avatar-3" class="img-fluid rounded-circle">
            </div>
            <div class="d-block">
              <span class="text-dark">
                <a href="#!" class="text-dark fw-medium fs-15">{{ item.name }}</a>
              </span>
              <p class="mb-0 fs-13 text-muted">{{ item.email }}</p>
            </div>
          </div>
          <div>
            <p class="text-muted fw-medium mb-0">{{ item.date }}</p>
          </div>
        </div>
      </template>
    </b-card-body>
    <b-card-footer class="border-top">
      <a href="#!" class="btn btn-primary w-100">View All</a>
    </b-card-footer>
  </b-card>
</template>
<script setup lang="ts">
import avatar1 from "@/assets/images/users/avatar-1.jpg";
import avatar2 from "@/assets/images/users/avatar-2.jpg";
import avatar3 from "@/assets/images/users/avatar-3.jpg";
import avatar5 from "@/assets/images/users/avatar-5.jpg";

const recentJoinAgent = [
  {
    name: 'Ryan G. Harris',
    img: avatar1,
    email: 'ryangharris@jourrapide.com',
    date: 'May 2024'
  },
  {
    name: 'Michael Coch',
    img: avatar2,
    email: 'michaelbco@armyspy.com',
    date: 'May 2024'
  },
  {
    name: 'Danielle C. Thom',
    img: avatar3,
    email: 'danielompson@dayrep.com',
    date: 'May 2024'
  },
  {
    name: 'Julia V. Quincy',
    img: avatar5,
    email: 'juliabquincy@armyspy.com',
    date: 'May 2024'
  },
];
</script>