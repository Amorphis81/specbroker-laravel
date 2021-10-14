<footer class="flex-shrink-0 text-white">
{{--    Footer top --}}
    <div class="pt-11 pb-6 bg-text">
        <x-container>
            <div class="flex flex-wrap justify-between">

                <div class="flex flex-col justify-center max-w-[172px]">
                    <a href="{{ route('home') }}" class="mb-3" target="_blank" rel="noopener">
                        <img width="132" height="40" src="{{ asset('img/general/logo-white.png') }}" alt="logo">
                    </a>
                    <div class="text-sm">
                        {{ __('Осуществляем продажу готового бизнеса по Москве и области') }}
                    </div>
                </div>

                <div>
                    <div class="mb-4 font-bold">{{ __('Услуги') }}</div>
                    <nav>
                        <ul>
                            <li class="mb-3 text-sm"><a href="#">{{ __('Продать бизнес') }}</a></li>
                            <li class="mb-3 text-sm"><a href="#">{{ __('Купить бизнес') }}</a></li>
                            <li class="mb-3 text-sm"><a href="#">{{ __('Проверить бизнес') }}</a></li>
                            <li class="mb-3 text-sm"><a href="#">{{ __('Оборудование') }}</a></li>
                            <li class="mb-3 text-sm"><a href="#">{{ __('Вакансии') }}</a></li>
                            <li class="text-sm"><a href="#">{{ __('Резюме') }}</a></li>
                        </ul>
                    </nav>
                </div>

                <div>
                    <div class="mb-4 font-bold">{{ __('Информация') }}</div>
                    <nav>
                        <ul>
                            <li class="mb-3 text-sm"><a href="#">{{ __('О нас') }}</a></li>
                            <li class="mb-3 text-sm"><a href="#">{{ __('Кейсы') }}</a></li>
                            <li class="mb-3 text-sm"><a href="#">{{ __('Видеоблог') }}</a></li>
                            <li class="mb-3 text-sm"><a href="#">{{ __('Партнеры') }}</a></li>
                            <li class="text-sm"><a href="#">{{ __('Контакты') }}</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="flex flex-col max-w-[188px]">
                    <div class="mb-4 font-bold">{{ __('Контакты') }}</div>
                    <a href="tel:+74951430060" class="mb-6 font-bold text-sm">+7 (495) 143-00-60</a>
                    <a href="mailto:info@sbroker.ru" class="mb-5 text-sm">info@sbroker.ru</a>
                    <div class="mb-3 font-bold text-sm">{{ __('Юридический адрес:') }}</div>
                    <div class="text-sm">{{ __('г. Красногорск, ул. Дачная, д. 11 А') }}</div>
                </div>

                <div class="max-w-[202px]">
                    <div class="mb-8 font-bold">{{ __('Подписаться на новости') }}</div>
                    <div class="mb-4 text-sm">{{ __('Следите за новыми объявлениями и акциями') }}</div>
                    <x-form.main>
                        <input required type="email" name="footer-mail" placeholder="Ваш E-mail..."
                               class="mb-4 w-full rounded bg-transparent border-white/50 placeholder-white/50 text-sm">
                        <button class="p-3 font-bold text-sm rounded bg-gray-4 text-text w-full">{{ __('Подписаться') }}</button>
                    </x-form.main>
                </div>
            </div>
        </x-container>
    </div>
{{--    Footer bottom --}}
    <div class="bg-green-2">
        <x-container>
            bottom
        </x-container>
    </div>
</footer>
