<div>
    @isset( $businesses_static )
        @foreach( $businesses_static as $organisation)

            <x-business.block
                type="sell"
                name="{{ $organisation->name }}"
                :slider="[
                                                asset('img/slider-small/img-1.jpg'),
                                                asset('img/slider-small/img-2.jpg'),
                                                asset('img/slider-small/img-3.jpg'),
                                        ]"
                price="{{ $organisation->price }}"
                date="{{ $organisation->created_at }}"
                metro="{{ $organisation->metro_stations->pluck('name')->implode(', ') }}"
                descr="Продается стоматологическая клиника в шаговой доступности от метро. Большая клиентская база. Долгосрочный договор аренды"
            />

        @endforeach
    @endisset
</div>
