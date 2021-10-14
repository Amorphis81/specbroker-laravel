<div class="mb-7">
    {{ $slot }}

    @isset( $title )
        <h2 class="mb-5 font-bold text-2xl text-center text-green-dark-1">{{ $title }}</h2>
    @endisset

    @isset( $text )
        <div class="text-center">{{ $text }}</div>
    @endisset
</div>
