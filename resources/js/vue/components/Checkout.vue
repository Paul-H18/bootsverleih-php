<template>
  <div class="w-full">
    <Header>
      Checkout
    </Header>
    <div v-if="bookable" class="flex justify-center gap-10 m-8 mb-32">
      <PierInfoCard v-model:bookable="bookable" />
      <v-card class="w-2/4 h-80 bg-emerald-500 rounded-3xl p-3 flex flex-col gap-2 items-start justify-center">

      </v-card>
    </div>
  </div>
</template>

<script setup>

import Header from "./Header.vue";
import PierInfoCard from "./PierInfoCard.vue";

const bookable = defineModel('bookable')

const props = defineProps({
  user: {
    type: Object
  }
});


</script>

<style scoped>

</style>