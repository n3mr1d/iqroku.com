<x-layouts.app :title="__('Dashboard')">

    <x-welcome-message />
    <flux:separator />
    @if (auth()->user()?->isStudent())
        <x-dashboard.student />
    @endif

</x-layouts.app>
