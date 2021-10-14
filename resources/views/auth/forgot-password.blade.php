@extends( 'layouts.base' )

@section( 'content' )

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Забыли Ваш пароль? Без проблем. Просто сообщите нам свой адрес электронной почты, и мы пришлем вам ссылку для сброса пароля, которая позволит вам выбрать новый.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <x-form.main action="{{ route('password.email') }}">

            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required>{{ __('Email') }}</x-form.span-label>
                    <input class="input" type="email" name="email" value="{{ old('email') }}" required autofocus/>
                </x-form.label-input>
            </x-form.item>

            <div class="flex items-center">
                <button class="tw-button-accent">{{ __('Ссылка для сброса пароля электронной почты') }}</button>
            </div>
        </x-form.main>
    </x-auth-card>

@endsection
