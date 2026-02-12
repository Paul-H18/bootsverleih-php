import { createApp } from 'vue'
import Login from './vue/Login.vue'

import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '@mdi/font/css/materialdesignicons.css'
import '../css/app.css'


const vuetify = createVuetify({
    components,
    directives,
})

createApp(Login).use(vuetify).mount('#login')
