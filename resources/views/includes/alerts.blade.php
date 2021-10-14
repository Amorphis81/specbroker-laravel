<div>
    @if( session('success') )
        <div class="p-3 bg-accent bg-opacity-80 text-white">{{ session('success') }}</div>
    @endif

    @if( session('error') )
        <div class="p-3 bg-red bg-opacity-80 text-white">{{ session('error') }}</div>
    @endif

    @if ($errors->any())
        <div class="p-3 bg-red bg-opacity-80 text-white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
