@extends( 'layouts.base' )

@section( 'content' )
    <section class="my-24">
        <div class="tw-container">

            <x-cabinet.layout name="Настройки профиля" count="3">

                <div>

                    <div class="mt-14" x-data="{active: 1}">

                        <div class="relative mb-12 flex">

                            <div class="relative mr-4 py-3 font-bold text-xl cursor-pointer"
                                 @click="active = 1" :class=" (active === 1) ? 'text-accent' : 'text-gray-2' ">
                                {{ __('Контактная информация') }}
                                <div class="absolute top-full w-full h-px bg-accent z-[1]" :class=" (active === 1) ? 'block' : 'hidden' "></div>
                            </div>

                            <div class="py-3 font-bold text-xl cursor-pointer"
                                 @click="active = 2" :class=" (active === 2) ? 'text-accent' : 'text-gray-2' ">
                                {{ __('Смена пароля') }}
                                <div class="absolute top-full w-full max-w-[160px] h-px bg-accent z-[1]" :class=" (active === 2) ? 'block' : 'hidden' "></div>
                            </div>

                            <div class="absolute top-full w-full h-px bg-gray-6"></div>
                        </div>

                        <div class="max-w-[590px]">

                            <div x-show="active === 1">

                                <x-form.main>

                                    <x-form.label-input class="mb-6">
                                        <x-form.span-label>{{ __('Фамилия') }}</x-form.span-label>
                                        <input name="surname" class="input @error( 'surname' ) is-invalid @enderror">
                                    </x-form.label-input>

                                    <x-form.label-input class="mb-6">
                                        <x-form.span-label>{{ __('Имя') }}</x-form.span-label>
                                        <input name="name" class="input @error( 'name' ) is-invalid @enderror">
                                    </x-form.label-input>

                                    <x-form.label-input class="mb-6">
                                        <x-form.span-label>{{ __('Отчество') }}</x-form.span-label>
                                        <input name="middle-name" class="input @error( 'middle-name' ) is-invalid @enderror">
                                    </x-form.label-input>

                                    <x-form.label-input class="mb-6">
                                        <x-form.span-label>{{ __('E-mail') }}</x-form.span-label>
                                        <input type="email" name="email" class="input @error( 'email' ) is-invalid @enderror">
                                    </x-form.label-input>

                                    <x-form.label-input class="mb-10">
                                        <x-form.span-label>{{ __('Телефон') }}</x-form.span-label>
                                        <input type="tel" name="phone" class="input @error( 'phone' ) is-invalid @enderror">
                                    </x-form.label-input>

                                    <div>
                                        <button class="tw-button-accent max-w-[220px]">{{ __('Сохранить изменения') }}</button>
                                    </div>

                                </x-form.main>

                            </div>

                            <div x-show="active === 2" x-cloak>

                                <x-form.main>

                                    <x-form.label-input class="mb-6">
                                        <x-form.span-label>{{ __('Текущий пароль') }}</x-form.span-label>
                                        <input name="current-password" type="password" class="input @error( 'current-password' ) is-invalid @enderror">
                                    </x-form.label-input>

                                    <x-form.label-input class="mb-6">
                                        <x-form.span-label>{{ __('Новый пароль') }}</x-form.span-label>
                                        <input name="password" type="password" class="input @error( 'password' ) is-invalid @enderror">
                                    </x-form.label-input>

                                    <x-form.label-input class="mb-10">
                                        <x-form.span-label>{{ __('Повторите новый пароль') }}</x-form.span-label>
                                        <input name="confirm_password" type="password" class="input @error( 'confirm_password' ) is-invalid @enderror">
                                    </x-form.label-input>

                                    <div>
                                        <button class="tw-button-accent max-w-[220px]">{{ __('Изменить пароль') }}</button>
                                    </div>

                                </x-form.main>

                            </div>

                        </div>

                    </div>

                </div>


            </x-cabinet.layout>

        </div>
    </section>
@endsection
