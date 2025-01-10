<header
    class="sticky top-0 z-50 w-full border-b border-zinc-800 bg-black/95 backdrop-blur supports-[backdrop-filter]:bg-black/60">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <x-brand.logo class="w-auto h-6 text-scarlet-600" />

            <nav class="hidden md:flex space-x-12">
                @foreach ($this->collections as $collection)
                    <a href="{{ route('collection.view', $collection->defaultUrl->slug) }}"
                        class="text-zinc-400 hover:text-scarlet-400 transition-colors" wire:navigate>
                        {{ $collection->translateAttribute('name') }}
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center flex-grow-1">
                <x-header.search class="w-64" />
                @livewire('components.cart')

                <!-- Mobile menu button -->
                <div x-data="{ mobileMenu: false }" class="lg:hidden">
                    <button x-on:click="mobileMenu = !mobileMenu" class="grid flex-shrink-0 w-16 h-16">
                        <span class="sr-only">Toggle Menu</span>
                        <span class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </span>
                    </button>

                    <div x-cloak x-transition x-show="mobileMenu"
                        class="absolute right-0 top-auto z-50 w-screen p-4 sm:max-w-xs">
                        <ul x-on:click.away="mobileMenu = false"
                            class="p-6 space-y-4 bg-black border border-gray-400/20 shadow-xl rounded-xl">
                            @foreach ($this->collections as $collection)
                                <li>
                                    <a class="text-sm font-medium"
                                        href="{{ route('collection.view', $collection->defaultUrl->slug) }}"
                                        wire:navigate>
                                        {{ $collection->translateAttribute('name') }}
                                    </a>
                                </li>
                            @endforeach
                            <li>
                                <a class="text-sm font-medium" href="#" wire:navigate>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
