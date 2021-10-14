@props([
    'method' => 'POST',
])

@php( $method = strtoupper($method))
@php( $_method = in_array($method, ['GET', 'POST']) )

{{--<form {{ $attributes }} method="{{ $_method ? 'POST' : $method }}">--}}
<form {{ $attributes }} method="{{ $method }}">
    @unless( $_method )
        @method( $method )
    @endunless

    @unless ( $method === 'GET')
        @csrf
    @endunless

    @if ( $errors->any() )
        <div class="mb-3 text-red">
            <ul>
                @foreach ( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ $slot }}
</form>
