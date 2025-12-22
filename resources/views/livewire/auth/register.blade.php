<div class="flex min-h-svh flex-col items-center justify-center gap-6 bg-muted p-6 md:p-10">
    <div class="flex w-full max-w-3xl flex-col gap-6">
        <div class="flex flex-col gap-6">
            <div class="rounded-xl border bg-white p-6 text-stone-800 shadow-xs dark:border-stone-800 dark:bg-stone-950">
                <div class="flex flex-col gap-6">
                    <x-auth-header :title="__('TPA Registration')" :description="__('Register a new student')" />

                    <!-- Session Status -->
                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <!-- Stepper -->
                    <div class="relative flex flex-row justify-between mb-4">
                        <!-- Connecting Lines -->
                        <div class="absolute top-1/2 left-0 w-full -translate-y-1/2 px-6">
                            <div class="h-1 w-full bg-zinc-200 rounded-full dark:bg-zinc-800">
                                <div class="h-1 bg-zinc-900 rounded-full transition-all duration-300 dark:bg-zinc-100"
                                    style="width: {{ (($step - 1) / 2) * 100 }}%"></div>
                            </div>
                        </div>

                        <!-- Step 1 Indicator -->
                        <div class="relative z-10 flex flex-col items-center gap-2 group">
                            <div @class([
                                'flex h-10 w-10 items-center justify-center rounded-full border-2 transition-all duration-300 bg-white dark:bg-stone-950',
                                'border-zinc-900 text-zinc-900 dark:border-zinc-100 dark:text-zinc-100' =>
                                    $step >= 1,
                                'border-zinc-300 text-zinc-300 dark:border-zinc-700 dark:text-zinc-700' =>
                                    $step < 1,
                            ])>
                                @if ($step > 1)
                                    <flux:icon.check class="size-5" />
                                @else
                                    <span class="text-sm font-bold">1</span>
                                @endif
                            </div>
                            <span @class([
                                'text-xs font-medium transition-colors duration-300',
                                'text-zinc-900 dark:text-zinc-100' => $step >= 1,
                                'text-zinc-400 dark:text-zinc-600' => $step < 1,
                            ])>{{ __("Child's Data") }}</span>
                        </div>

                        <!-- Step 2 Indicator -->
                        <div class="relative z-10 flex flex-col items-center gap-2 group">
                            <div @class([
                                'flex h-10 w-10 items-center justify-center rounded-full border-2 transition-all duration-300 bg-white dark:bg-stone-950',
                                'border-zinc-900 text-zinc-900 dark:border-zinc-100 dark:text-zinc-100' =>
                                    $step >= 2,
                                'border-zinc-300 text-zinc-300 dark:border-zinc-700 dark:text-zinc-700' =>
                                    $step < 2,
                            ])>
                                @if ($step > 2)
                                    <flux:icon.check class="size-5" />
                                @else
                                    <span class="text-sm font-bold">2</span>
                                @endif
                            </div>
                            <span @class([
                                'text-xs font-medium transition-colors duration-300',
                                'text-zinc-900 dark:text-zinc-100' => $step >= 2,
                                'text-zinc-400 dark:text-zinc-600' => $step < 2,
                            ])>{{ __('Parental Data') }}</span>
                        </div>

                        <!-- Step 3 Indicator -->
                        <div class="relative z-10 flex flex-col items-center gap-2 group">
                            <div @class([
                                'flex h-10 w-10 items-center justify-center rounded-full border-2 transition-all duration-300 bg-white dark:bg-stone-950',
                                'border-zinc-900 text-zinc-900 dark:border-zinc-100 dark:text-zinc-100' =>
                                    $step >= 3,
                                'border-zinc-300 text-zinc-300 dark:border-zinc-700 dark:text-zinc-700' =>
                                    $step < 3,
                            ])>
                                <span class="text-sm font-bold">3</span>
                            </div>
                            <span @class([
                                'text-xs font-medium transition-colors duration-300',
                                'text-zinc-900 dark:text-zinc-100' => $step >= 3,
                                'text-zinc-400 dark:text-zinc-600' => $step < 3,
                            ])>{{ __('Info') }}</span>
                        </div>
                    </div>

                    <!-- Steps Content -->
                    <form wire:submit="register" class="flex flex-col gap-6">

                        <!-- Step 1: Child's Personal Data -->
                        @if ($step === 1)
                            <div class="flex flex-col gap-6 animate-in fade-in slide-in-from-right-4 duration-300">
                                <flux:fieldset>
                                    <flux:legend>{{ __("Child's Personal Data") }}</flux:legend>
                                    <flux:subheading>{{ __('Enter the student information below.') }}</flux:subheading>

                                    <div class="grid grid-cols-1 gap-6 mt-4">
                                        <flux:input wire:model="name" :label="__('Full Name')" type="text" required
                                            autofocus autocomplete="name" placeholder="Child's full name" />

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <flux:select wire:model="gender" :label="__('Gender')"
                                                placeholder="Select gender">
                                                <flux:select.option value="L">Male</flux:select.option>
                                                <flux:select.option value="P">Female</flux:select.option>
                                            </flux:select>

                                            <flux:input wire:model="datebirth" :label="__('Date of Birth')"
                                                type="date" :max="now()->format('Y-m-d')" required />
                                        </div>
                                    </div>
                                </flux:fieldset>
                            </div>
                        @endif

                        <!-- Step 2: Parental Data -->
                        @if ($step === 2)
                            <div class="flex flex-col gap-6 animate-in fade-in slide-in-from-right-4 duration-300">
                                <flux:fieldset>
                                    <flux:legend>{{ __('Parental Data') }}</flux:legend>
                                    <flux:subheading>{{ __('Enter parent or guardian details.') }}</flux:subheading>

                                    <div class="grid grid-cols-1 gap-6 mt-4">
                                        <flux:input wire:model="name_father" :label="__('Father Name')" type="text"
                                            required placeholder="Father's full name" />
                                        <flux:input wire:model="name_mother" :label="__('Mother Name')" type="text"
                                            required placeholder="Mother's full name" />
                                        <flux:input wire:model="whatsapp" :label="__('WhatsApp Number')" type="tel"
                                            required placeholder="08xxxxxxxxxx" icon="phone" />
                                    </div>
                                </flux:fieldset>
                            </div>
                        @endif

                        <!-- Step 3: Additional Information -->
                        @if ($step === 3)
                            <div class="flex flex-col gap-6 animate-in fade-in slide-in-from-right-4 duration-300">
                                <flux:fieldset>
                                    <flux:legend>{{ __('Additional Information') }}</flux:legend>
                                    <flux:subheading>{{ __('Final details before registration.') }}</flux:subheading>

                                    <div class="space-y-6 mt-4">
                                        <div
                                            class="rounded-lg border border-zinc-200 bg-zinc-50 p-4 dark:border-zinc-800 dark:bg-zinc-900/50">
                                            <flux:checkbox wire:model.live="tpalama"
                                                :label="__('Have you attended this TPA before?')" />

                                            @if ($tpalama)
                                                <div
                                                    class="mt-4 pt-4 border-t border-zinc-200 dark:border-zinc-800 animate-in fade-in slide-in-from-top-2">
                                                    <flux:select wire:model="leveltpa" :label="__('Previous TPA Level')"
                                                        placeholder="Select level">

                                                        @foreach ($leveltpa as $level)
                                                            <flux:select.option value="{{ $level->name }}">
                                                                {{ $level->label() }}
                                                            </flux:select.option>
                                                        @endforeach
                                                    </flux:select>
                                                </div>
                                            @endif
                                        </div>

                                        <flux:checkbox wire:model="pendampingan"
                                            :label="__('Requires special assistance?')" />

                                        <flux:textarea wire:model="saran" :label="__('Suggestions / Notes')"
                                            placeholder="Write suggestions or additional notes if any" />
                                    </div>
                                </flux:fieldset>
                            </div>
                        @endif

                        <div
                            class="flex items-center justify-between pt-6 border-t border-zinc-100 dark:border-zinc-800">
                            <div>
                                @if ($step > 1)
                                    <flux:button type="button" variant="subtle" wire:click="previousStep">
                                        {{ __('Back') }}
                                    </flux:button>
                                @else
                                    <div class="space-x-1 text-sm text-zinc-600 dark:text-zinc-400">
                                        <span>{{ __('Already registered?') }}</span>
                                        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}
                                        </flux:link>
                                    </div>
                                @endif
                            </div>

                            <div>
                                @if ($step < 3)
                                    <flux:button type="button" variant="primary" wire:click="nextStep">
                                        {{ __('Next Step') }}
                                    </flux:button>
                                @else
                                    <flux:button type="submit" variant="primary">
                                        {{ __('Register Now') }}
                                    </flux:button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
