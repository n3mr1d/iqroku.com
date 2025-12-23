<svg width="0" height="0" style="position: absolute;">
    <defs>
        <filter id="glass-distortion" x="0%" y="0%" width="100%" height="100%">
            <feTurbulence type="fractalNoise" baseFrequency="0.008 0.008" numOctaves="2" seed="92" result="noise" />
            <feGaussianBlur in="noise" stdDeviation="2" result="blurred" />
            <feDisplacementMap in="SourceGraphic" in2="blurred" scale="150" xChannelSelector="R"
                yChannelSelector="G" />
        </filter>
    </defs>
</svg>

<flux:header sticky class="z-[10000] bg-white border-b border-white/10 px-6">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-3" inset="left" />

    <flux:navbar class="-mb-px max-lg:hidden">


        <flux:navbar.item icon="home" href="#" current>Home</flux:navbar.item>
        <flux:navbar.item icon="user" href="#">About</flux:navbar.item>
        <flux:navbar.item href="#">Gallery</flux:navbar.item>

        <flux:dropdown>
            <flux:navbar.item icon-trailing="chevron-down">Blog</flux:navbar.item>
            <flux:menu>
                <flux:menu.item href="#">Latest Posts</flux:menu.item>
                <flux:menu.item href="#">Programs</flux:menu.item>
            </flux:menu>
        </flux:dropdown>

        <flux:navbar.item href="#">Contact</flux:navbar.item>
    </flux:navbar>

    <flux:spacer />

    <flux:navbar>
        <flux:button wire:navigate href="{{ route('login') }}" variant="primary" color="indigo">Login</flux:button>
    </flux:navbar>
</flux:header>
