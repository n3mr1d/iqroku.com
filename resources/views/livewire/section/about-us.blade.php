<div>
    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-6">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div data-aos="fade-right" class="text-center mb-16">
                <div class="inline-flex items-center gap-3 mb-6">
                    <flux:badge color="lime" icon="user"> About Us </flux:badge>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    About
                </h1>

            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div data-aos="fade-up" class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                        TPA Abu Dhabi is a weekly Qur’an learning space for Indonesian children living in Abu Dhabi.
                    </h2>

                    <div class="space-y-4">
                        <h3 class="text-2xl font-semibold text-gray-800">
                            Our Focus
                        </h3>

                        <ul class="list-disc list-inside text-lg text-gray-600 leading-relaxed space-y-2">
                            <li>
                                Reading the Qur’an using the <strong>Iqra’ method</strong> (Levels 1–6) and the Qur’an
                            </li>
                            <li>
                                Memorization of short surahs and daily supplications (du’a)
                            </li>
                            <li>
                                Islamic stories and the practice of basic Islamic manners (adab)
                            </li>
                            <li>
                                Building a strong community of children, teachers, and parents in a fun and nurturing
                                Islamic environment
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Content - Image Grid -->
                <div class="relative h-[500px]">
                    <!-- Image 1 -->
                    <div data-aos="zoom-out-right" class="absolute top-0 shadow-xl/30 left-0 w-48 h-56 float-animation">
                        <img src="{{ asset('/source/IMG_2046.JPG') }}" alt="Workspace"
                            class="w-full h-full object-cover rounded-2xl shadow-2xl">
                    </div>

                    <!-- Image 2 -->
                    <div data-aos="zoom-out-left"
                        class="absolute shadow-xl/30 top-12 right-0 w-52 h-60 float-animation">
                        <img src="{{ asset('/source/IMG_2047.JPG') }}" alt="Team Meeting"
                            class="w-full h-full object-cover rounded-2xl shadow-2xl">
                    </div>

                    <!-- Image 3 -->
                    <div data-aos="zoom-out-right"
                        class="absolute shadow-xl/30 bottom-20 left-12 w-44 h-52 float-animation">
                        <img src="{{ asset('/source/IMG_2048.JPG') }}" alt="Professional"
                            class="w-full h-full object-cover rounded-2xl shadow-2xl">
                    </div>

                    <!-- Image 4 -->
                    <div data-aos="zoom-out-left"
                        class="absolute bottom-0 shadow-xl/30 right-8 w-48 h-56 float-animation">
                        <img src="{{ asset('/source/IMG_2049.JPG') }}" alt="Office"
                            class="w-full h-full object-cover rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-divide />
    <!-- Vision & Mission Hero Section -->
    <section class="relative overflow-hidden  py-20 px-6">
        <!-- Decorative Background Elements -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse">
        </div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"
            style="animation-delay: 2s;"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-3 mb-6">
                    <flux:badge color="indigo" icon="puzzle-piece"> Our Purpose </flux:badge>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Vision & <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Mission</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Nurturing a Qur'anic generation through excellence in education and character building
                </p>
            </div>

            <!-- Vision & Mission Cards -->
            <div class="grid lg:grid-cols-2 gap-8 mb-20">
                <!-- Vision Card -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 rounded-3xl blur-xl opacity-20 group-hover:opacity-30 transition-opacity">
                    </div>
                    <div
                        class="relative bg-white rounded-3xl p-10 shadow-2xl hover:shadow-3xl transition-all duration-500 border border-gray-100">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-20 h-20 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl flex items-center justify-center shadow-lg float-animation">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h2 class="text-3xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                                    Our Vision

                                </h2>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    To nurture a Qur'anic generation of Indonesian children in Abu Dhabi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-500 to-blue-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-30 transition-opacity">
                    </div>
                    <div
                        class="relative bg-white rounded-3xl p-10 shadow-2xl hover:shadow-3xl transition-all duration-500 border border-gray-100">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg float-animation"
                                    style="animation-delay: 1s;">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 sm:flex-col sm:items-center  ">
                                <h2 class="text-3xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                                    Our Mission

                                </h2>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    Empowering children through comprehensive Islamic education and values
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission Details Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Mission 1 -->
                <div
                    class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-blue-300 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center mb-6 group-hover:from-blue-500 group-hover:to-blue-600 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                        Qur'an Literacy
                    </h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Develop reading, understanding, and practicing the Qur'an correctly
                    </p>
                </div>

                <!-- Mission 2 -->
                <div
                    class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-purple-300 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl flex items-center justify-center mb-6 group-hover:from-purple-500 group-hover:to-purple-600 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-8 h-8 text-purple-600 group-hover:text-white transition-colors"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors">
                        Islamic Character
                    </h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Instill Islamic values, character, and proper adab in daily life
                    </p>
                </div>

                <!-- Mission 3 -->
                <div
                    class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-green-300 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-xl flex items-center justify-center mb-6 group-hover:from-green-500 group-hover:to-green-600 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-8 h-8 text-green-600 group-hover:text-white transition-colors"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">
                        Joyful Learning
                    </h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Create interactive and engaging educational experiences
                    </p>
                </div>

                <!-- Mission 4 -->
                <div
                    class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-red-300 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-red-100 to-red-200 rounded-xl flex items-center justify-center mb-6 group-hover:from-red-500 group-hover:to-red-600 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-8 h-8 text-red-600 group-hover:text-white transition-colors" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-red-600 transition-colors">
                        Unified Community
                    </h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Connect children, teachers, and parents in collaborative growth
                    </p>
                </div>
            </div>
        </div>
    </section>


</div>
