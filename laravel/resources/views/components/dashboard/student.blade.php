<div
    class="mb-6 relative overflow-hidden rounded-lg border border-green-200 dark:border-green-800 bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-950 dark:to-emerald-950 shadow-sm">
    <!-- Decorative corner -->
    <div class="absolute top-0 right-0 w-32 h-32 bg-green-100 dark:bg-green-900 opacity-20 rounded-full -mr-16 -mt-16">
    </div>

    <div class="relative p-6">
        <!-- Close button -->
        <button wire:click="dismiss"
            class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 transition-colors"
            aria-label="Tutup pengumuman">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Icon -->
        <div class="flex items-start space-x-4">
            <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-green-500 dark:bg-green-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                </div>
            </div>

            <!-- Content -->
            <div class="flex-1 pr-8">
                <!-- Greeting -->
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                    Assalamu'alaikum , Selamat Datang di TPA KMMI Abu Dhabi! 🎉
                </h3>

                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    <span class="font-semibold text-green-700 dark:text-green-400">Alhamdulillah</span>, pendaftaranmu
                    sudah berhasil! Kami sangat senang menyambut kamu sebagai bagian dari keluarga besar TPA kami.
                </p>

                <!-- Important Information -->
                <div class="bg-white dark:bg-gray-900 rounded-lg p-4 mb-4 border border-gray-200 dark:border-gray-700">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Informasi Penting
                    </h4>

                    <div class="space-y-2 text-gray-700 dark:text-gray-300">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-500 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <span class="font-medium">Kelas dimulai:</span>
                                <span class="font-semibold text-gray-900 dark:text-white">11 Januari 2026</span>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-500 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <span class="font-medium">Lokasi:</span>
                                <span class="font-semibold text-gray-900 dark:text-white">KBRI Abu Dhabi</span>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-500 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <span class="font-medium">Waktu:</span>
                                <span class="font-semibold text-gray-900 dark:text-white">Setiap hari Minggu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Next Steps -->
                <div
                    class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-950 dark:to-indigo-950 rounded-lg p-4 mb-4 border border-blue-200 dark:border-blue-800">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Langkah Selanjutnya
                    </h4>

                    <p class="text-gray-700 dark:text-gray-300 mb-3">
                        Bergabunglah dengan grup WhatsApp TPA Abu Dhabi untuk mendapatkan informasi terbaru, jadwal, dan
                        pengumuman penting lainnya:
                    </p>

                    <a href="https://chat.whatsapp.com/Hdwm2FjfxreJAeuZv3GAbg" target="_blank"
                        class="inline-flex items-center px-4 py-3 bg-green-600 hover:bg-green-700 dark:bg-green-700 dark:hover:bg-green-600 text-white font-medium rounded-lg transition-colors shadow-sm">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                        Gabung Grup WA TPA Abu Dhabi
                    </a>
                </div>

                <!-- Reminder -->
                <div
                    class="bg-yellow-50 dark:bg-yellow-950 rounded-lg p-3 border border-yellow-200 dark:border-yellow-800 mb-4">
                    <p class="text-sm text-gray-700 dark:text-gray-300 flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 text-yellow-600 dark:text-yellow-500 flex-shrink-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span>
                            <strong>Jangan lupa bawa:</strong> Iqra atau Al-Qur'an (tanpa tulisan latin) dan buku
                            catatan ya!
                        </span>
                    </p>
                </div>

                <!-- Closing message -->
                <div class="text-center pt-4 border-t border-gray-200 dark:border-gray-700">
                    <p class="text-gray-600 dark:text-gray-400 italic">
                        "Mari kita lalui tahun ajaran ini dengan semangat, doa, dan hati yang ikhlas."
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-500 mt-2">
                        Sampai jumpa di kelas! 📚✨
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
