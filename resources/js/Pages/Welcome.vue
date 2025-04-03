<template>
  <Layout>
    <div class="relative min-h-screen bg-cover bg-center flex flex-col items-center justify-center text-center" 
         style="background-image: url('/images/mdc.png');">
      <div class="bg-white bg-opacity-80 p-6 rounded-lg shadow-lg">
        <img src="/home/charlesianpangan/inertia-vue-basic-starter/public/images/ian.jpg" 
             alt="Ian's Image" class="mx-auto w-40 h-40 rounded-full shadow-lg" />
        <h1 class="text-4xl font-bold text-blue-700 mt-4">Welcome to the Product Manager</h1>
        <p class="text-gray-600 mt-4">March 27 Sir Benjie Activity</p>
      </div>
    </div>
  </Layout>
</template>

<script setup>
import Layout from '../Layouts/Layout.vue';
</script>
