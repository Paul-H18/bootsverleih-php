<template>
  <v-app class="bg-gray-900 text-gray-100">
    <div class="grid-stack">
      <template v-for="item in items" :key="item.id">
        <div class="grid-stack-item" :class="{'grid-stack-static': !item.is_active }" gs-w="1" gs-h="1" :gs-x="item.pos_x" :gs-y="item.pos_y">
          <div class="grid-stack-item-content">
            <bookable-card :bookable="item" />
          </div>
        </div>
      </template>
    </div>
  </v-app>
</template>

<script setup>
import { GridStack } from 'gridstack'
import 'gridstack/dist/gridstack.min.css'
import {onMounted} from "vue";
import BookableCard from "./components/BookableCard.vue";

const props = defineProps({
  items: Array,
})


onMounted(() => {
  const grid = GridStack.init({
    disableResize: true,
    cellHeight: 150,
    margin: 25,
    maxRow: 4,
    column: 11,
    disableOneColumnMode: true,
    minRow: 4,
    float: true,
    columnOpts: {
      columnWidth: 150,
    },
  });
});


</script>

<style scoped>

.grid-stack {
  background-color: #00b0ff;
}

.grid-stack-item {
  display: flex;
  justify-content: center;
  align-items: center;
}

.grid-stack-item-content {
  overflow: hidden;
  background: white;
  border: 1px solid #e0e0e0;
  border-radius: 4px;
}


</style>