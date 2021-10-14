@extends( 'layouts.base' )

@section( 'content' )
    <section class="bg-main bg-img">
        <div class="tw-container">
            <div class="pt-36 font-comissioner font-bold text-5xl text-green-1 uppercase">{{ __('Бесплатная') }}</div>
            <div class="mb-10 max-w-[345px] font-comissioner text-4xl text-green-1 lowercase">
                {{ __('удаленная оценка объявления') }}
                <button type="button" class="px-3 py-1 relative bottom-1 rounded-md bg-gray-3 text-accent text-sm">{{ __('Что это?') }}</button>
            </div>
            <a href="#" class="mb-40 py-4 px-7 block max-w-[308px] font-bold text-white text-sm bg-text rounded-[10px]" target="_blank" rel="noopener">{{ __('Проверить объявление прямо сейчас') }}</a>

            <div class="flex flex-wrap justify-between">

                <a href="#" class="w-56 h-40 tw-shadow-2 rounded-[10px] bg-white flex flex-col items-center justify-center">
                    <div>
                        <div class="mb-3 font-bold text-2xl">{{ __('Продать') }}</div>
                        <div class="font-bold text-lg">{{ __('бизнес') }}</div>
                    </div>
                </a>

                <a href="#" class="w-56 h-40 tw-shadow-2 rounded-[10px] bg-white flex flex-col items-center justify-center">
                    <div>
                        <div class="mb-3 font-bold text-2xl">{{ __('Купить') }}</div>
                        <div class="opacity-40">{{ __('1442 объявления') }}</div>
                    </div>
                </a>

                <a href="#" class="w-56 h-40 tw-shadow-2 rounded-[10px] bg-white flex flex-col items-center justify-center">
                    <div>
                        <div class="mb-3 font-bold text-2xl">{{ __('Проверить') }}</div>
                        <div class="font-bold text-lg">{{ __('бизнес') }}</div>
                    </div>
                </a>

                <a href="#" class="w-56 h-40 tw-shadow-2 rounded-[10px] bg-white flex flex-col items-center justify-center">
                    <div>
                        <div class="mb-1 font-bold text-2xl">{{ __('Аренда') }}</div>
                        <div class="mb-1 font-bold text-lg max-w-[123px]">{{ __('и продажа оборудования') }}</div>
                        <div class="opacity-40">{{ __('13 объявлений') }}</div>
                    </div>
                </a>

                <a href="#" class="w-56 h-40 tw-shadow-2 rounded-[10px] bg-white flex flex-col items-center justify-center">
                    <div>
                        <div class="mb-1 font-bold text-2xl">{{ __('Найти') }}</div>
                        <div class="mb-1 font-bold text-lg max-w-[123px]">{{ __('работу или сотрудника') }}</div>
                        <div class="opacity-40">{{ __('139 объявлений') }}</div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    @include( 'includes.maps.business-map' )

    <section class="mb-24">
        <div class="tw-container">
            <h2 class="mb-12 text-4xl text-center font-bold text-green-1">{{ __('Партнеры') }}</h2>

            <div class="grid grid-cols-5 gap-x-16 gap-y-9">

                <div class="col-span-2 row-span-2">
                    <img src="{{ asset('images/partners/partner-big.png') }}" alt="partner">
                </div>

                <div>
                    <img src="{{ asset('images/partners/partner-1.png') }}" alt="partner">
                </div>

                <div>
                    <img src="{{ asset('images/partners/partner-2.png') }}" alt="partner">
                </div>

                <div>
                    <img src="{{ asset('images/partners/partner-1.png') }}" alt="partner">
                </div>

                <div>
                    <img src="{{ asset('images/partners/partner-2.png') }}" alt="partner">
                </div>

                <div>
                    <img src="{{ asset('images/partners/partner-1.png') }}" alt="partner">
                </div>

                <div>
                    <img src="{{ asset('images/partners/partner-2.png') }}" alt="partner">
                </div>

            </div>
        </div>
    </section>
@endsection
