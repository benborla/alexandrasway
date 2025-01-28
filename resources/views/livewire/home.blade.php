<div>
    <x-welcome-banner />

    <div class="py-12 px-4 mx-auto space-y-12 max-w-screen-xl sm:px-6 lg:px-8">
        @if ($this->saleCollection)
            <x-collection-sale />
        @endif


        @if ($this->randomCollection)
            <section>
                <h2 class="text-3xl font-bold">
                    {{-- {{ $this->randomCollection->translateAttribute('name') }} --}}
                    Featured Collection
                </h2>

                <div class="grid grid-cols-2 gap-x-4 gap-y-8 mt-8 lg:grid-cols-4">
                    @foreach ($this->randomCollection->products as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>
            </section>
        @endif
    </div>

    <div>
        <livewire:components.contact-form />
    </div>
</div>
