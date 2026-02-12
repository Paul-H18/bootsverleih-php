import { createApp } from 'vue'
import Registration from './vue/Registration.vue'

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

createApp(Registration).use(vuetify).mount('#registration')
