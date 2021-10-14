@extends( 'layouts.base' )

@section( 'content' )

    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors"/>--}}

        <x-form.main action="{{ route('login') }}">

            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required>{{ __('Email') }}</x-form.span-label>
                    <input type="email" name="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}">
                </x-form.label-input>
            </x-form.item>

            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required>{{ __('Пароль') }}</x-form.span-label>
                     <input type="password" name="password" class="input @error('email') is-invalid @enderror">
                </x-form.label-input>
            </x-form.item>

            <!-- Remember Me -->
            <x-form.item>
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="mr-2 w-4 h-4 checkbox"
                           name="remember">
                    <span class="text-sm">{{ __('Запомнить меня') }}</span>
                </label>
            </x-form.item>

            <div class="flex flex-col items-center mt-4">
                @if (Route::has('password.request'))
                    <a class="mb-2 underline text-sm"
                       href="{{ route('password.request') }}">
                        {{ __('Забыли пароль?') }}
                    </a>
                @endif
                <button class="tw-button-accent">Войти</button>
            </div>
        </x-form.main>
    </x-auth-card>

@endsection
