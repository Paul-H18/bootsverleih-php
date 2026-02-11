export const NavigationItems = [
    {
        label: 'Home',
        route: '/',
    },
    {
        label: 'Buchung',
        route: '/buchung',
    },
    {
        label: 'Logout',
        route: '/logout',
    },
]


export const UserRoles = {
    ADMIN: 'administrator',
    CUSTOMER: 'customer',
}


export const PaymentMethods = [
    {
        label: 'Barzahlung vor Ort',
        method: 'cash',
    },
    {
        label: 'Rechnung',
        method: 'invoice',
    },
    {
        label: 'PayPal',
        method: 'paypal',
    },
    {
        label: 'Ratenzahlung',
        method: 'ratepay',
    },
    {
        label: 'Kreditkarte',
        method: 'cc',
    },
]