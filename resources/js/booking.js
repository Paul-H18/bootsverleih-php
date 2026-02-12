import { createApp } from 'vue'
import Booking from './vue/Booking.vue'
import '@mdi/font/css/materialdesignicons.css'

import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '../css/app.css'
import { aliases, mdi } from 'vuetify/iconsets/mdi'

const bookingEl = document.getElementById('booking')
const items = JSON.parse(bookingEl.dataset.items || '[]')
const user = JSON.parse(bookingEl.dataset.user || '{}')

const vuetify = createVuetify({
    components,
    directives,
    icons: {
        defaultSet: 'mdi',
        aliases,
        sets: {
            mdi,
        },
    },
})

createApp(Booking, {
    items: items,
    user: user,
}).use(vuetify).mount('#booking')