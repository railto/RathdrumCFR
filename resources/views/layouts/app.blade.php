<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rathdrum Community First Responders</title>

    <!-- Styles -->
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="font-sans antialiased flex flex-col min-h-screen">
@include('partials.navigation')

<main class="flex-grow">
    {{ $slot }}
</main>

@include('partials.footer')

<!-- Scripts -->
@livewireScripts
<script src="{{ mix('js/app.js') }}" defer></script>
@if (config('app.env') == 'production' && Auth::guest())
    <script async defer data-website-id="69deb0c4-d4c2-4bea-a1bf-8ebc168a52a4" src="https://stats.markrailton.com/umami.js"></script>
@endif
</body>
</html>
