<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>@yield('title')</title>
        <script src="https://kit.fontawesome.com/7f25fd8a42.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Redressed&display=swap" rel="stylesheet">
        {{-- calendar picker --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> --}}
        <!-- Scripts -->
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    </head>

    <body class="text-gray-900 font-sans antialiased">
        <main class="">
            @include('_partials.header')

            @yield('body')

            @include('_partials.footer')
        </main>

    </body>
</html>
