<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'BioKuy') }}</title>
    <meta name="description" content="BioKuy — Buat halaman link-in-bio profesional dalam hitungan menit.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen relative" style="background-color: var(--color-surface-base);">

        <div class="absolute inset-0 opacity-[0.05]" style="background-image: radial-gradient(circle at 1px 1px, var(--color-text-primary) 1px, transparent 0); background-size: 32px 32px;"></div>

        <div class="absolute top-0 left-0 p-6 z-10">
            <a href="{{ url('/') }}" class="flex items-center gap-2.5 group" id="guest-logo">
                <div class="flex items-center justify-center w-9 h-9 rounded-full bg-brand-primary text-black font-bold text-lg transition-transform duration-200 group-hover:scale-105">
                    B
                </div>
                <span class="text-lg font-bold text-text-primary tracking-tight">BioKuy</span>
            </a>
        </div>

        <div class="relative z-[5] min-h-screen flex flex-col items-center justify-center px-4 py-16">
            {{ $slot }}
        </div>

        <div class="fixed bottom-0 left-0 w-96 h-96 rounded-full opacity-[0.1]" style="background: radial-gradient(circle, var(--color-brand-primary) 0%, transparent 70%); filter: blur(80px); pointer-events: none;"></div>
        <div class="fixed top-0 right-0 w-80 h-80 rounded-full opacity-[0.05]" style="background: radial-gradient(circle, #ffffff 0%, transparent 70%); filter: blur(80px); pointer-events: none;"></div>
    </div>
</body>
</html>
