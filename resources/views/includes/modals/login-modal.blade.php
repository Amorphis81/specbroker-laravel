<x-modal.main state="loginModal">
    <x-modal.header>
        <x-slot name="title">{{ __('Войти в личный кабинет') }}</x-slot>
    </x-modal.header>

    <x-modal.body>
        <livewire:login-form />
    </x-modal.body>
</x-modal.main>
