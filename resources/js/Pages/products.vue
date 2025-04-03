<template>
  <Layout>
      <div class="max-w-4xl mx-auto">
          <h2 class="text-3xl font-semibold text-center text-blue-600 mb-6">Product List</h2>
          <div v-if="products.length === 0" class="text-center text-gray-500">No products available.</div>
          <div v-else class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div v-for="product in products" :key="product.id" class="bg-white p-4 rounded-lg shadow-md">
                  <h3 class="text-xl font-semibold text-blue-700">{{ product.name }}</h3>
                  <p class="text-gray-600">{{ product.description }}</p>
                  <p class="text-gray-800 font-bold">₱{{ product.price }}</p>
                  <p class="text-gray-600">Quantity: {{ product.quantity }}</p>
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
