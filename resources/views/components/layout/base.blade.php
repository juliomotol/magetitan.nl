@props([
    'title' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ __('filament-panels::layout.direction') ?? 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="asset('favicon.ico')" />
    <title>{{ filled($title) ? "{$title} | " : null }}{{ config('app.name') }}</title>

    @yield('meta')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"
    >
    <link rel="icon" href="{{  asset('favicon.ico') }}"

    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />

    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>

    @stack('styles')
</head>

<body {{ $attributes->class('min-h-screen') }}>
    <x-navbar />

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <x-newsletter />

    <x-footer />

    <x-notifications />

    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
