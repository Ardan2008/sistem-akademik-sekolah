<section id="beranda" class="relative overflow-hidden bg-[#FDFDFD]">
    <div class="mx-auto grid min-h-[calc(100vh-64px)] max-w-7xl items-center gap-12 px-6 py-16 lg:grid-cols-2 lg:py-20">

        {{-- Hero Content --}}
        <div class="max-w-xl">

            {{-- Badge --}}
            <div class="mb-5 inline-flex items-center gap-2 rounded-full bg-blue-50 px-3 py-1.5 text-[10px] font-medium uppercase tracking-wider text-blue-600">
                <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                Digitalisasi Pendidikan
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl font-semibold leading-tight tracking-tight text-gray-900 sm:text-5xl">
                Kelola Digital
                <span class="block text-blue-600">
                    Akademik
                </span>
            </h1>

            {{-- Description --}}
            <p class="mt-5 max-w-lg text-sm leading-6 text-gray-600">
                SASKANSA membantu sekolah mengelola data siswa, guru,
                mata pelajaran, hingga informasi akademik dalam satu
                platform yang praktis, aman, dan terorganisir.
            </p>

            {{-- Button --}}
            <div class="mt-8 flex items-center gap-3">

                <a href="{{ route('login') }}"
                class="inline-flex items-center gap-3 rounded-lg bg-blue-600 px-5 py-3 text-xs font-medium text-white transition hover:bg-blue-700">
                    Mulai Sekarang
                    <span class="text-base">→</span>
                </a>

                <a href="{{ route('beranda') }}#fitur"
                class="rounded-lg border border-blue-200 bg-blue-50 px-5 py-3 text-xs font-medium text-blue-600 transition hover:bg-blue-100">
                    Pelajari Fitur
                </a>

            </div>

        </div>


        {{-- Image --}}
        {{-- Hero Image --}}
<div class="relative flex min-h-[520px] items-center justify-center lg:justify-end">

    {{-- Background Decoration --}}
    <div class="absolute right-10 top-1/2 h-80 w-80 -translate-y-1/2 rounded-full bg-blue-100/60 blur-3xl"></div>

    {{-- Dashboard Preview --}}
    <div class="relative h-[500px] w-full max-w-2xl">

        {{-- Dashboard Guru --}}
        <div
            class="absolute left-0 top-16 z-10 w-[78%] -rotate-2
                   overflow-hidden rounded-xl
                   shadow-xl transition duration-300
                   hover:z-40 hover:scale-[1.02]"
        >
            <img
                src="{{ asset('image/dashboard-guru.webp') }}"
                alt="Dashboard Guru"
                class="w-full object-contain"
            >
        </div>

        {{-- Dashboard Admin --}}
        <div
            class="absolute left-1/2 top-8 z-30 w-[78%] -translate-x-1/2
                   overflow-hidden rounded-xl
                   shadow-2xl transition duration-300
                   hover:scale-[1.02]"
        >
            <img
                src="{{ asset('image/dashboard-admin.webp') }}"
                alt="Dashboard Admin"
                class="w-full object-contain"
            >
        </div>

        {{-- Dashboard Siswa --}}
        <div
            class="absolute right-0 top-20 z-20 w-[78%] rotate-2
                   overflow-hidden rounded-xl
                   shadow-xl transition duration-300
                   hover:z-40 hover:scale-[1.02]"
        >
            <img
                src="{{ asset('image/dashboard-siswa.webp') }}"
                alt="Dashboard Siswa"
                class="w-full object-contain"
            >
        </div>

    </div>

</div>

    </div>
</section>
