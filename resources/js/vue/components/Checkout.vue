<template>
  <div class="w-full">
    <Header>
      Checkout
    </Header>
    <div v-if="bookable" class="flex justify-center gap-10 m-8 mb-32">
      <PierInfoCard v-model:bookable="bookable" />
      <v-card class="w-2/4 h-80 bg-emerald-500 text-lg rounded-3xl p-3 flex flex-col gap-2 items-center justify-center">
        <v-form ref="formElement" @submit.prevent="submitForm" :action="actionUrl" method="POST">
          <input type="hidden" :name="csrfToken" :value="csrfHash" />
          <div class="form-group">
            <label for="start_date">Von: </label>
            <input type="date" name="start_date" v-model="startDate">
          </div>
          <div class="form-group">
            <label for="end_date">Bis: </label>
            <input type="date" name="end_date" v-model="endDate">
          </div>
          <div class="text-orange-700 text-[8px] text-center mt-2">
            Achtung: Je nach Browser, Datumsangaben im US-Format!
          </div>

          <div>
            <v-select v-model="paymentMethod"
                      :items="paymentMethods"
                      label="Zahlungsmethode"
                      item-title="label"
                      item-value="method"
                      item-disabled="active"
            >

            </v-select>
          </div>

          <input type="hidden" name="payment_method" :value="paymentMethod" />
          <input type="hidden" name="pier_id" :value="bookable?.id" />

          <div class="flex justify-center w-full gap-2">
            <v-btn type="submit">Kostenpflichtig Buchen</v-btn>
          </div>

        </v-form>
      </v-card>
    </div>
  </div>
</template>

<script setup>

import Header from "./Header.vue";
import PierInfoCard from "./PierInfoCard.vue";
import {ref} from "vue";
import {PaymentMethods} from "../../utils/Constants.js";

const bookable = defineModel('bookable');

const paymentMethods = PaymentMethods;

const startDate = ref(null);
const endDate = ref(null);
const paymentMethod = ref(null);
const formElement = ref(null);

const csrfToken = window.backend?.token || 'csrf_token_name';
const csrfHash = window.backend?.hash || '';
const actionUrl = window.backend?.routes?.booking?.success || '#';

const props = defineProps({
  user: {
    type: Object
  }
});


function submitForm() {
  console.log(startDate.value)
  console.log(endDate.value)
  console.log(paymentMethod.value)

  if(endDate.value && startDate.value && paymentMethod.value) {
    formElement.value.$el.submit();
  }

}


</script>

<style scoped>

.form-group {
  display: flex;
  flex-direction: row;
  gap: 18px;

  border: #000000 solid 1px;
  border-radius: 25px;
  padding: 10px;
  margin-bottom: 10px;


}

</style>