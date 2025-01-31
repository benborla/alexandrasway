<form {{ $attributes->merge(['class' => 'hidden md:flex items-center']) }} action="{{ route('search.view') }}">
    <input name="term" placeholder="Search for products..." value="{{ $this->term }}"
        class="w-60 bg-zinc-900 border-zinc-800 focus:border-scarlet-500 text-white rounded-md px-3 py-2">


    <button type="submit" class="ml-2 text-zinc-400 hover:text-scarlet-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </button>
</form>
