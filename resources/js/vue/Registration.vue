<template>
    <v-app>
        <v-main>
            <div class="bg-gray-900 w-full h-full flex justify-center align-center">
                <v-card class="w-2/4 h-3/4 bg-emerald-500 flex justify-center align-center rounded-3xl"
                        variant="elevated"
                        elevation="16"
                >
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
                        <v-text-field v-model="form.first_name"
                                      name="first_name"
                                      label="Vorname"
                                      class="bg-emerald-500 active:bg-emerald-500  h-12"
                                      :rules="rules.first_name"
                        >

                        </v-text-field>
                        <v-text-field v-model="form.last_name"
                                      label="Name"
                                      class="bg-emerald-500 active:bg-emerald-500 h-12"
                                      :rules="rules.last_name"
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
                        <v-btn class="w-1/4 bg-gray-900 text-gray-100" type="submit">Registrieren</v-btn>
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


const rules = {
    email: [
        v => !!v || 'E-Mail muss augefüllt sein!',
        v => /.+@.+\..+/.test(v) || 'E-Mail muss augefüllt und valide sein!',
    ],
    first_name: [
        v => !!v || 'Vorname muss augefüllt sein!',
    ],
    last_name: [
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
