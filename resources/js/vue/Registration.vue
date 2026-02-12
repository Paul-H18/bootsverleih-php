<template>
    <v-app>
        <v-main>
            <div class="bg-gray-900 w-full h-full flex justify-center align-center">
                <v-card class="w-2/4 h-3/4 bg-emerald-500 flex flex-col justify-center align-center rounded-3xl"
                        variant="elevated"
                        elevation="16"
                >
                  <h1 class="text-3xl mt-6">Registrierung</h1>
                    <v-form ref="formElement" class="p-16 w-full h-full flex flex-col gap-4" @submit.prevent="submitForm" :action="actionUrl" method="POST">
                        <input type="hidden" :name="csrfToken" :value="csrfHash">
                        <v-text-field v-model="form.email"
                                      name="email"
                                      label="E-Mail Adresse"
                                      type="email"
                                      class="bg-emerald-500 active:bg-emerald-500  h-12"
                                      :rules="rules.email"
                        >

                        </v-text-field>
                        <v-text-field v-model="form.firstname"
                                      name="firstname"
                                      label="Vorname"
                                      class="bg-emerald-500 active:bg-emerald-500  h-12"
                                      :rules="rules.firstname"
                        >

                        </v-text-field>
                        <v-text-field v-model="form.lastname"
                                      label="Name"
                                      class="bg-emerald-500 active:bg-emerald-500 h-12"
                                      :rules="rules.lastname"
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
                        <div class="flex gap-3 text-sm">
                            <input type="checkbox" v-model="form.is_admin" id="is_admin" class="" />
                            <label for="is_admin">Admin-Benutzer</label>
                        </div>
                        <div class="flex flex-row gap-6 items-center">
                          <v-btn class="w-1/4 bg-gray-900 text-gray-100" type="submit">Registrieren</v-btn>
                          <a :href="loginUrl" class="text-sm underline text-blue-700 duration-200 hover:text-blue-950">Oder hier einloggen</a>
                        </div>
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
const actionUrl = window.backend?.routes?.registration?.register || '#';

const loginUrl = window.backend?.routes?.login?.index;



const rules = {
    email: [
        v => !!v || 'E-Mail muss augefüllt sein!',
        v => /.+@.+\..+/.test(v) || 'E-Mail muss augefüllt und valide sein!',
    ],
    firstname: [
        v => !!v || 'Vorname muss augefüllt sein!',
    ],
    lastname: [
        v => !!v || 'Nachname muss augefüllt sein!',
    ],
    password: [
        v => !!v || 'Passwort muss augefüllt sein!',
        v => (v && v.length >= 4) || 'Passwort muss länger als 4 Zeichen sein',
    ],
}

async function submitForm() {
    const { valid } = await formElement.value.validate();

    if (valid) {
        formElement.value.$el.submit();
    }
}

</script>
