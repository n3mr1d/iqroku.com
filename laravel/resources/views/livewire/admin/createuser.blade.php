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
                    <flux:input label="{{ __('Name') }}" wire:model="name" placeholder="Full Name" />
                    <flux:input label="{{ __('Email Address') }}" type="email" wire:model="email"
                        placeholder="email@example.com" />

                    <flux:select label="{{ __('Role') }}" wire:model="roleform">
                        <flux:select.option value="">{{ __('Select a role') }}</flux:select.option>
                        @foreach ($roles as $role)
                            <flux:select.option value="{{ $role->value }}">
                                {{ $role->label() }}
                            </flux:select.option>
                        @endforeach
                    </flux:select>

                    <flux:input label="{{ __('Password') }}" type="password" wire:model="password" viewable />

                    <div class="flex justify-end pt-4">
                        <flux:button type="submit" variant="primary" wire:loading.attr="disabled">
                            <span wire:loading.remove>{{ __('Create User') }}</span>
                            <span wire:loading>{{ __('Saving...') }}</span>
                        </flux:button>
                    </div>
                </form>
            </div>
        @else
            <div class="mt-8">
                <flux:heading size="xl" level="1">{{ __('Users') }}</flux:heading>
                <flux:subheading class="mb-8">
                    {{ __('Total users: ') }} {{ $countuser }}
                </flux:subheading>

                <div
                    class="relative overflow-x-auto bg-white dark:bg-zinc-900 shadow-sm rounded-xl border border-zinc-200 dark:border-zinc-800">
                    <div class="p-4 border-b border-zinc-200 dark:border-zinc-800">
                        <div class="relative max-w-sm">
                            <flux:input icon="magnifying-glass" type="text" placeholder="Search users..."
                                wire:model.live.debounce.250ms="search" />
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-zinc-600 dark:text-zinc-400">
                            <thead
                                class="bg-zinc-50 dark:bg-zinc-800/50 text-xs uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                                <tr>
                                    <th scope="col" class="py-3 px-4 font-semibold">No</th>
                                    <th scope="col" class="py-3 px-4 font-semibold">Name</th>
                                    <th scope="col" class="py-3 px-4 font-semibold">Role</th>
                                    <th scope="col" class="py-3 px-4 font-semibold text-center">Action</th>
                                    <th scope="col" class="py-3 px-4 font-semibold">Created At</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                                @forelse ($userlist as $acc)
                                    <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-800/50 transition-colors">
                                        <td class="py-4 px-4">{{ $loop->iteration + ($userlist->firstItem() - 1) }}
                                        </td>
                                        <td class="py-4 px-4">
                                            <div class="flex items-center gap-3">
                                                <flux:avatar
                                                    class="bg-indigo-100 dark:bg-indigo-500/20 text-indigo-600 dark:text-indigo-400"
                                                    name="{{ $acc->name }}" />
                                                <div>
                                                    <div class="font-medium text-zinc-800 dark:text-white">
                                                        {{ $acc->name }}</div>
                                                    <div class="text-xs text-zinc-500">{{ $acc->email }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4">
                                            <flux:badge size="sm"
                                                :color="$acc->role->value === 'admin' ? 'rose' : ($acc->role->value === 'teacher' ? 'indigo' : 'lime')">
                                                {{ $acc->role->label() }}
                                            </flux:badge>
                                        </td>
                                        <td class="py-4 px-4">
                                            <div class="flex items-center justify-center gap-1">
                                                @if ($acc->id != auth()->user()->id)
                                                    <flux:button variant="ghost" size="sm" icon="eye"
                                                        wire:click="view({{ $acc->id }})" />
                                                    <flux:button variant="ghost" size="sm" icon="pencil-square"
                                                        wire:click="edit({{ $acc->id }})" />
                                                    <flux:button variant="ghost" size="sm" icon="trash"
                                                        class="text-red-600 hover:text-red-700 dark:text-red-400"
                                                        wire:click="confirmDelete({{ $acc->id }})" />
                                                @else
                                                    <flux:text>You can't edit or delete your own account</flux:text>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="py-4 px-4">{{ $acc->created_at->diffForHumans() }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"
                                            class="px-6 py-12 text-center text-zinc-500 bg-white dark:bg-zinc-900">
                                            <div class="flex flex-col items-center gap-2">
                                                <flux:icon icon="users" class="h-8 w-8 text-zinc-300" />
                                                <p>{{ __('No users found.') }}</p>
                                            </div>
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

    {{-- View User Modal --}}

    <flux:modal name="view-user" class="md:w-[500px]">


        @if ($selectedView)
            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <flux:avatar size="xl"
                        class="bg-indigo-100 dark:bg-indigo-500/20 text-indigo-600 dark:text-indigo-400"
                        name="{{ $selectedView->name ?? '' }}" />
                    <div>
                        <flux:heading size="xl">{{ $selectedView->name ?? '' }}</flux:heading>
                        <flux:subheading>{{ $selectedView->email ?? '' }}</flux:subheading>
                    </div>
                </div>

                <flux:separator />

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <flux:label>{{ __('Role') }}</flux:label>
                        <div class="mt-1">
                            @if ($selectedView)
                                <flux:badge
                                    :color="$selectedView->role->value === 'admin' ? 'rose' : ($selectedView->role->value === 'teacher' ? 'indigo' : 'lime')">
                                    {{ $selectedView->role->label() }}
                                </flux:badge>
                            @endif
                        </div>
                    </div>
                    <div>
                        <flux:label>{{ __('Joined At') }}</flux:label>
                        <div class="mt-1 text-zinc-800 dark:text-zinc-200">
                            {{ $selectedView->created_at->format('M d, Y') ?? '' }}
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pt-4">
                    <flux:modal.close>
                        <flux:button variant="ghost">{{ __('Close') }}</flux:button>
                    </flux:modal.close>
                </div>
            </div>
        @endif
    </flux:modal>

    {{-- Edit User Modal --}}
    <flux:modal name="edit-user" class="md:w-[500px]">
        <form wire:submit.prevent="save" class="space-y-6">
            <div>
                <flux:heading size="xl">{{ __('Edit User') }}</flux:heading>
                <flux:subheading>{{ __('Update account information for ') }} <span
                        class="font-medium text-zinc-800 dark:text-white">{{ $selectedView->name ?? '' }}</span>
                </flux:subheading>
            </div>

            <flux:separator />

            <div class="space-y-4">
                <flux:input label="{{ __('Name') }}" wire:model="name" />
                <flux:input label="{{ __('Email Address') }}" type="email" wire:model="email" />
                <flux:select label="{{ __('Role') }}" wire:model="roleform">
                    @foreach ($roles as $role)
                        <flux:select.option value="{{ $role->value }}">
                            {{ $role->label() }}
                        </flux:select.option>
                    @endforeach
                </flux:select>
                <flux:input label="{{ __('New Password (optional)') }}" type="password" wire:model="password"
                    viewable placeholder="Leave blank to keep current" />
            </div>

            <div class="flex justify-end gap-2 pt-4">
                <flux:modal.close>
                    <flux:button variant="ghost">{{ __('Cancel') }}</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="primary">{{ __('Save Changes') }}</flux:button>
            </div>
        </form>
    </flux:modal>

    {{-- Delete Modal --}}
    <flux:modal name="delete-modal" class="max-w-sm">
        @if ($selectedView)
            <div class="space-y-6">
                <div class="flex flex-col items-center text-center">
                    <div class="p-3 bg-red-100 dark:bg-red-500/20 rounded-full mb-4">
                        <flux:icon icon="trash" class="h-8 w-8 text-red-600 dark:text-red-400" />
                    </div>
                    <flux:heading size="lg">{{ __('Confirm Deletion') }}</flux:heading>
                    <flux:text class="mt-2">
                        {{ __('Are you sure you want to delete ') }} <strong>{{ $selectedView->name }}</strong>?
                        {{ __('This action cannot be undone.') }}
                    </flux:text>
                </div>

                <div class="flex flex-col gap-2">
                    <flux:button wire:click="deleteRegistration" variant="danger" class="w-full">
                        {{ __('Delete User') }}
                    </flux:button>
                    <flux:modal.close>
                        <flux:button variant="ghost" class="w-full">{{ __('Cancel') }}</flux:button>
                    </flux:modal.close>
                </div>
            </div>
        @endif
    </flux:modal>
</div>
