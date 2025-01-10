<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout - Alexandra's Way</title>
    <meta name="description" content="Example of an ecommerce storefront built with Lunar.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    @livewireStyles
    @stripeScripts
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
    <header class="relative border-b border-gray-400/20">
        <div class="flex items-center justify-center h-16 px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
            <a class="flex items-center flex-shrink-0" href="{{ url('/') }}">
                <span class="sr-only">Home</span>
                <x-brand.logo class="w-auto h-6 text-scarlet-600" />
            </a>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>

</html>
