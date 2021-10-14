@extends( 'layouts.base' )

@section( 'styles' )
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    {{ asset('css/admin/all.min.css') }}
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    {{ asset('css/admin/tempusdominus-bootstrap-4.min.css') }}
    {{ asset('css/admin/icheck-bootstrap.min.css') }}
    {{ asset('css/admin/jqvmap.min.css') }}
    {{ asset('css/admin/adminlte.min.css') }}
    {{ asset('css/admin/OverlayScrollbars.min.css') }}
    {{ asset('css/admin/daterangepicker.css') }}
    {{ asset('css/admin/summernote-bs4.min.css') }}
@endsection



@section( 'scripts' )
    {{ asset('js/jquery.min.js') }}
    {{ asset('js/admin/jquery-ui.min.js') }}

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    {{ asset('js/admin/bootstrap.bundle.min.js') }}
    {{ asset('js/admin/Chart.min.js') }}
    {{ asset('js/admin/sparkline.js') }}
    {{ asset('js/admin/jquery.vmap.min.js') }}

@endsection

@section( 'content' )
    <section>
        <div class="tw-container">
            <h1>Админка</h1>
        </div>
    </section>
@endsection
