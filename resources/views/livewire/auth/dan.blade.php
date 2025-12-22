      <div class="flex min-h-svh flex-col items-center justify-center gap-6 bg-muted p-6 md:p-10">
    <div class="flex w-full max-w-3xl flex-col gap-6">
        <div class="flex flex-col gap-6">
            <div class="rounded-xl border bg-white p-6 text-stone-800 shadow-xs dark:border-stone-800 dark:bg-stone-950">
                <div class="flex flex-col gap-6">
                    <x-auth-header :title="__('TPA Registration')" :description="__('Fill out the form below to register')" />

                    <!-- Session Status -->
                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <form wire:submit="register" class="flex flex-col gap-6">
                        <!-- Child's Personal Data -->
                        <flux:fieldset>
                            <flux:legend>{{ __("Child's Personal Data") }}</flux:legend>

                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <flux:input wire:model="name" :label="__('Full Name')" type="text" required autofocus autocomplete="name" placeholder="Child's full name" />

                                <flux:select wire:model="gender" :label="__('Gender')" placeholder="Select gender">
                                    <flux:select.option value="L">Male</flux:select.option>
                                    <flux:select.option value="P">Female</flux:select.option>
                                </flux:select>

                                <flux:input wire:model="datebirth" :label="__('Date of Birth')" icon:trailing="calendar" type="date" :max="now()->format('Y-m-d')" required />
                            </div>
                        </flux:fieldset>

                        <flux:separator />

                        <!-- Parental Data -->
                        <flux:fieldset>
                            <flux:legend>{{ __('Parental Data') }}</flux:legend>

                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <flux:input wire:model="name_father" :label="__('Father Name')" type="text" required placeholder="Father's full name" />
                                <flux:input wire:model="name_mother" :label="__('Mother Name')" type="text" required placeholder="Mother's full name" />
                                <flux:input wire:model="whatsapp" :label="__('WhatsApp Number')" type="tel" required placeholder="08xxxxxxxxxx" />
                            </div>
                        </flux:fieldset>

                        <flux:separator />

                        <!-- Additional Information -->
                        <flux:fieldset>
                            <flux:legend>{{ __('Additional Information') }}</flux:legend>

                            <div class="space-y-4">
                                <flux:checkbox wire:model.live="tpalama" :label="__('Have you attended this TPA before?')" />

                                <div wire:transition>
                                    @if ($tpalama)
                                        <div class="mt-4">
                                            <flux:select wire:model="leveltpa" :label="__('Previous TPA Level')" placeholder="Select level">
                                                <flux:select.option value="TK">Kindergarten</flux:select.option>
                                                <flux:select.option value="SD">Elementary School</flux:select.option>
                                                <flux:select.option value="SMP">Junior High School</flux:select.option>
                                            </flux:select>
                                        </div>
                                    @endif
                                </div>

                                <flux:checkbox wire:model="pendampingan" :label="__('Requires special assistance?')" />

                                <flux:textarea wire:model="saran" :label="__('Suggestions / Notes')" placeholder="Write suggestions or additional notes if any" />
                            </div>
                        </flux:fieldset>

                        <div class="mt-4 flex items-center justify-center">
                            <flux:button type="submit" variant="primary" class="w-full md:w-auto">
                                {{ __('Register Now') }}
                            </flux:button>
                        </div>
                    </form>

                    <div class="space-x-1 text-center text-sm text-zinc-600 rtl:space-x-reverse dark:text-zinc-400">
                        <span>{{ __('Already have an account?') }}</span>
                        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
