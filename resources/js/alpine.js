import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.store('thankModal', {
    open: false,
})

Alpine.store('loginModal', {
    open: false,
})

Alpine.store('registerModal', {
    open: false,
})

Alpine.store('testModal', {
    open: false,
})

Alpine.store('consultModal', {
    open: false,
})

Alpine.start()
