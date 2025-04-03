<template>
    <div class="min-h-screen bg-gray-100">
      <nav class="bg-blue-600 text-white p-4 flex justify-between">
        <div class="text-xl font-bold">Product Manager</div>
        <div>
          <Link href="/products" class="px-4 hover:underline">Products</Link>
          <Link href="/create" class="px-4 hover:underline">Create Product</Link>
          <Link href="/" class="px-4 hover:underline">Home</Link>
        </div>
      </nav>
      <div class="p-6">
        <slot />
      </div>
    </div>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3';
  </script>
  