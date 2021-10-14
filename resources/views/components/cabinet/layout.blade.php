@props([
    'name' => '',
    'count' => '',
])

@php

$menu_items = [
	[
		'id' => '1',
		'name' => 'Мои объявления',
		'link' => route( 'user.announce' ),
	],
	[
		'id' => '2',
		'name' => 'Избранное',
		'link' => route( 'user.favorites' ),
	],
	[
		'id' => '3',
		'name' => 'Настройки',
		'link' => route( 'user.setup' ),
	],
];

@endphp

<div class="flex">

    {{--                Боковая панель --}}
    <div class="mr-24 w-full max-w-[306px]">

        <div class="mb-5 max-w-[256px]">
            <div class="mb-3">
                <img src="{{ asset('img/general/no-avatar.jpg') }}" alt="avatar">
            </div>
            <a href="#" class="block text-center text-accent text-xs">{{ __('Загрузить фотографию') }}</a>
        </div>

        <div class="mb-6 font-bold text-2xl text-green-1">
            {{ auth()->user()->name }}
        </div>

        <nav>

            @foreach( $menu_items as $menu_item )

                <div class="py-6 text-lg border-t border-gray-5/30 @if ( $menu_item['id'] == $count ) font-bold text-accent @endif">
                    @if ( $menu_item['id'] == $count )
                        {{ $menu_item['name'] }}
                    @else
                        <a href="{{ $menu_item['link'] }}">{{ $menu_item['name'] }}</a>
                    @endif
                </div>

            @endforeach

        </nav>

    </div>

    <div class="w-full max-w-[800px]">
        <h2 class="font-bold text-2xl text-green-1">{{ $name }}</h2>

        {{ $slot }}

    </div>

</div>
