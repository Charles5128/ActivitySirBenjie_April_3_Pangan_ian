<template>
  <Layout>
      <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
          <h2 class="text-2xl font-semibold text-center text-blue-600">Create a New Product</h2>
          <form @submit.prevent="submitProduct" class="space-y-4">
              <div>
                  <label class="block text-gray-700">Product Name</label>
                  <input v-model="form.name1" type="text" class="w-full p-2 border rounded-lg" required />
                  <p v-if="errors.name1" class="text-red-500 text-sm">{{ errors.name1 }}</p>
              </div>

              <div>
                  <label class="block text-gray-700">Description</label>
                  <textarea v-model="form.description" class="w-full p-2 border rounded-lg" required></textarea>
                  <p v-if="errors.description" class="text-red-500 text-sm">{{ errors.description }}</p>
              </div>

              <div>
                  <label class="block text-gray-700">Price (PHP)</label>
                  <input v-model="form.price" type="number" step="0.1" class="w-full p-2 border rounded-lg" required />
                  <p v-if="errors.price" class="text-red-500 text-sm">{{ errors.price }}</p>
              </div>

              <div>
                  <label class="block text-gray-700">Quantity</label>
                  <input v-model="form.quantity" type="number" class="w-full p-2 border rounded-lg" required />
                  <p v-if="errors.quantity" class="text-red-500 text-sm">{{ errors.quantity }}</p>
              </div>

              <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">
                  Add Product
              </button>
          </form>
      </div>
  </Layout>
</template>

<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import Layout from '../Layouts/Layout.vue';

const form = ref({
  name1: '',
  description: '',
  price: '',
  quantity: ''
});

const errors = ref({});

const submitProduct = () => {
  errors.value = {};

  if (!form.value.name1) errors.value.name1 = "Product name is required.";
  if (!form.value.description) errors.value.description = "Description is required.";
  if (!form.value.price) errors.value.price = "Price is required.";
  if (!form.value.quantity) errors.value.quantity = "Quantity is required.";

  if (Object.keys(errors.value).length === 0) {
      router.post('/products', form.value, {
          onSuccess: () => {
              form.value = { name1: '', description: '', price: '', quantity: '' };
          },
          onError: (error) => {
              errors.value = error;
          }
      });
  }
};
</script>
