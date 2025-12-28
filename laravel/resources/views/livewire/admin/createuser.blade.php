<div>
    <div class="max-w-4xl mx-auto py-10 px-6">
        <div class="flex items-center gap-4 mb-8 border-b border-zinc-200 dark:border-zinc-800">
            <flux:navbar>
                <flux:navbar.item icon="user-plus" :current="$activeTab === 'create'"
                    wire:click="$set('activeTab', 'create')">
                    {{ __('Add New User') }}
                </flux:navbar.item>
                <flux:navbar.item :badge="$countuser" badge:color="lime" icon="users"
                    :current="$activeTab === 'list'" wire:click="$set('activeTab', 'list')">
                    {{ __('Users') }}
                </flux:navbar.item>
            </flux:navbar>

        </div>

        @if ($activeTab === 'create')
            <div class="mt-8">
                <flux:heading size="xl" level="1">
                    {{ __('Add New User') }}
                </flux:heading>

                <flux:subheading class="mb-8">
                    {{ __('Fill in the details below to create a new user account.') }}
                </flux:subheading>

                <form wire:submit.prevent="save" class="space-y-6">
                    {{-- Name --}}
                    <div>
                        <flux:input label="{{ __('Name') }}" wire:model.defer="name" placeholder="Full Name" />
                    </div>

                    {{-- Email --}}
                    <div>
                        <flux:input label="{{ __('Email Address') }}" type="email" wire:model.defer="email"
                            placeholder="email@example.com" />
                    </div>

                    {{-- Role --}}
                    <div>
                        <flux:select label="{{ __('Role') }}" wire:model.defer="roleform">
                            @foreach ($roles as $role)
                                <flux:select.option value="{{ $role->value }}">
                                    {{ $role->label() }}
                                </flux:select.option>
                            @endforeach
                        </flux:select>
                    </div>

                    {{-- Password --}}
                    <div>
                        <flux:input label="{{ __('Password') }}" type="password" wire:model.defer="password" viewable />
                    </div>

                    {{-- Submit --}}
                    <div class="flex justify-end pt-4">
                        <flux:button type="submit" variant="primary" wire:loading.attr="disabled">
                            <span wire:loading.remove>
                                {{ __('Create User') }}
                            </span>
                            <span wire:loading>
                                {{ __('Saving...') }}
                            </span>
                        </flux:button>
                    </div>
                </form>
            </div>
        @else
            <div class="mt-8">
                <flux:heading size="xl" level="1">
                    {{ __('Users') }}
                </flux:heading>
                <flux:subheading class="mb-8">
                    {{ __('Total users: ') }} {{ $countuser }}
                </flux:subheading>



                <div
                    class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                    <div class="p-4">
                        <label for="input-group-1" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="input-group-1"
                                class="block w-full max-w-96 ps-9 pe-3 py-2 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Search" wire:model.live.debounce.250ms="search">

                        </div>
                    </div>
                    <div class="relative overflow-x-auto rounded-xl border border-default">
                        <table class="w-full text-sm text-left rtl:text-right text-body">
                            <!-- TABLE HEAD -->
                            <thead class="bg-neutral-secondary-medium text-body border-b border-default">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Role
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Action
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        created at
                                    </th>
                                </tr>
                            </thead>

                            <!-- TABLE BODY -->
                            <tbody class="divide-y divide-default">
                                @forelse ($userlist as $acc)
                                    <tr
                                        class="bg-neutral-primary-soft hover:bg-neutral-secondary-medium
                           transition-colors">

                                        <td class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                            {{ $loop->iteration }}
                                        </td>

                                        <td class="px-6 py-4">
                                            {{ $acc->name }}
                                        </td>

                                        <td class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                            {{ $acc->role->label() }}
                                        </td>

                                        <td class="px-6 py-4 t">
                                            <a href="#" class="text-fg-brand font-medium hover:underline">
                                                Edit
                                            </a>
                                        </td>

                                        <td class="px-6 py-4 t">
                                            {{ $acc->created_at->diffForHumans() }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-8 text-center text-body">
                                            Data tidak ditemukan
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="mt-4">
                    {{ $userlist->links() }}
                </div>
            </div>
        @endif
    </div>
</div>
