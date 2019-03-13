<!DOCTYPE html>
<html lang="es">
<head>
    @include('cpg.analytics')
    @include('cpg.fbPixel')

    <!-- Metas -->
    <title> @yield('title', config('seo.title') )  </title>
    @include('cpg.metas')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing-pack.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landingStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/querys.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('footer')

    <!-- JavaScripts -->
    <script src="{{ asset('js/landing-pack.js') }}"></script>
    @stack('scripts')
    @include('cpg.drift')
</body>
</html>

