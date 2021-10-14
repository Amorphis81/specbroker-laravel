@extends( 'layouts.base' )

@section( 'content' )

    <x-auth-card>
        <div class="mb-4 text-sm">
            {{ __('Это безопасная область приложения. Пожалуйста, подтвердите свой пароль, прежде чем продолжить.') }}
        </div>

        <!-- Validation Errors -->
        {{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

        <x-form.main action="{{ route('password.confirm') }}">
            <!-- Password -->
            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required>{{ __('Password') }}</x-form.span-label>
                    <input class="input"
                             type="password"
                             name="password"
                             required />
                </x-form.label-input>
            </x-form.item>

            <div class="flex mt-4">
                <button class="tw-button-accent">{{ __('Подтвердить') }}</button>
            </div>
        </x-form.main>
    </x-auth-card>


@endsection
