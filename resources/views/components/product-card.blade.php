@props(['product'])

<a href="{{ route('product.view', $product->defaultUrl->slug) }}" wire:navigate
    class="block group cursor-pointer bg-black border border-zinc-800 rounded-lg overflow-hidden hover:border-scarlet-500/50 transition-colors duration-300">
    <div class="aspect-h-1 overflow-hidden bg-zinc-800">
        @if ($product->thumbnail)
            <img class="object-fit transition-transform duration-300 group-hover:scale-105"
                src="{{ $product->thumbnail->getUrl('medium') }}" alt="{{ $product->translateAttribute('name') }}" />
        @endif
    </div>
    <div class="p-4 space-y-2">
        <h3 class="text-white group-hover:text-scarlet-400 transition-colors">NICCE Mens Original Hood</h3>
        <p class="text-zinc-400">$50.00</p>
    </div>
</a>
