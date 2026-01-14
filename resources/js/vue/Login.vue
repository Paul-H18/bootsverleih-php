<template>
  <v-app>
    <v-main>
      <div class="bg-gray-900 w-full h-full flex justify-center align-center">
        <v-card class="w-2/5 h-3/4 bg-emerald-500 flex justify-center align-center rounded-3xl"
                variant="elevated"
                elevation="16"
        >
          <v-form ref="formElement" class="p-16 w-full h-1/2 flex flex-col gap-12" @submit.prevent="submitForm" :action="actionUrl" method="POST">
            <input type="hidden" :name="csrfToken" :value="csrfHash" />
            <v-text-field v-model="form.email"
                          name="email"
                          label="E-Mail Adresse"
                          type="email"
                          class="bg-emerald-500 active:bg-emerald-500  h-12"
                          :rules="rules.email"
            >
            </v-text-field>
            <v-text-field v-model="form.password"
                          label="Passwort"
                          name="password"
                          type="password"
                          class="bg-emerald-500 active:bg-emerald-500  h-12"
                          :rules="rules.password"
            >

            </v-text-field>
            <v-btn class="w-1/4 bg-gray-900 text-gray-100" type="submit">Login</v-btn>
          </v-form>
        </v-card>
      </div>
    </v-main>
  </v-app>
</template>

<script setup>
import {ref} from "vue";

const formElement = ref(null);
const form = ref({});

const csrfToken = window.backend?.token || 'csrf_token_name';
const csrfHash = window.backend?.hash || '';
const actionUrl = window.backend?.routes?.login?.login || '#';


const rules = {
  email: [
    v => !!v || 'E-Mail muss augefüllt sein!',
    v => /.+@.+\..+/.test(v) || 'E-Mail ist nicht korrekt!',
  ],
  password: [
    v => !!v || 'Passwort muss augefüllt sein!',
    v => (v && v.length >= 4) || 'Passwort zu kurz',
  ],
}

async function submitForm() {
  const { valid } = await formElement.value.validate();

  if (valid) {
    formElement.value.$el.submit();
  }
}



</script>