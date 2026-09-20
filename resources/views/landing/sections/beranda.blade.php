<section
    id="beranda"
    class="relative overflow-hidden bg-[#FDFDFD]"
>
    <div
        class="mx-auto grid min-h-[calc(100vh-64px)] max-w-7xl
               items-center gap-8 px-6 py-10
               lg:grid-cols-2 lg:gap-4 lg:py-12"
    >

        {{-- Hero Content --}}
        <div class="max-w-xl">

            {{-- Badge --}}
            <div
                class="mb-5 inline-flex items-center gap-2 rounded-full
                       bg-blue-50 px-3 py-1.5
                       text-[10px] font-medium uppercase
                       tracking-wider text-blue-600"
            >
                <span
                    class="h-1.5 w-1.5 rounded-full bg-blue-600"
                ></span>

                Digitalisasi Pendidikan
            </div>


            {{-- Heading --}}
            <h1
                class="text-4xl font-semibold leading-tight
                       tracking-tight text-gray-900 sm:text-5xl"
            >
                Kelola Digital

                <span class="block text-blue-600">
                    Akademik
                </span>
            </h1>


            {{-- Description --}}
            <p
                class="mt-5 max-w-lg text-sm leading-6 text-gray-600"
            >
                SASKANSA membantu sekolah mengelola data siswa, guru,
                mata pelajaran, hingga informasi akademik dalam satu
                platform yang praktis, aman, dan terorganisir.
            </p>


            {{-- Button --}}
            <div class="mt-8 flex items-center gap-3">

                {{-- Mulai Sekarang --}}
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


                {{-- Pelajari Fitur --}}
                <a
                    href="{{ route('beranda') }}#fitur"
                    class="inline-flex items-center gap-2
                           rounded-lg border border-blue-200
                           bg-blue-50 px-5 py-3
                           text-xs font-medium text-blue-600
                           transition hover:bg-blue-100"
                >
                    <span>
                        Pelajari Fitur
                    </span>
                </a>

            </div>

        </div>


        {{-- Dashboard Preview --}}
        <div
            class="relative flex min-h-140
                   items-center justify-center
                   lg:justify-end"
        >

            {{-- Background Decoration --}}
            <div
                class="absolute right-4 top-1/2
                       h-80 w-80
                       -translate-y-1/2
                       rounded-full
                       bg-blue-100/60
                       blur-3xl"
            ></div>


            {{-- Dashboard Composition --}}
            <div
                class="relative h-140
                       w-full max-w-155"
            >

                {{-- ======================================== --}}
                {{-- Dashboard Guru --}}
                {{-- ======================================== --}}
                <div
                    class="absolute right-6 top-2 z-10
                           w-[64%]
                           overflow-hidden rounded-xl
                           shadow-xl
                           -rotate-2
                           transition duration-300
                           hover:z-40 hover:scale-[1.02]"
                >
                    <img
                        src="{{ asset('image/dashboard-guru.webp') }}"
                        alt="Dashboard Guru"
                        class="block h-auto w-full object-contain"
                    >
                </div>


                {{-- ======================================== --}}
                {{-- Dashboard Siswa --}}
                {{-- ======================================== --}}
                <div
                    class="absolute right-0 top-55 z-20
                           w-[64%]
                           overflow-hidden rounded-xl
                           shadow-xl
                           rotate-2
                           transition duration-300
                           hover:z-40 hover:scale-[1.02]"
                >
                    <img
                        src="{{ asset('image/dashboard-siswa.webp') }}"
                        alt="Dashboard Siswa"
                        class="block h-auto w-full object-contain"
                    >
                </div>


                {{-- ======================================== --}}
                {{-- Dashboard Admin --}}
                {{-- ======================================== --}}
                <div
                    class="absolute left-1/2 top-16 z-30
                           w-[72%]
                           -translate-x-1/2
                           overflow-hidden rounded-xl
                           shadow-2xl
                           transition duration-300
                           hover:scale-[1.02]"
                >
                    <img
                        src="{{ asset('image/dashboard-admin.webp') }}"
                        alt="Dashboard Admin"
                        class="block h-auto w-full object-contain"
                    >
                </div>

            </div>

        </div>

    </div>
</section>