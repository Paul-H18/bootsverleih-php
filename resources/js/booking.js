import { createApp } from 'vue'
import Booking from './vue/Booking.vue'

import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '@mdi/font/css/materialdesignicons.css'
import '../css/app.css'

const bookingEl = document.getElementById('booking')
const items = JSON.parse(bookingEl.dataset.items || '[]')

const vuetify = createVuetify({
    components,
    directives,
})

createApp(Booking, {
    items: items,
}).use(vuetify).mount('#booking')
