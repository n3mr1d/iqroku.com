<div>
    <section id="activities" class="kegiatan-section relative py-16 md:py-24 overflow-hidden">
        {{-- Animated Background Blobs --}}
        <div class="absolute inset-0 pointer-events-none opacity-30">
            <div
                class="blob blob-1 absolute top-20 right-10 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl animate-blob">
            </div>
            <div
                class="blob blob-2 absolute bottom-10 left-10 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="activities-header text-center mb-16 opacity-0">
                <div class="inline-flex items-center gap-3 mb-6">
                    <flux:badge color="blue" icon="sparkles" variant="pill"> Supporting Programs </flux:badge>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 tracking-tight">
                    Supporting Activities
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Nurturing the Qur'anic generation through comprehensive programs designed to deepen knowledge and
                    build character.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Activity 1 -->
                <div class="activity-card group opacity-0" data-activity="1">
                    <div class="activity-inner">
                        <div class="activity-icon-wrapper">
                            <div class="activity-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2L2 7L12 12L22 7L12 2Z"></path>
                                    <path d="M2 17L12 22L22 17"></path>
                                    <path d="M2 12L12 17L22 12"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="activity-title text-xl font-bold text-gray-900 mb-3">Ramadan Intensive Program</h3>
                        <p class="activity-description text-gray-600 leading-relaxed">
                            An intensive program conducted during the month of Ramadan to deepen students’ Islamic
                            knowledge and understanding.
                        </p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="activity-card group opacity-0" data-activity="2">
                    <div class="activity-inner">
                        <div class="activity-icon-wrapper">
                            <div class="activity-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>
                        </div>
                        <h3 class="activity-title text-xl font-bold text-gray-900 mb-3">Competitive & Creative
                            Activities</h3>
                        <p class="activity-description text-gray-600 leading-relaxed">
                            Competitive and creative activities to hone students' talents and foster a spirit of healthy
                            competition.
                        </p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="activity-card group opacity-0" data-activity="3">
                    <div class="activity-inner">
                        <div class="activity-icon-wrapper">
                            <div class="activity-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                                    </rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </div>
                        </div>
                        <h3 class="activity-title text-xl font-bold text-gray-900 mb-3">Documentation & Social Media
                        </h3>
                        <p class="activity-description text-gray-600 leading-relaxed">
                            Capturing milestones and creating educational digital content to inspire others in the
                            community.
                        </p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="activity-card group opacity-0" data-activity="4">
                    <div class="activity-inner">
                        <div class="activity-icon-wrapper">
                            <div class="activity-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                        </div>
                        <h3 class="activity-title text-xl font-bold text-gray-900 mb-3">Mid-year Evaluation</h3>
                        <p class="activity-description text-gray-600 leading-relaxed">
                            Comprehensive periodic assessments to monitor student progress and ensure learning
                            objectives
                            are met.
                        </p>
                    </div>
                </div>

                <!-- Activity 5 -->
                <div class="activity-card group opacity-0" data-activity="5">
                    <div class="activity-inner">
                        <div class="activity-icon-wrapper">
                            <div class="activity-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="activity-title text-xl font-bold text-gray-900 mb-3">Year-end Promotion Ceremony
                        </h3>
                        <p class="activity-description text-gray-600 leading-relaxed">
                            Celebrating achievements with a formal graduation ceremony and Iqra grade promotion
                            announcements.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .activity-card {
                perspective: 1000px;
            }

            .activity-inner {
                position: relative;
                background: white;
                border-radius: 24px;
                padding: 40px 32px;
                text-align: center;
                border: 2px solid #f1f5f9;
                transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
                height: 100%;
                z-index: 1;
            }

            .activity-card:hover .activity-inner {
                transform: translateY(-10px);
                border-color: #3b82f6;
                box-shadow: 0 20px 40px -20px rgba(59, 130, 246, 0.3);
            }

            .activity-icon-wrapper {
                position: relative;
                width: 80px;
                height: 80px;
                margin: 0 auto 28px;
                z-index: 2;
            }

            .activity-icon {
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
                border-radius: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
                color: #3b82f6;
            }

            .activity-card:hover .activity-icon {
                background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
                color: white;
                transform: scale(1.1) rotate(8deg);
                box-shadow: 0 10px 20px -5px rgba(37, 99, 235, 0.4);
            }

            .activity-icon svg {
                width: 36px;
                height: 36px;
                transition: transform 0.5s ease;
            }

            .activity-card:hover .activity-icon svg {
                transform: scale(1.1);
            }

            @keyframes blob {
                0% {
                    transform: translate(0px, 0px) scale(1);
                }

                33% {
                    transform: translate(30px, -50px) scale(1.1);
                }

                66% {
                    transform: translate(-20px, 20px) scale(0.9);
                }

                100% {
                    transform: translate(0px, 0px) scale(1);
                }
            }

            .animate-blob {
                animation: blob 7s infinite;
            }

            .animation-delay-2000 {
                animation-delay: 2s;
            }

            /* Responsive adjustments */
            @media (max-width: 640px) {
                .activity-inner {
                    padding: 32px 24px;
                }

                .text-5xl {
                    font-size: 2.5rem;
                }
            }
        </style>
    </section>
</div>
