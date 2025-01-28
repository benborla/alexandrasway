<div>
    <x-slot name="header">
        <h2>{{ __('Contact us') }}</h2>
    </x-slot>

    <x-slot name="breadcrumbs">
        <li class="flex items-center">
            {{ __('Contact us') }}
        </li>
    </x-slot>

    <div class="mx-auto max-w-4xl">
        <x-filament::section>
            {{ __('feel free to contact us.') }}
        </x-filament::section>
    </div>

    @php
        $colors = \Illuminate\Support\Arr::toCssStyles([
            \Filament\Support\get_color_css_variables(
                'primary',
                shades: [50, 100, 200, 300, 400, 500, 600, 700, 800, 900],
            ),
        ]);
    @endphp

    @if ($sent)
        @include(app('windTheme') . '.submitted')
    @else
        <form wire:submit.prevent="store">
            <div style="{{ $colors }}" class="px-4 my-4 mx-auto max-w-4xl">
                {{ $this->form }}
                <div class="p-4 text-center">
                    <x-filament::button type="submit">
                        {{ __('Send') }}
                    </x-filament::button>
                </div>
            </div>
        </form>
    @endif
</div>
