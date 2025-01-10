<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alexandra's Way</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="description" content="Example of an ecommerce storefront built with Lunar.">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('favicon.svg') }}">
    @livewireStyles
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,700;1,700&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        scarlet: {
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    },
                },
            },
        }
    </script>
</head>

<body class="antialiased bg-black text-white font-sans flex flex-col min-h-screen">
    @livewire('components.navigation')

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>

</html>
