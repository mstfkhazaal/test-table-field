<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }">
        @livewire('table1')
    </div>
    <x-filament-actions::modals />
</x-dynamic-component>
