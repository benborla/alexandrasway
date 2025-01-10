<div>
    <div class="flex gap-4">
        <div>
            <label for="quantity" class="sr-only">
                Quantity
            </label>

            <div class="flex items-center border border-zinc-700 rounded">
                <button class="px-4 py-2 text-zinc-400 hover:text-white transition-colors"
                    wire:click.prevent="decrementQuantity">-</button>
                <input type="number" min="1" wire:model.live="quantity"
                    class="w-16 bg-transparent border-x border-zinc-700 px-4 py-2 text-center text-white [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />
                <button class="px-4 py-2 text-zinc-400 hover:text-white transition-colors"
                    wire:click.prevent="incrementQuantity">+</button>
            </div>

        </div>

        <button type="submit"
            class="flex-1 bg-scarlet-600 hover:bg-scarlet-700 text-white px-8 py-3 rounded-full transition-colors"
            wire:click.prevent="addToCart">
            Add to Cart
        </button>
    </div>

    @if ($errors->has('quantity'))
        <div class="p-2 mt-4 text-xs font-medium text-center text-red-700 rounded bg-red-50" role="alert">
            @foreach ($errors->get('quantity') as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
</div>
