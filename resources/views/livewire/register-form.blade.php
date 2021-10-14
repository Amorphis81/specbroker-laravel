<x-form.main wire:submit.prevent="submit">
    <x-form.item>
        <x-form.label-input>
            <x-form.span-label required>{{ __('Имя') }}</x-form.span-label>
            <input autofocus type="text" wire:model="name" class="input @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="{{ __('Введите имя') }}" />
        </x-form.label-input>
    </x-form.item>

    <x-form.item>
        <x-form.label-input>
            <x-form.span-label required>{{ __('Email') }}</x-form.span-label>
            <input type="email" wire:model="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="{{ __('Email') }}" />
        </x-form.label-input>
    </x-form.item>

    <x-form.item>
        <x-form.label-input>
            <x-form.span-label required>{{ __('Пароль') }}</x-form.span-label>
            <input type="password" wire:model="password" class="input @error('password') is-invalid @enderror" placeholder="{{ __('Пароль') }}">
        </x-form.label-input>
    </x-form.item>

    <x-form.item>
        <x-form.label-input>
            <x-form.span-label required>{{ __('Повторите пароль') }}</x-form.span-label>
            <input type="password" wire:model="password_confirmation" class="input @error('password') is-invalid @enderror" placeholder="{{ __('Пароль') }}" />
        </x-form.label-input>
    </x-form.item>

    <div class="flex flex-col items-center justify-center">
        <button class="tw-button-accent mb-4">{{ __('Регистрация') }}</button>
        <button type="button" class="font-bold"
                @click="$store.loginModal.open = true;
                        $store.registerModal.open = false">
            {{ __('Войти') }}</button>
    </div>
</x-form.main>

