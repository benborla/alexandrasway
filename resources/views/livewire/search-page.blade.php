    <section class="py-12 bg-zinc-900">
        <div class="container mx-auto px-4">
            <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
                <div class="mb-8 space-y-4">
                    <h1 class="text-3xl font-serif italic text-white">Search Results for
                        @if (isset($term))
                            <span class="text-scarlet-500">"{{ $term }}"</span>
                        @endif
                    </h1>
                    <p class="text-zinc-400">Showing {{ $this->results->count() }} results</p>
                </div>

                <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($this->results as $result)
                        <x-product-card :product="$result" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
