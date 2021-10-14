<x-modal.main state="registerModal">
    <x-modal.header>
        <x-slot name="title">{{ __('Регистрация') }}</x-slot>
    </x-modal.header>

    <x-modal.body>
        <livewire:register-form />

    </x-modal.body>
</x-modal.main>
