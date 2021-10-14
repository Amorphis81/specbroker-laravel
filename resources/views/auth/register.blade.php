@extends( 'layouts.base' )

@section( 'content' )

    <x-auth-card>
        <h1 class="font-bold mb-3 text-green-1 text-center text-2xl">{{ __('Регистрация') }}</h1>

        <!-- Validation Errors -->
        {{--    <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

        <x-form.main action="{{ route('register') }}">

            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required>{{ __('Имя') }}</x-form.span-label>
                    <input class="input @error( 'name' ) is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" autofocus/>
                </x-form.label-input>
            </x-form.item>

            <!-- Email Address -->
            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required>{{ __('Email') }}</x-form.span-label>
                    <input class="input @error( 'email' ) is-invalid @enderror" type="email" name="email" value="{{ old('email') }}"/>
                </x-form.label-input>
            </x-form.item>

            <!-- Password -->
            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required>{{ __('Пароль') }}</x-form.span-label>
                    <input class="input @error( 'password' ) is-invalid @enderror" type="password" name="password"/>
                </x-form.label-input>
            </x-form.item>

            <!-- Confirm Password -->
            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required>{{ __('Повторите пароль') }}</x-form.span-label>
                    <input class="input @error( 'password' ) is-invalid @enderror" type="password" name="password_confirmation"/>
                </x-form.label-input>
            </x-form.item>

            <div class="flex flex-col items-center mt-4">
                <a class="mb-2 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Уже зарегистрированы?') }}
                </a>

                <button class="tw-button-accent">{{ __('Зарегистрироваться') }}</button>
            </div>
        </x-form.main>
    </x-auth-card>

@endsection

