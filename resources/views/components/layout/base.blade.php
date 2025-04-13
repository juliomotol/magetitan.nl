@props([
    'title' => null,
])

<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ __('filament-panels::layout.direction') ?? 'ltr' }}"
>

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <link
        rel="icon"
        href="asset('favicon.ico')"
    />
    <title>{{ filled($title) ? "{$title} | " : null }}{{ config('app.name') }}</title>

    @yield('meta')

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"
    >

    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body {{ $attributes->class('min-h-screen') }}>
    <x-navbar class="sticky top-0 z-10"/>

    <main class="mt-[-120px] min-h-screen">
        {{ $slot }}
    </main>

    <x-newsletter />

    <x-footer />

    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
