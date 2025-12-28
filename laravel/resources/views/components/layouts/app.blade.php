<x-layouts.app.header :title="$title ?? null">
    <x-notifications />
    <x-dynamic-component :component="'header.' . auth()->user()->role->value" />

    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.header>
