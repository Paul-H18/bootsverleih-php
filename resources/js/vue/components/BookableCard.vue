<template>
  <v-app>
    <v-card class="h-full w-full p-1 border-gray-900"
            :class="[bookable.is_active ? 'active' : 'inactive']"
    >
      <div class="-rotate-90 text-xs font-light">
        {{ bookable.name }}
      </div>
    </v-card>
  </v-app>
</template>

<script setup>

const props = defineProps({
  bookable: {
    type: Object,
  }
});

</script>

<style scoped>

.active {
  background-color: #00c853;
  color: black;
  cursor: pointer;
}

.inactive {
  background-color: #dc0027;
  color: black;
  cursor: not-allowed;
}


</style>