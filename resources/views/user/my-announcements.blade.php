@extends( 'layouts.base' )

@section( 'styles' )
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section( 'scripts' )
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper-block-setup.js') }}"></script>
@endsection

@section( 'content' )
    <section class="my-24">
        <div class="tw-container">

            <x-cabinet.layout name="Мои объявления" count="1">

                <div class="mt-14" x-data="{active: 1}">

                    <div class="mb-10 flex">

                        <div class="mr-4 py-3 px-7 flex rounded-3xl cursor-pointer  "
                             @click="active = 1" :class=" (active === 1) ? 'bg-green-1 text-white' : 'bg-gray-6' ">
                            <div class="mr-2">{{ __('Опубликованные') }}</div>
                            <span>2</span>
                        </div>

                        <div class="mr-4 py-3 px-7 flex rounded-3xl cursor-pointer"
                             @click="active = 2" :class=" (active === 2) ? 'bg-green-1 text-white' : 'bg-gray-6' ">
                            <div class="mr-2">{{ __('На модерации') }}</div>
                            <span>1</span>
                        </div>

                        <div class="py-3 px-7 flex rounded-3xl cursor-pointer"
                             @click="active = 3" :class=" (active === 3) ? 'bg-green-1 text-white' : 'bg-gray-6' ">
                            <div class="mr-2">{{ __('Архив') }}</div>
                            <span>5</span>
                        </div>

                    </div>

                    <div>

                        <div x-show="active === 1">

                            <x-business.block
                                type="announce"
                                name="СТОМАТОЛОГИЯ В РАЙОНЕ М. ЛЮБЛИНО"
                                :slider="[
                                        asset('img/slider-small/img-1.jpg'),
                                        asset('img/slider-small/img-2.jpg'),
                                        asset('img/slider-small/img-3.jpg'),
                                        ]"
                                price="3 500 000"
                                date="10.02.2021"
                                metro="м. Люблино"
                                descr="Продается стоматологическая клиника в шаговой доступности от метро. Большая клиентская база. Долгосрочный договор аренды"
                            />

                        </div>

                        <div x-show="active === 2" x-cloak>

                            <x-business.block
                                type="announce"
                                name="СТОМАТОЛОГИЯ В РАЙОНЕ М. ЛЮБЛИНО"
                                :slider="[
                                        asset('img/slider-small/img-1.jpg'),
                                        asset('img/slider-small/img-2.jpg'),
                                        asset('img/slider-small/img-3.jpg'),
                                        ]"
                                price="3 500 000"
                                date="10.02.2021"
                                metro="м. Люблино"
                                descr="Продается стоматологическая клиника в шаговой доступности от метро. Большая клиентская база. Долгосрочный договор аренды"
                            />

                        </div>

                        <div x-show="active === 3" x-cloak>

                            <x-business.block
                                type="announce"
                                name="СТОМАТОЛОГИЯ В РАЙОНЕ М. ЛЮБЛИНО"
                                :slider="[
                                        asset('img/slider-small/img-1.jpg'),
                                        asset('img/slider-small/img-2.jpg'),
                                        asset('img/slider-small/img-3.jpg'),
                                        ]"
                                price="3 500 000"
                                date="10.02.2021"
                                metro="м. Люблино"
                                descr="Продается стоматологическая клиника в шаговой доступности от метро. Большая клиентская база. Долгосрочный договор аренды"
                            />

                        </div>

                    </div>

                </div>

            </x-cabinet.layout>

        </div>
    </section>
@endsection
