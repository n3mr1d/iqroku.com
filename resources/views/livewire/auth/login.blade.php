<div class="bg-muted flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
    <div class="flex w-full max-w-lg flex-col gap-6">
        <div class="flex flex-col gap-6">
            <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
                <div class="px-6 py-8">
                    <div class="flex  flex-col gap-6">
                        <x-auth-header :title="__('Log in to your account')" :description="__('Enter your username and password below to log in')" />

                        <!-- Session Status -->
                        <x-auth-session-status class="text-center" :status="session('status')" />

                        <form method="POST" wire:submit="login" class="flex flex-col gap-6">
                            @csrf

                            <flux:input name="email" :label="__('Email')" :value="old('email')" type="text"
                                required wire:model="email" autofocus autocomplete="email" placeholder="Email" />

                            <!-- Password -->
                            <div class="relative">
                                <flux:input name="password" :label="__('Password')" type="password" required
                                    wire:model="password" autocomplete="current-password" :placeholder="__('Password')"
                                    viewable />


                            </div>

                            <!-- Remember Me -->
                            <flux:checkbox wire:model="remember" name="remember" :label="__('Remember me')"
                                :checked="old('remember')" />

                            <div class="flex items-center justify-end">
                                <flux:button variant="primary" type="submit" class="w-full" data-test="login-button">
                                    {{ __('Log in') }}
                                </flux:button>
                            </div>
                        </form>

                        @if (Route::has('register'))
                            <div
                                class="space-x-1 text-sm text-center rtl:space-x-reverse text-zinc-600 dark:text-zinc-400">
                                <span>{{ __('Don\'t have an account?') }}</span>
                                <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
