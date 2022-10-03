<?php

namespace RyanChandler\FilamentColorPalette;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentColorPaletteServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-color-palette';

    protected array $styles = [
        'plugin-filament-color-palette' => __DIR__ . '/../resources/dist/filament-color-palette.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }
}
