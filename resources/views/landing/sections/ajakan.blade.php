<section id="ajakan" class="bg-[#FDFDFD]">

    <div class="mx-auto max-w-7xl px-6 py-10">

        <div
            class="flex flex-col items-center gap-6
                   rounded-2xl bg-blue-50/60 px-8 py-8
                   md:flex-row"
        >

            {{-- Icon --}}
            <div
                class="flex h-16 w-16 shrink-0
                       items-center justify-center
                       rounded-xl bg-blue-100
                       text-blue-600"
            >
                <x-lucide-shield-check class="h-9 w-9" />
            </div>


            {{-- Text --}}
            <div class="flex-1 text-center md:text-left">

                <h2
                    class="text-base font-semibold
                           text-gray-900"
                >
                    Siap Mengelola Akademik Sekolah Lebih Baik?
                </h2>

                <p
                    class="mt-2 max-w-2xl text-xs
                           leading-5 text-gray-600"
                >
                    Masuk ke Portal Internal untuk Mengakses Nilai, Jadwal,
                    dan Materi Belajar. Fitur Lengkap untuk Siswa & Guru
                    Sekolah Kita.
                </p>

            </div>


            {{-- Button --}}
            <div class="shrink-0">

                <a
                    href="{{ route('login') }}"
                    class="group inline-flex items-center gap-2.5
                           rounded-lg bg-blue-600 px-5 py-3
                           text-xs font-medium text-white
                           transition hover:bg-blue-700"
                >
                    <span>
                        Mulai Sekarang
                    </span>

                    <x-lucide-arrow-right
                        class="h-4 w-4 transition-transform
                               duration-200
                               group-hover:translate-x-1"
                    />
                </a>

            </div>

        </div>

    </div>

</section>