<x-form.main wire:submit.prevent="submit">
    <x-form.item>
        <x-form.label-input>
            <x-form.span-label required>{{ __('Email') }}</x-form.span-label>
            <input type="email" wire:model="email" class="input @error( 'email' ) is-invalid @enderror" value="{{ old('email') }}" placeholder="{{ __('Email') }}" />
{{--            <x-form.input type="email" wire:model="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" />--}}
        </x-form.label-input>
    </x-form.item>

    <x-form.item>
        <x-form.label-input>
            <x-form.span-label required>{{ __('Пароль') }}</x-form.span-label>
{{--            <x-form.input type="password" wire:model="password" placeholder="{{ __('Пароль') }}" />--}}
            <input type="password" wire:model="password" class="input @error( 'password' ) is-invalid @enderror" placeholder="{{ __('Введите пароль') }}" />
        </x-form.label-input>
    </x-form.item>

    <div class="flex flex-col items-center justify-center">
        <button class="tw-button-accent mb-4">{{ __('Войти') }}</button>
        <button type="button" class="font-bold"
                @click="$store.loginModal.open = false;
                                $store.registerModal.open = true">
            {{ __('Регистрация') }}</button>
    </div>
</x-form.main>
