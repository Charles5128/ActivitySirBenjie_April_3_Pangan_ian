<template>
  <Layout>
    <div class="max-w-6xl mx-auto px-6 py-10">
      <h2 class="text-5xl font-extrabold text-center text-blue-700 mb-10 tracking-wide">
        Product List
      </h2>

      <div v-if="products.length === 0" class="text-center text-gray-500 text-lg italic">
        No products available.
      </div>

      <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div v-for="product in products" :key="product.id"
          class="bg-white p-6 rounded-2xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
          <h3 class="text-2xl font-bold text-blue-800 mb-2">{{ product.name }}</h3>
          <p class="text-gray-600 text-lg mb-3">{{ product.description }}</p>
          <p class="text-gray-900 font-extrabold text-xl">₱{{ product.price }}</p>
          <p class="text-gray-600 text-lg">Quantity: <span class="font-semibold">{{ product.quantity }}</span></p>
        </div>
      </div>
    </div>
  </Layout>
</template>

<script setup>
import { defineProps } from 'vue';
import Layout from '../Layouts/Layout.vue';

defineProps({
  products: Array
});
</script>
