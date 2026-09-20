<section id="tentang" class="bg-[#FDFDFD]">

    <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-2">

        {{-- Image --}}
        <div class="overflow-hidden rounded-2xl">
            <img
                src="{{ asset('images/about-school.jpg') }}"
                alt="Aktivitas pembelajaran sekolah"
                class="h-full w-full object-cover"
            >
        </div>

        {{-- Content --}}
        <div>

            {{-- Badge --}}
            <div class="mb-5 inline-flex items-center gap-2 rounded-full bg-blue-50 px-3 py-1.5 text-[10px] font-medium uppercase tracking-wider text-blue-600">
                <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                Digitalisasi Pendidikan
            </div>

            {{-- Heading --}}
            <h2 class="max-w-lg text-3xl font-semibold leading-tight tracking-tight text-gray-900 sm:text-4xl">
                Mengenal Platform
                <br>
                Administrasi Sekolah yang
                <span class="text-blue-600">Terintegrasi</span>
            </h2>

            {{-- Description --}}
            <p class="mt-5 max-w-xl text-sm leading-6 text-gray-600">
                SASKANSA dirancang untuk membantu sekolah beradaptasi
                dengan kebutuhan administrasi. Semua informasi akademik
                dikelola dalam satu sistem yang terstruktur, aman, dan
                mudah diakses.
            </p>

            {{-- Statistics --}}
            <div class="mt-8 grid grid-cols-2 gap-6">

                {{-- Data Siswa --}}
                <div class="flex items-center gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372
                                9.337 9.337 0 0 0 4.125-.948
                                M15 19.128v-.378c0-.982-.467-1.857-1.19-2.41
                                M15 19.128a9.38 9.38 0 0 1-3 .372
                                M9 19.128v-.378c0-.982.467-1.857 1.19-2.41
                                M9 19.128a9.38 9.38 0 0 1-3 .372
                                M9 19.128a9.38 9.38 0 0 1-2.625.372
                                M12 15.75a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                            />
                        </svg>
                    </div>

                    <div>
                        <p class="text-xl font-semibold text-gray-900">
                            2000+
                        </p>

                        <p class="text-xs text-gray-500">
                            Data Siswa
                        </p>
                    </div>

                </div>

                {{-- Guru Aktif --}}
                <div class="flex items-center gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 14.25c3.728 0 6.75-1.68 6.75-3.75S15.728 6.75 12 6.75
                                5.25 8.43 5.25 10.5 8.272 14.25 12 14.25Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5.25 10.5V14c0 2.071 3.022 3.75 6.75 3.75
                                3.728 0 6.75-1.679 6.75-3.75v-3.5"
                            />
                        </svg>
                    </div>

                    <div>
                        <p class="text-xl font-semibold text-gray-900">
                            2000+
                        </p>

                        <p class="text-xs text-gray-500">
                            Guru Aktif
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>