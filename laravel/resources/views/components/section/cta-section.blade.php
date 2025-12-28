<div>
    <section id="cta" class="relative py-16 md:py-24 overflow-hidden">


        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                <!-- Left Content -->
                <div class="cta-content space-y-6 opacity-0">
                    <!-- Badge -->

                    <flux:badge icon="user" color="orange">Join Our Community</flux:badge>

                    <!-- Title -->
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black leading-tight">
                        Our Peoples
                    </h2>

                    <!-- Description -->
                    <div class="space-y-4 text-black">
                        <p class="text-lg leading-relaxed">
                            This TPA is not only a place where children learn to read the Qur’an, but also a space to
                            instill Islamic values, practice good manners (adab), and grow in a spirit of togetherness.
                            With the support of parents, teachers, and the community, in shaa Allah, children will gain
                            a joyful and meaningful learning experience.
                        </p>

                    </div>

                    <!-- CTA Button -->
                    <div class="pt-4">
                        <a href="{{ route('register') }}" wire:navigate
                            class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-semibold rounded-lg shadow-lg shadow-blue-500/50 hover:shadow-xl hover:shadow-blue-500/60 transform hover:-translate-y-1 transition-all duration-300 group">
                            <span>Register Now</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>

                    <!-- Stats (Optional) -->

                </div>

                <!-- Right Content - Image Grid -->
                <div class="cta-images relative opacity-0">
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Large Image - Top Right -->
                        <div class="col-span-2 group relative overflow-hidden rounded-2xl shadow-2xl">
                            <img src="{{ asset('source/IMG_2046.JPG') }}" alt="Team collaboration"
                                class="w-full h-72 md:h-80 object-cover transform group-hover:scale-110 transition-transform duration-700" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>

                        <!-- Small Image 1 - Bottom Left -->
                        <div class="group relative overflow-hidden rounded-2xl shadow-xl">
                            <img src="{{ asset('source/IMG_2047.JPG') }}" alt="Team member"
                                class="w-full h-48 md:h-56 object-cover transform group-hover:scale-110 transition-transform duration-700" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>

                        <!-- Small Image 2 - Bottom Center -->
                        <div class="group relative overflow-hidden rounded-2xl shadow-xl">
                            <img src="{{ asset('source/IMG_2048.JPG') }}" alt="Team activity"
                                class="w-full h-48 md:h-56 object-cover transform group-hover:scale-110 transition-transform duration-700" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div
                            class="absolute -top-4 -right-4 w-24 h-24 bg-blue-500 rounded-full filter blur-2xl opacity-30 animate-pulse">
                        </div>
                        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-purple-500 rounded-full filter blur-2xl opacity-20 animate-pulse"
                            style="animation-delay: 1s;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Divider (Optional) -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-16 md:h-24 text-white" viewBox="0 0 1440 120" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 0L48 8.9C96 17.8 192 35.6 288 44.5C384 53.4 480 53.4 576 48.9C672 44.4 768 35.4 864 35.6C960 35.8 1056 44.2 1152 44.5C1248 44.8 1344 37.2 1392 33.4L1440 29.6V120H1392C1344 120 1248 120 1152 120C1056 120 960 120 864 120C768 120 672 120 576 120C480 120 384 120 288 120C192 120 96 120 48 120H0V0Z"
                    fill="currentColor" />
            </svg>
        </div>
    </section>

    <style>
        /* Custom animations */
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

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Hover glow effect */
        .cta-content a:hover {
            box-shadow: 0 0 40px rgba(59, 130, 246, 0.6);
        }

        /* Image shimmer effect */
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }
    </style>
</div>
