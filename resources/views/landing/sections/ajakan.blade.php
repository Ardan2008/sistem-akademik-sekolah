<section id="ajakan" class="bg-[#FDFDFD]">
    <div class="mx-auto max-w-7xl px-6 py-10">

        <div class="flex flex-col items-center gap-6 rounded-2xl bg-blue-50/60 px-8 py-8 md:flex-row">

            {{-- Icon --}}
            <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-9 w-9"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.5">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 3 4 7.5v5.25c0 4.8 3.4 7.95 8 9.25
                            4.6-1.3 8-4.45 8-9.25V7.5L12 3Z" />

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.5 12.25 11 14.75l4.5-5" />

                </svg>
            </div>


            {{-- Text --}}
            <div class="flex-1 text-center md:text-left">

                <h2 class="text-base font-semibold text-gray-900">
                    Siap Mengelola Akademik Sekolah Lebih Baik?
                </h2>

                <p class="mt-2 max-w-2xl text-xs leading-5 text-gray-600">
                    Masuk ke Portal Internal untuk Mengakses Nilai, Jadwal,
                    dan Materi Belajar. Fitur Lengkap untuk Siswa & Guru
                    Sekolah Kita.
                </p>

            </div>


            {{-- Button --}}
            <div class="shrink-0">

                <a href="{{ route('login') }}"
                class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-5 py-3 text-xs font-medium text-white transition hover:bg-blue-700">

                    Mulai Sekarang

                    <span class="text-sm">
                        →
                    </span>

                </a>

            </div>

        </div>

    </div>
</section>
