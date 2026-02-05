<template>
  <v-card class="w-1/4 h-40 bg-emerald-500 rounded-3xl p-3 flex flex-col gap-2 items-start justify-center"
          v-if="bookable"
  >
    <span class="text-sm text-black text-center">
      Anleger Bezeichnung: {{ bookable.name }}
    </span>
    <span class="text-sm text-black text-center">
      Boot inkl.: {{ bookable.has_boat ? 'Ja' : 'Nein' }}
    </span>
    <span class="text-sm text-black text-center">
      Preis: {{ bookable.price }} €
    </span>
    <span class="text-sm text-black text-center">
      Buchung möglich: {{ bookable.is_active ? 'Ja' : 'Nein' }}
    </span>
  </v-card>
</template>

<script setup>

const bookable = defineModel('bookable');

</script>

<style scoped>

</style>