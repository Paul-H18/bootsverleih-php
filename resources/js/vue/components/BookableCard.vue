<template>
  <v-app>
    <v-card class="h-full w-full"
            :class="[bookable.is_active ? 'active' : 'inactive']"
            :disabled="!bookable.is_active"
            @click="prepareCheckout"
    >
      <div class="text-xs font-light flex justify-center item-center pt-4">
        <span>
          {{ bookable.name }}
        </span>
        <span v-if="bookable.has_boat">
          <span>b</span>
          <v-icon icon="mdi-sail-boat"></v-icon>
        </span>
      </div>
    </v-card>
  </v-app>
</template>

<script setup>

const props = defineProps({
  bookable: {
    type: Object,
  },
  user: {
    type: Object
  }
});

const emit = defineEmits(['checkout']);


function prepareCheckout() {
  emit('checkout', {
    bookable: props.bookable
  })

}

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