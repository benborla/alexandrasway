<?php

namespace App\Providers;

use App\Modifiers\ShippingModifier;
use Filament\Support\Colors\Color;
use Illuminate\Support\ServiceProvider;
use Lunar\Admin\Support\Facades\LunarPanel;
use Lunar\Base\ShippingModifiers;
use Lunar\Shipping\ShippingPlugin;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use LaraZeus\Wind\WindPlugin;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        LunarPanel::panel(
            function ($panel) {
                $panel->assets([
                    Css::make('admin-stylesheet', resource_path('css/admin.css')),
                    Js::make('admin-script', resource_path('js/admin.js')),
                ]);
                $panel->brandLogo(fn() => view('components.brand.logo'));
                $panel->darkModeBrandLogo(fn() => view('components.brand.logo'));
                $panel->path('admin');
                $panel->brandName('Alexandra\'s Way');
                $panel->favicon(public_path('favicon.svg'));
                $panel->colors([
                    'primary' => Color::hex('#ef4444'),
                ]);


                // Contact Us plugin
                $panel->plugin(
                    WindPlugin::make()
                        ->windPrefix('contact-us')
                        ->windMiddleware(['web'])
                        ->defaultDepartmentId(1)
                        ->defaultStatus('NEW')
                        ->departmentResource()
                        ->windModels([
                            'Department' => \LaraZeus\Wind\Models\Department::class,
                            'Letter' => \LaraZeus\Wind\Models\Letter::class,
                        ])
                        ->uploadDisk('public')
                        ->uploadDirectory('logos')
                        ->navigationGroupLabel('Contact Us Page'),
                );

                return $panel->plugins([
                    new ShippingPlugin,
                ]);
            }
        )
            ->register();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(ShippingModifiers $shippingModifiers): void
    {
        $shippingModifiers->add(
            ShippingModifier::class
        );


        \Lunar\Facades\ModelManifest::replace(
            \Lunar\Models\Contracts\Product::class,
            \App\Models\Product::class,
            // \App\Models\CustomProduct::class,
        );
    }
}
