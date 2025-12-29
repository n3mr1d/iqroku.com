<div>
    <flux:main>
        <div class="mb-8">
            <flux:heading size="xl" class="text-zinc-800 dark:text-white">List Register Student TPA</flux:heading>
            <flux:text class="mt-1 text-zinc-500 dark:text-zinc-400">Manage and view all student registration data
            </flux:text>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div
                class="flex items-center border p-4 rounded-xl justify-between bg-white dark:bg-zinc-900 border-zinc-200 dark:border-zinc-800">
                <div>
                    <p class="text-sm font-medium text-zinc-500">Total</p>
                    <p class="text-2xl font-bold text-zinc-800 dark:text-white">{{ $countRegister }}</p>
                </div>
                <div class="p-3 bg-indigo-100 dark:bg-indigo-500/20 rounded-full">
                    <flux:icon icon="users" class="text-indigo-600 dark:text-indigo-400" />
                </div>
            </div>

            <div
                class="flex items-center border p-4 rounded-xl justify-between bg-white dark:bg-zinc-900 border-zinc-200 dark:border-zinc-800">
                <div>
                    <p class="text-sm font-medium text-zinc-500">Pending Payment</p>
                    <p class="text-2xl font-bold text-zinc-800 dark:text-white">{{ $countWaiting }}</p>
                </div>
                <div class="p-3 bg-yellow-100 dark:bg-yellow-500/20 rounded-full">
                    <flux:icon icon="clock" class="text-yellow-600 dark:text-yellow-400" />
                </div>
            </div>

            <div
                class="flex items-center border p-4 rounded-xl justify-between bg-white dark:bg-zinc-900 border-zinc-200 dark:border-zinc-800">
                <div>
                    <p class="text-sm font-medium text-zinc-500">Not Active</p>
                    <p class="text-2xl font-bold text-zinc-800 dark:text-white">{{ $countRejected }}</p>
                </div>
                <div class="p-3 bg-red-100 dark:bg-red-500/20 rounded-full">
                    <flux:icon icon="x-circle" class="text-red-600 dark:text-red-400" />
                </div>
            </div>

            <div
                class="flex items-center border p-4 rounded-xl justify-between bg-white dark:bg-zinc-900 border-zinc-200 dark:border-zinc-800">
                <div>
                    <p class="text-sm font-medium text-zinc-500">Active</p>
                    <p class="text-2xl font-bold text-zinc-800 dark:text-white">{{ $countApproved }}</p>
                </div>
                <div class="p-3 bg-green-100 dark:bg-green-500/20 rounded-full">
                    <flux:icon icon="check" class="text-green-600 dark:text-green-400" />
                </div>
            </div>
        </div>

        <div class="mb-6">
            <flux:input icon="magnifying-glass" type="text" wire:model.live.bounce.300ms="search"
                placeholder="Search Student By Name, Whatsapp, Father's Name, Mother's Name..." />
        </div>

        <div class="overflow-x-auto rounded-xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900">
            <table class="w-full text-left">
                <thead>
                    <tr class="border-b border-zinc-200 dark:border-zinc-800 bg-zinc-50/50 dark:bg-zinc-800/50">
                        <th
                            class="py-3 px-4 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                            No</th>
                        <th
                            class="py-3 px-4 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                            Student</th>
                        <th
                            class="py-3 px-4 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                            Umur</th>
                        <th
                            class="py-3 px-4 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                            Parent</th>
                        <th
                            class="py-3 px-4 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                            Status</th>
                        <th
                            class="py-3 px-4 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400 text-right">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse ($register as $item)
                        <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-800/50 transition-colors">
                            <td class="py-4 px-4 text-sm text-zinc-600 dark:text-zinc-400">
                                {{ ($register->currentPage() - 1) * $register->perPage() + $loop->iteration }}</td>
                            <td class="py-4 px-4">
                                <div class="flex items-center gap-3">
                                    <flux:avatar
                                        class="bg-indigo-100 dark:bg-indigo-500/20 text-indigo-600 dark:text-indigo-400"
                                        name="{{ $item->name }}" />
                                    <div>
                                        <div class="font-medium text-zinc-800 dark:text-white">{{ $item->name }}</div>
                                        <div class="text-xs text-zinc-500">{{ $item->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-4">
                                <flux:badge variant="neutral" inset="top bottom">
                                    {{ $item->datebirth ? $item->datebirth->age . ' Years' : '-' }}
                                </flux:badge>
                            </td>
                            <td class="py-4 px-4">
                                <div class="text-sm">
                                    <div class="text-zinc-800 dark:text-zinc-300"><span
                                            class="text-zinc-500 text-xs">F:</span> {{ $item->name_father }}</div>
                                    <div class="text-zinc-800 dark:text-zinc-300"><span
                                            class="text-zinc-500 text-xs">M:</span> {{ $item->name_mother }}</div>
                                </div>
                            </td>
                            <td class="py-4 px-4">
                                <flux:badge :color="$item->status->color()" inset="top bottom">
                                    {{ $item->status->label() }}
                                </flux:badge>
                            </td>
                            <td class="py-4 px-4 text-right">
                                <div class="flex items-center justify-end gap-1">
                                    <flux:button variant="ghost" size="sm" icon="eye"
                                        wire:click="view({{ $item->id }})" />
                                    <flux:button variant="ghost" size="sm" icon="pencil-square"
                                        wire:click="edit({{ $item->id }})" />
                                    <flux:button variant="ghost" size="sm" icon="trash"
                                        class="text-red-600 hover:text-red-700 dark:text-red-400"
                                        wire:click="confirmDelete({{ $item->id }})"
                                        x-on:click="$dispatch('open-modal', { name: 'delete-modal' })" />
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-zinc-500 dark:text-zinc-400">
                                <flux:icon icon="users"
                                    class="mx-auto h-12 w-12 text-zinc-300 dark:text-zinc-700 mb-4" />
                                <p>No student registrations found matching your search.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @if ($register->hasPages())
                <div class="p-4 border-t border-zinc-200 dark:border-zinc-800">
                    {{ $register->links(data: ['scrollTo' => false]) }}
                </div>
            @endif
        </div>

        {{-- View Student Modal --}}
        <flux:modal name="view-student" class="min-w-[45rem]">
            @if ($viewSelected)
                <div class="space-y-8">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center gap-4">
                            <flux:avatar size="xl"
                                class="bg-indigo-100 dark:bg-indigo-500/20 text-indigo-600 dark:text-indigo-400"
                                name="{{ $viewSelected->name }}" />
                            <div>
                                <flux:heading size="xl">{{ $viewSelected->name }}</flux:heading>
                                <div class="flex items-center gap-2 mt-1">
                                    <flux:badge :color="$viewSelected->status->color()">
                                        {{ $viewSelected->status->label() }}</flux:badge>
                                    <flux:text class="text-zinc-500">Registered on
                                        {{ $viewSelected->created_at->format('M d, Y') }}</flux:text>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <flux:heading size="md" class="border-b pb-2">Personal Information</flux:heading>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Gender
                                    </flux:text>
                                    <flux:text class="mt-1">{{ $viewSelected->gender->label() }}</flux:text>
                                </div>
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Date of
                                        Birth</flux:text>
                                    <flux:text class="mt-1">{{ $viewSelected->datebirth->format('M d, Y') }}
                                        ({{ $viewSelected->datebirth->age }} Years)</flux:text>
                                </div>
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Email
                                    </flux:text>
                                    <flux:text class="mt-1 text-break">{{ Str::limit($viewSelected->email, 20) }}
                                    </flux:text>
                                </div>
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">WhatsApp
                                    </flux:text>
                                    <flux:text class="mt-1">{{ $viewSelected->whatsapp }}</flux:text>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <flux:heading size="md" class="border-b pb-2">Family Information</flux:heading>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Father's
                                        Name</flux:text>
                                    <flux:text class="mt-1">{{ $viewSelected->name_father }}</flux:text>
                                </div>
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Mother's
                                        Name</flux:text>
                                    <flux:text class="mt-1">{{ $viewSelected->name_mother }}</flux:text>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <flux:heading size="md" class="border-b pb-2">Academic Information</flux:heading>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Level TPA
                                    </flux:text>
                                    <flux:text class="mt-1">{{ $viewSelected->leveltpa->label() }}</flux:text>
                                </div>
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Previous
                                        TPA</flux:text>
                                    <flux:text class="mt-1">{{ $viewSelected->tpalama ? 'Yes' : 'No' }}</flux:text>
                                </div>
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Need
                                        Assistance</flux:text>
                                    <flux:text class="mt-1">{{ $viewSelected->pendampingan ? 'Yes' : 'No' }}
                                    </flux:text>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <flux:heading size="md" class="border-b pb-2">Notes & Suggestions</flux:heading>
                            <div class="space-y-4">
                                <div>
                                    <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">User
                                        Suggestions</flux:text>
                                    <flux:text class="mt-1 italic italic text-zinc-600 dark:text-zinc-400">
                                        {{ $viewSelected->saran ?: 'No suggestions provided.' }}</flux:text>
                                </div>
                                @if ($viewSelected->admin_notes)
                                    <div>
                                        <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Admin
                                            Notes</flux:text>
                                        <flux:text class="mt-1">{{ $viewSelected->admin_notes }}</flux:text>
                                    </div>
                                @else
                                    <div>
                                        <flux:text size="sm" class="text-zinc-500 uppercase font-semibold">Admin
                                            Notes</flux:text>
                                        <flux:text class="mt-1">No notes provided.</flux:text>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-2 pt-4 border-t">
                        <div class="flex flex-col">
                            <flux:text size="sm">Last Edited By: <span
                                    class="font-medium text-zinc-800 dark:text-zinc-200">{{ $last_editor_name ?? 'Not Edited' }}</span>
                            </flux:text>
                            <flux:text size="sm">Group: <span
                                    class="font-medium text-zinc-800 dark:text-zinc-200">{{ $group ?? 'Anonymous Group' }}</span>
                            </flux:text>
                        </div>

                        <flux:spacer />
                        <flux:modal.close>
                            <flux:button variant="ghost">Close Profile</flux:button>
                        </flux:modal.close>
                        <flux:button icon="pencil-square" wire:click="edit({{ $viewSelected->id }})">Edit Profile
                        </flux:button>
                    </div>
                </div>
            @else
                <div class="flex flex-col items-center justify-center py-12">
                    <flux:icon icon="arrow-path" class="h-10 w-10 animate-spin text-indigo-600" />
                    <flux:text class="mt-4">Loading student profile...</flux:text>
                </div>
            @endif
        </flux:modal>

        {{-- Edit Student Modal --}}
        <flux:modal name="edit-student" class="min-w-[45rem]">
            @if ($selectedStudent)
                <form wire:submit="updateStudent" class="space-y-6">
                    <div>
                        <flux:heading size="xl">Edit Profile: {{ $selectedStudent->name }}</flux:heading>
                        <flux:text class="mt-1">Update registration details for this student</flux:text>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <flux:field>
                            <flux:label>Student Full Name</flux:label>
                            <flux:input wire:model="name" placeholder="Full name of student" />
                            <flux:error name="name" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Date of Birth</flux:label>
                            <flux:input type="date" wire:model="datebirth" />
                            <flux:error name="datebirth" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Gender</flux:label>
                            <flux:select wire:model="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </flux:select>
                            <flux:error name="gender" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Registration Status</flux:label>
                            <flux:select wire:model="status">
                                @foreach ($statusSelect as $status)
                                    <option value="{{ $status->value }}">{{ $status->label() }}
                                    </option>
                                @endforeach
                            </flux:select>
                            <flux:error name="status" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Email Address</flux:label>
                            <flux:input type="email" wire:model="email" />
                            <flux:error name="email" />
                        </flux:field>

                        <flux:field>
                            <flux:label>WhatsApp Number</flux:label>
                            <flux:input wire:model="whatsapp" />
                            <flux:error name="whatsapp" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Father's Name</flux:label>
                            <flux:input wire:model="name_father" />
                            <flux:error name="name_father" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Mother's Name</flux:label>
                            <flux:input wire:model="name_mother" />
                            <flux:error name="name_mother" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Target Level TPA</flux:label>
                            <flux:select wire:model="leveltpa">
                                @foreach (App\Enum\LevelTPA::cases() as $level)
                                    <option value="{{ $level->value }}">{{ $level->label() }}</option>
                                @endforeach
                            </flux:select>
                            <flux:error name="leveltpa" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Group (Optional)</flux:label>
                            <flux:input wire:model="group" placeholder="e.g. Group A, Class 1" />
                            <flux:error name="group" />
                        </flux:field>

                        <div class="flex flex-col gap-4 justify-center md:col-span-1">
                            <flux:checkbox wire:model="tpalama" label="Previously studied at TPA" />
                            <flux:checkbox wire:model="pendampingan" label="Requires special assistance" />
                        </div>

                        <flux:field class="md:col-span-2">
                            <flux:label>Admin Notes</flux:label>
                            <flux:textarea wire:model="admin_notes" rows="3"
                                placeholder="Additional notes for administration..." />
                            <flux:error name="admin_notes" />
                        </flux:field>
                    </div>

                    <div class="flex justify-end gap-2 pt-4 border-t">
                        <div class="flex flex-col">
                            <flux:text size="xs" class="text-zinc-400">Last Edited By:
                                {{ $last_editor_name ?? 'Not Edited' }}</flux:text>
                        </div>
                        <flux:spacer />
                        <flux:modal.close>
                            <flux:button variant="ghost">Cancel Changes</flux:button>
                        </flux:modal.close>

                        <flux:button type="submit" variant="primary">
                            Save Profile Updates
                        </flux:button>
                    </div>
                </form>
            @endif
        </flux:modal>

        {{-- Delete Student Modal --}}
        <flux:modal name="delete-modal" class="max-w-sm">
            @if ($selectedStudent)
                <div class="space-y-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="p-3 bg-red-100 dark:bg-red-500/20 rounded-full mb-4">
                            <flux:icon icon="trash" class="h-8 w-8 text-red-600 dark:text-red-400" />
                        </div>
                        <flux:heading size="lg">Confirm Deletion</flux:heading>
                        <flux:text class="mt-2">
                            Are you sure you want to delete the registration for
                            <strong>{{ $selectedStudent->name }}</strong>? This action cannot be undone.
                        </flux:text>
                    </div>

                    <div class="flex flex-col gap-2">
                        <flux:button wire:click="deleteRegistration" variant="danger" class="w-full">
                            Yes, Delete Registration
                        </flux:button>
                        <flux:modal.close>
                            <flux:button variant="ghost" class="w-full">Cancel</flux:button>
                        </flux:modal.close>
                    </div>
                </div>
            @endif
        </flux:modal>
    </flux:main>
</div>
