<style>
    /* Keyframes */
    @keyframes hero-fade-up {
        from { opacity: 0; transform: translateY(24px); filter: blur(6px); }
        to   { opacity: 1; transform: none;             filter: none; }
    }

    @keyframes hero-line-up {
        from { transform: translateY(110%); }
        to   { transform: translateY(0); }
    }

    @keyframes hero-card-in {
        from {
            opacity: 0;
            transform: translateY(48px) rotate(var(--r, 0deg)) scale(.92);
        }
        to {
            opacity: 1;
            transform: translateY(0) rotate(var(--r, 0deg)) scale(1);
        }
    }

    @keyframes hero-float {
        0%, 100% { transform: translateY(0)     rotate(var(--r, 0deg)); }
        50%      { transform: translateY(-10px) rotate(var(--r, 0deg)); }
    }

    @keyframes hero-blob {
        0%, 100% { transform: translateY(-50%) scale(1); opacity: .9; }
        50%      { transform: translateY(-54%) scale(1.15); opacity: 1; }
    }

    @keyframes hero-pulse {
        0%   { transform: scale(1);   opacity: .6; }
        100% { transform: scale(3.2); opacity: 0; }
    }

    /* Teks */
    #beranda .hero-fade {
        animation: hero-fade-up .9s cubic-bezier(.22, 1, .36, 1) var(--d, 0s) both;
    }

    #beranda .hero-line {
        display: block;
        overflow: hidden;
        padding-bottom: .12em;
        margin-bottom: -.12em;
    }

    #beranda .hero-line-inner {
        display: block;
        animation: hero-line-up 1s cubic-bezier(.22, 1, .36, 1) var(--d, 0s) both;
    }

    /* Kartu Dashboard */
    #beranda .hero-card {
        translate:
            calc(var(--mx, 0) * var(--depth, 10) * 1px)
            calc(var(--my, 0) * var(--depth, 10) * 1px);
        transition: translate .4s cubic-bezier(.22, 1, .36, 1);
        animation:
            hero-card-in 1s cubic-bezier(.22, 1, .36, 1) var(--d, 0s) both,
            hero-float var(--float, 6s) ease-in-out calc(var(--d, 0s) + 1s) infinite;
    }

    /* Di HP gerakan float dikurangi agar kartu tidak keluar dari area */
    @media (max-width: 639px) {
        #beranda .hero-card {
            --float: 7s;
        }

        @keyframes hero-float {
            0%, 100% { transform: translateY(0)    rotate(var(--r, 0deg)); }
            50%      { transform: translateY(-5px) rotate(var(--r, 0deg)); }
        }
    }

    #beranda .hero-blob {
        animation: hero-blob 8s ease-in-out infinite;
    }

    #beranda .hero-dot::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        background: currentColor;
        animation: hero-pulse 1.8s ease-out infinite;
    }

    @media (prefers-reduced-motion: reduce) {
        #beranda .hero-fade,
        #beranda .hero-line-inner,
        #beranda .hero-card,
        #beranda .hero-blob,
        #beranda .hero-dot::after {
            animation: none;
        }

        #beranda .hero-card {
            translate: none;
            transform: rotate(var(--r, 0deg));
            transition: none;
        }
    }
</style>

<section
    id="beranda"
    class="relative overflow-hidden bg-[#FDFDFD]"
>
    <div
        class="mx-auto grid max-w-7xl items-center gap-10
               px-4 pb-14 pt-8
               sm:px-6 sm:pt-12 sm:pb-16
               lg:min-h-[calc(100svh-64px)] lg:grid-cols-2 lg:gap-4
               lg:py-12"
    >

        {{-- Hero Content --}}
        <div class="mx-auto max-w-xl text-center lg:mx-0 lg:text-left">

            {{-- Badge --}}
            <div class="hero-fade" style="--d: .05s">
                <div
                    class="mb-5 inline-flex items-center gap-2 rounded-full
                           bg-blue-50 px-3 py-1.5
                           text-[10px] font-medium uppercase
                           tracking-wider text-blue-600"
                >
                    <span
                        class="hero-dot relative h-1.5 w-1.5
                               rounded-full bg-blue-600 text-blue-600"
                    ></span>

                    Digitalisasi Pendidikan
                </div>
            </div>

            {{-- Heading --}}
            <h1
                class="text-[2.5rem] font-semibold leading-[1.1]
                       tracking-tight text-gray-900
                       sm:text-5xl sm:leading-tight"
            >
                <span class="hero-line">
                    <span class="hero-line-inner" style="--d: .15s">
                        Kelola Digital
                    </span>
                </span>

                <span class="hero-line text-blue-600">
                    <span class="hero-line-inner" style="--d: .28s">
                        Akademik
                    </span>
                </span>
            </h1>

            {{-- Description --}}
            <p
                class="hero-fade mx-auto mt-5 max-w-lg text-[15px] leading-7
                       text-gray-600 sm:text-sm sm:leading-6 lg:mx-0"
                style="--d: .45s"
            >
                SASKANSA membantu sekolah mengelola data siswa, guru,
                mata pelajaran, hingga informasi akademik dalam satu
                platform yang praktis, aman, dan terorganisir.
            </p>

            {{-- Button --}}
            <div
                class="hero-fade mt-8 flex flex-col items-stretch gap-3
                       sm:flex-row sm:items-center sm:justify-center
                       lg:justify-start"
                style="--d: .6s"
            >

                {{-- Mulai Sekarang --}}
                <a
                    href="{{ route('login') }}"
                    class="group relative inline-flex items-center justify-center
                           gap-2.5 overflow-hidden rounded-lg bg-blue-600
                           px-5 py-3.5 text-sm font-medium text-white
                           transition duration-300
                           hover:-translate-y-0.5 hover:bg-blue-700
                           hover:shadow-lg hover:shadow-blue-600/25
                           focus-visible:outline focus-visible:outline-2
                           focus-visible:outline-offset-2
                           focus-visible:outline-blue-500
                           active:translate-y-0 active:scale-[0.98]
                           sm:py-3 sm:text-xs"
                >
                    {{-- Shine --}}
                    <span
                        aria-hidden="true"
                        class="pointer-events-none absolute inset-0
                               -translate-x-full bg-linear-to-r
                               from-transparent via-white/25 to-transparent
                               transition-transform duration-700 ease-out
                               group-hover:translate-x-full"
                    ></span>

                    <span class="relative">
                        Mulai Sekarang
                    </span>

                    <x-lucide-arrow-right
                        class="relative h-4 w-4 transition-transform
                               duration-200
                               group-hover:translate-x-1"
                    />
                </a>

                {{-- Pelajari Fitur --}}
                <a
                    href="{{ route('beranda') }}#fitur"
                    class="group inline-flex items-center justify-center gap-2
                           rounded-lg border border-blue-200
                           bg-blue-50 px-5 py-3.5
                           text-sm font-medium text-blue-600
                           transition duration-300
                           hover:-translate-y-0.5 hover:bg-blue-100
                           focus-visible:outline focus-visible:outline-2
                           focus-visible:outline-offset-2
                           focus-visible:outline-blue-500
                           active:translate-y-0 active:scale-[0.98]
                           sm:py-3 sm:text-xs"
                >
                    <span>
                        Pelajari Fitur
                    </span>
                </a>

            </div>

        </div>

        {{-- Dashboard Preview --}}
        <div class="relative flex items-center justify-center lg:justify-end">

            <div
                id="hero-composition"
                class="relative aspect-[155/140] w-full max-w-md
                       sm:max-w-xl lg:max-w-155"
            >
                {{-- Dashboard Guru --}}
                <div
                    class="absolute right-[4%] top-[1.5%] z-10
                           w-[64%] hover:z-40"
                >
                    <div
                        class="hero-card"
                        style="--r: -2deg; --d: .55s; --depth: 10; --float: 6.5s"
                    >
                        <div
                            class="overflow-hidden rounded-lg shadow-lg
                                   transition duration-300
                                   hover:scale-[1.02] sm:rounded-xl sm:shadow-xl"
                        >
                            <img
                                src="{{ asset('image/dashboard-guru.webp') }}"
                                alt="Dashboard Guru"
                                width="620"
                                loading="eager"
                                decoding="async"
                                class="block h-auto w-full object-contain"
                            >
                        </div>
                    </div>
                </div>

                {{-- Dashboard Siswa --}}
                <div
                    class="absolute right-0 top-[39%] z-20
                           w-[64%] hover:z-40"
                >
                    <div
                        class="hero-card"
                        style="--r: 2deg; --d: .75s; --depth: 16; --float: 7s"
                    >
                        <div
                            class="overflow-hidden rounded-lg shadow-lg
                                   transition duration-300
                                   hover:scale-[1.02] sm:rounded-xl sm:shadow-xl"
                        >
                            <img
                                src="{{ asset('image/dashboard-siswa.webp') }}"
                                alt="Dashboard Siswa"
                                width="620"
                                loading="eager"
                                decoding="async"
                                class="block h-auto w-full object-contain"
                            >
                        </div>
                    </div>
                </div>

                {{-- Dashboard Admin --}}
                <div
                    class="absolute left-1/2 top-[11.5%] z-30
                           w-[72%]
                           -translate-x-1/2"
                >
                    <div
                        class="hero-card"
                        style="--r: 0deg; --d: .35s; --depth: 24; --float: 5.5s"
                    >
                        <div
                            class="overflow-hidden rounded-lg shadow-xl
                                   transition duration-300
                                   hover:scale-[1.02] sm:rounded-xl sm:shadow-2xl"
                        >
                            <img
                                src="{{ asset('image/dashboard-admin.webp') }}"
                                alt="Dashboard Admin"
                                width="720"
                                loading="eager"
                                decoding="async"
                                class="block h-auto w-full object-contain"
                            >
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- Parallax kursor pada dashboard --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const section = document.getElementById('beranda');
            const stage = document.getElementById('hero-composition');
            if (!section || !stage) return;

            const canHover = window.matchMedia('(hover: hover) and (min-width: 1024px)').matches;
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (!canHover || reduceMotion) return;

            let frame = null;

            const setPosition = (x, y) => {
                stage.style.setProperty('--mx', x.toFixed(3));
                stage.style.setProperty('--my', y.toFixed(3));
            };

            section.addEventListener('mousemove', (e) => {
                if (frame) return;

                frame = requestAnimationFrame(() => {
                    const rect = section.getBoundingClientRect();
                    // nilai -1 sampai 1 dari tengah section
                    const x = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
                    const y = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
                    setPosition(x, y);
                    frame = null;
                });
            });

            section.addEventListener('mouseleave', () => setPosition(0, 0));
        });
    </script>

</section>