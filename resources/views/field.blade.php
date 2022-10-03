@php
    $shouldStoreColorName = $shouldStoreColorName();
@endphp

<x-forms::field-wrapper
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')') }} }" class="flex space-x-4">
        @foreach($getOptions() as $color => $label)
            @php($value = $shouldStoreColorName ? $label : $color)

            <button
                type="button"
                x-on:click="state = @js($value)"
                class="rounded-full w-8 h-8 border border-gray-300 relative inline-flex items-center justify-center"
                x-bind:class="{
                    'ring-2 ring-gray-300 ring-offset-2': state === @js($value),
                }"
                style="background: {{ $color }}" title="{{ $label }}"
            >
                <span class="sr-only">
                    {{ $label }}
                </span>

                <span x-show="state === @js($value)" x-cloak>
                    <x-heroicon-o-check class="w-4 h-4 text-gray-400" />
                </span>
            </button>
        @endforeach

        @if($canChooseCustomColors() && ! $shouldStoreColorName)
            <div class="flex border bg-gray-50 rounded-lg">
                <input type="color" name="{{ $getStatePath() }}.custom" x-model.lazy="state" class="block h-full p-0 rounded-l-lg">
                <div class="text-xs font-medium px-2 inline-flex items-center">
                    <span>{{ $getCustomColorLabel() }}</span>
                </div>
            </div>
        @endif
    </div>
</x-forms::field-wrapper>
