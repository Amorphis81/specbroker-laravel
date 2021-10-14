<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield( 'page.title', config('app.name') )</title>

    @yield( 'map-styles' )
    @yield( 'styles' )

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        [x-cloak] { display: none !important; }
    </style>

    @livewireStyles
    @livewireScripts
</head>
<body class="flex flex-col min-h-screen font-lato text-text">
    @include( 'includes.header' )

    <main class="flex-grow">
        <section>
            <div class="tw-container">
                @include( 'includes.alerts' )
            </div>
        </section>
        @yield( 'content' )
    </main>

    @include( 'includes.footer' )

    @include( 'includes.modals.test-modal' )
    @include( 'includes.modals.login-modal' )
    @include( 'includes.modals.register-modal' )
    @include( 'includes.modals.consult-modal' )

    @yield( 'map-scripts' )
    @yield( 'scripts' )

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
