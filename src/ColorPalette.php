<?php

namespace RyanChandler\FilamentColorPalette;

use Closure;
use Filament\Forms\Components\Field;

class ColorPalette extends Field
{
    protected string $view = 'filament-color-palette::field';

    protected array | Closure $options = [];

    protected bool | Closure $shouldStoreColorName = false;

    protected bool | Closure $canChooseCustomColors = false;

    protected string | Closure $customColorLabel = 'Select Color';

    public function options(array | Closure $options): static
    {
        $this->options = $options;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->evaluate($this->options);
    }

    public function storeColorName(bool | Closure $condition = true): static
    {
        $this->shouldStoreColorName = $condition;

        return $this;
    }

    public function shouldStoreColorName(): bool
    {
        return (bool) $this->evaluate($this->shouldStoreColorName);
    }

    public function allowCustomColors(bool | Closure $condition = true): static
    {
        $this->canChooseCustomColors = $condition;

        return $this;
    }

    public function canChooseCustomColors(): bool
    {
        return (bool) $this->evaluate($this->canChooseCustomColors);
    }

    public function customColorLabel(string | Closure $label): static
    {
        $this->customColorLabel = $label;

        return $this;
    }

    public function getCustomColorLabel(): string
    {
        return (string) $this->evaluate($this->customColorLabel);
    }
}
