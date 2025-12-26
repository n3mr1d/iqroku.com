<div>
    <section id="hero" class="relative overflow-hidden min-h-screen flex items-center py-12 md:py-0">
        <div class="w-full">
            <!-- Decorative Background Elements -->
            <div class="absolute inset-0 bg-white/50 dark:bg-black/50 backdrop-blur-3xl -z-10"></div>
            <div
                class="hero-blob absolute top-0 right-0 -mr-32 -mt-32 w-[300px] h-[300px] md:w-[500px] md:h-[500px] rounded-full bg-blue-200/40 blur-[100px] dark:bg-blue-900/20 opacity-0 mix-blend-multiply dark:mix-blend-screen">
            </div>
            <div
                class="hero-blob absolute bottom-0 left-0 -ml-32 -mb-32 w-[400px] h-[400px] md:w-[600px] md:h-[600px] rounded-full bg-purple-200/40 blur-[120px] dark:bg-purple-900/20 opacity-0 mix-blend-multiply dark:mix-blend-screen">
            </div>
            <div
                class="hero-blob absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] md:w-[800px] md:h-[800px] rounded-full bg-pink-100/30 blur-[100px] dark:bg-pink-900/10 opacity-0 mix-blend-multiply dark:mix-blend-screen -z-20">
            </div>

            <div class="container mx-auto px-4 sm:px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-20 items-center">
                    <!-- Left Content -->
                    <div class="space-y-6 md:space-y-8 text-center lg:text-left">
                        <div class="hero-element opacity-0">
                            <span
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-zinc-100 dark:bg-zinc-800 text-sm font-medium text-zinc-700 dark:text-zinc-300">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                TPA KMMI Abu Dhabi
                            </span>
                        </div>

                        <h1
                            class="hero-element opacity-0 text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-gray-900 dark:text-white leading-tight">
                            Welcome to our TPA Family!
                        </h1>

                        <div
                            class="hero-element opacity-0 space-y-4 md:space-y-6 text-base md:text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                            <p>
                                We are delighted to warmly welcome all parents to <strong
                                    class="text-gray-900 dark:text-white">TPA KMMI Abu Dhabi</strong>.
                                Thank you for trusting us with the education and development of your children.
                            </p>

                            <p class="font-medium text-blue-600 dark:text-blue-400 italic">
                                "Let us go through this academic year with enthusiasm, prayers, and sincere hearts."
                            </p>
                        </div>

                        <div
                            class="hero-element opacity-0 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                            <a target="_blank"
                                href="https://wa.me/{{ config('tpasetting.indo_number') }}/?text={{ urlencode(config('tpasetting.messages.cta_hero')) }}"
                                class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-green-600 hover:bg-green-700 text-white font-medium transition-colors w-full sm:w-auto">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                </svg>
                                Contact Us
                            </a>

                            <a wire:navigate href="{{ route('register') }}"
                                class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-medium transition-colors w-full sm:w-auto">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Register Now
                            </a>
                        </div>
                    </div>

                    <!-- Right Image Section -->
                    <div class="hero-image-container opacity-0 relative mt-8 lg:mt-0">
                        <!-- Abstract Shapes -->
                        <div
                            class="absolute -top-10 -right-10 w-24 h-24 md:w-32 md:h-32 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse">
                        </div>
                        <div class="absolute -bottom-8 -left-8 w-24 h-24 md:w-32 md:h-32 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"
                            style="animation-delay: 2s;"></div>

                        <div
                            class="relative rounded-3xl md:rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white/50 dark:border-gray-700/50 backdrop-blur-sm">
                            <img class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700"
                                src="{{ asset('source/hero.JPG') }}" alt="TPA KMMI Abu Dhabi Students">
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>



    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .animate-float-slow {
            animation: float 6s ease-in-out infinite;
        }

        @media (max-width: 1023px) {
            .animate-float {
                animation: none !important;
            }
        }
    </style>

</div>
