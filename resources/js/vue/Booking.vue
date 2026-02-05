<template>
  <v-app v-if="props.user" class="bg-gray-900 text-gray-100">
    <div class="flex flex-col gap-8 justify-center">
      <Header>
        Buchung
      </Header>
      <span class="text-sm text-center">
        Bitte wählen Sie den gewünschten Anleger, ggf. mit Boot, mit einem Klick aus.
        Danach können Sie mit der Buchung fortfahren.
      </span>
      <div class="grid-stack">
        <template v-for="item in items" :key="item.id">
          <div class="grid-stack-item"
               gs-w="1"
               gs-h="1"
               :data-item-id="item.id"
               :gs-x="item.pos_x"
               :gs-y="item.pos_y"
          >
            <div class="grid-stack-item-content">
              <bookable-card :user="props.user" :bookable="item" @checkout="prepareCheckout"/>
            </div>
          </div>
        </template>
      </div>
      <span v-if="activeItem">
        <Checkout ref="checkout" :user="props.user" v-model:bookable="activeItem"></Checkout>
      </span>
    </div>
  </v-app>
</template>

<script setup>
import { GridStack } from 'gridstack'
import 'gridstack/dist/gridstack.min.css'
import { ref, onMounted, watch, nextTick } from 'vue';
import BookableCard from "./components/BookableCard.vue";
import Header from "./components/Header.vue";
import {UserRoles} from "../utils/Constants.js";
import Checkout from "./components/Checkout.vue";

const props = defineProps({
  items: {
    type: Array,
  },
  user: {
    type: Object,
  },
})

const activeItem = ref(null);
const checkout = ref(null);


onMounted(() => {
  console.log(props.user)
  const grid = GridStack.init({
    disableResize: true,
    cellHeight: 150,
    margin: 25,
    maxRow: 4,
    column: 11,
    disableOneColumnMode: true,
    minRow: 4,
    swap: false,
    float: true,
    columnOpts: {
      columnWidth: 150,
    },
  });

  /*grid.on('change', (event, items) => {
    console.log('Grid changed - automatisch oder manuell:', items);

    items.forEach(item => {
      console.log(item);
      // item enthält: { id, x, y, w, h, ... }
    });
  });*/


  grid.on('dragstart', (event, elm) => {
    if(props.user.role !== UserRoles.ADMIN) {
      event.preventDefault();
      event.stopPropagation();
      return false;
    }
  });


  grid.on('dragstop', (event, elm) => {
    const itemId = elm.dataset.itemId;
    const node = elm.gridstackNode;
    console.log('Stopped x/y: ', node.x, node.y)
  })

});


async function prepareCheckout(event) {
  const oldId = activeItem?.value?.id;

  if((!event || !event.bookable) && event.bookable.id === oldId) {
    return;
  }

  activeItem.value = null;
  activeItem.value = event.bookable;

  // DOM refresh
  await nextTick();

  scrollToCheckout();
}

function scrollToCheckout() {
  checkout.value.$el.scrollIntoView({
    behavior: 'smooth',
    block: 'center',
  });
}


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
  overflow: hidden !important;
  border-radius: 8px;
}


</style>