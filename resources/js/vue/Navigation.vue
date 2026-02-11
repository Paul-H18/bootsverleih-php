<template>
  <div class="flex items-center justify-center mt-3 mb-3 w-full">
    <navbar class="w-3/4 h-16 flex gap-16 justify-center items-center bg-emerald-500 rounded-3xl sm:gap-8">
      <template v-for="item in navigationItems">
        <a class="text-lg"
            :href="item.route">
          {{ item.label }}
        </a>
      </template>
    </navbar>
  </div>
</template>

<script setup>
import {NavigationItems} from "../utils/Constants.js";

console.log('Navbar loaded')


const navigationItems = NavigationItems;

</script>

<style scoped>


</style>