<?php

namespace RyanChandler\FilamentColorPalette;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentColorPaletteServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-color-palette';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-color-palette' => __DIR__ . '/../resources/dist/filament-color-palette.css',
    ];

    protected array $scripts = [
        'plugin-filament-color-palette' => __DIR__ . '/../resources/dist/filament-color-palette.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-color-palette' => __DIR__ . '/../resources/dist/filament-color-palette.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
