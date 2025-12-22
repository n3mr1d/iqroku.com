<div>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <!-- Header -->
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <flux:badge color="lime" size="sm" class="mb-4" icon="user-circle">Team</flux:badge>

                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900" data-aos="fade">
                    Our Team
                </h2>

            </div>

            <div data-aos="fade-up" class="relative min-h-[600px]">

                <div wire:loading.remove wire:target="previousPage,nextPage,gotoPage"
                    class="grid gap-8 lg:gap-12 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mb-8 team-grid">
                    @foreach($teamMembers as $index => $member)
                    <div class="team-card group opacity-0"
                        style="animation: fadeInUp 0.6s ease forwards {{ $index * 0.1 }}s;">
                        <div class="text-center text-gray-500">
                            <!-- Avatar with hover effect -->
                            <div
                                class="relative shadow-xl/59 mx-auto mb-4 w-36 h-36 overflow-hidden rounded-full transition-all duration-300 group-hover:scale-110 group-hover:shadow-xl">
                                <img class="w-full h-full object-cover" src="{{ $member['foto'] }}"
                                    alt="{{ $member['nama'] }}" loading="lazy">
                                <!-- Hover overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300">
                                </div>
                            </div>

                            <!-- Name -->
                            <h3
                                class="mb-1 text-xl font-bold tracking-tight text-gray-900 transition-colors duration-300 group-hover:text-blue-600">
                                {{ $member['nama'] }}
                            </h3>

                            <!-- Position -->
                            <p
                                class="text-sm font-medium text-gray-500 transition-colors duration-300 group-hover:text-gray-700">
                                {{ $member['posisi'] }}
                            </p>

                            <!-- Decorative line that appears on hover -->
                            <div
                                class="mx-auto mt-3 h-0.5 w-0 bg-blue-600 transition-all duration-300 group-hover:w-16">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                {{ $teamMembers->links('livewire.pagination-links') }}
            </div>
        </div>
    </section>

    <style>
        /* Fade in and slide up animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Team card base styles */
        .team-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        /* Hover effect with smooth lift */
        .team-card:hover {
            transform: translateY(-8px);
        }

        /* Add subtle shadow on hover */
        .team-card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 0.5rem;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, rgba(147, 197, 253, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }

        .team-card:hover::before {
            opacity: 1;
        }

        /* Smooth grid transition */
        .team-grid {
            transition: opacity 0.3s ease-in-out;
        }

        /* Image zoom effect */
        .team-card img {
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Staggered animation reset on wire:loading.remove */
        [wire\:loading\.remove] .team-card {
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>

    {{-- Alpine.js for smoother page transitions (optional enhancement) --}}
    @push('scripts')
    <script>
        // Smooth scroll to top on pagination
        document.addEventListener('livewire:init', () => {
            Livewire.hook('commit', ({component, commit, respond, succeed, fail}) => {
                succeed(({snapshot, effect}) => {
                    // Smooth scroll to team section when pagination changes
                    if (component.name === 'team-section') {
                        const section = document.querySelector('section');
                        if (section) {
                            section.scrollIntoView({behavior: 'smooth', block: 'start'});
                        }
                    }
                });
            });
        });
    </script>
    @endpush
</div>
