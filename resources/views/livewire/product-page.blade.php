<section>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-1">
                @if ($this->image)
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="object-cover rounded-xl" src="{{ $this->image->getUrl('large') }}"
                            alt="{{ $this->product->translateAttribute('name') }}" />
                    </div>
                @endif

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                    @foreach ($this->images as $image)
                        <div class="aspect-w-1 aspect-h-1" wire:key="image_{{ $image->id }}">
                            <img loading="lazy" class="object-cover rounded-xl" src="{{ $image->getUrl('small') }}"
                                alt="{{ $this->product->translateAttribute('name') }}" />
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-serif italic font-bold text-white">
                        {{ $this->product->translateAttribute('name') }}
                    </h1>

                    <x-product-price class="ml-4 font-medium" :variant="$this->variant" />
                </div>

                <p class="mt-1 text-sm text-gray-500">
                    {{ $this->variant->sku }}
                </p>

                <article class="mt-4 text-gray-500 leading-relaxed">
                    {!! $this->product->translateAttribute('description') !!}
                </article>

                <form class="mt-4">
                    <div class="space-y-4">
                        @foreach ($this->productOptions as $option)
                            <fieldset>
                                <legend class="text-xs font-medium text-gray-400">
                                    {{ $option['option']->translate('name') }}
                                </legend>

                                <div class="flex flex-wrap gap-2 mt-2 text-xs tracking-wide uppercase"
                                    x-data="{
                                        selectedOption: @entangle('selectedOptionValues').live,
                                        selectedValues: [],
                                    }" x-init="selectedValues = Object.values(selectedOption);
                                    $watch('selectedOption', value =>
                                        selectedValues = Object.values(selectedOption)
                                    )">
                                    @foreach ($option['values'] as $value)
                                        <button
                                            class="px-6 py-4 font-medium border rounded-lg focus:outline-none focus:ring transition-colors"
                                            type="button"
                                            wire:click="$set('selectedOptionValues.{{ $option['option']->id }}', {{ $value->id }})"
                                            :class="{
                                                'border-scarlet-500 text-white bg-scarlet-500/10': selectedValues
                                                    .includes({{ $value->id }}),
                                                'border-zinc-700 text-zinc-400 hover:border-scarlet-500 hover:text-white':
                                                    !selectedValues.includes({{ $value->id }})
                                            }">
                                            {{ $value->translate('name') }}
                                        </button>
                                    @endforeach
                                </div>
                            </fieldset>
                        @endforeach
                    </div>

                    <div class="max-w-xs mt-8">
                        <livewire:components.add-to-cart :purchasable="$this->variant" :wire:key="$this->variant->id">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
