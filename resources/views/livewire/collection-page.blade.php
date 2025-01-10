<section class="bg-zinc-900">
    <!-- Hero Section -->
    <div class="relative h-[40vh] flex items-center justify-center overflow-hidden bg-black">
        <div class="absolute inset-0 bg-gradient-to-br from-black via-transparent to-scarlet-950/20"></div>
        <div class="absolute inset-0 opacity-30 bg-[url('/placeholder.svg?height=600&width=1200')] bg-cover bg-center">
        </div>
        <div class="relative text-center space-y-4 max-w-3xl px-4">
            <h1 class="text-4xl md:text-5xl font-serif italic text-white">
                {{ $this->collection->translateAttribute('name') }}
            </h1>
            <p class="text-zinc-400 text-lg">{{ $this->collection->translateAttribute('description') }}</p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <!-- Filters and Sorting -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
            <!-- Categories -->
            <div class="flex gap-2 overflow-x-auto pb-2 md:pb-0 hide-scrollbar">
                <button class="px-4 py-2 bg-scarlet-600 text-white rounded-full text-sm whitespace-nowrap">All
                    Shoes</button>
                <button
                    class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-zinc-400 hover:text-white rounded-full text-sm whitespace-nowrap transition-colors">Sneakers</button>
                <button
                    class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-zinc-400 hover:text-white rounded-full text-sm whitespace-nowrap transition-colors">Running</button>
                <button
                    class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-zinc-400 hover:text-white rounded-full text-sm whitespace-nowrap transition-colors">Basketball</button>
                <button
                    class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-zinc-400 hover:text-white rounded-full text-sm whitespace-nowrap transition-colors">Training</button>
            </div>

            <!-- Sort and Filter -->
            <div class="flex gap-2">
                <button
                    class="px-4 py-2 bg-black border border-zinc-800 hover:border-scarlet-500 text-zinc-400 hover:text-white rounded-lg text-sm flex items-center gap-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    Filter
                </button>
                <button
                    class="px-4 py-2 bg-black border border-zinc-800 hover:border-scarlet-500 text-zinc-400 hover:text-white rounded-lg text-sm flex items-center gap-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                    </svg>
                    Sort
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($this->collection->products as $product)
                <x-product-card :product="$product" />
            @empty
            @endforelse
        </div>

    </div>
</section>
