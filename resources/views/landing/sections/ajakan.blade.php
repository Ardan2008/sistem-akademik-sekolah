<style>
    /* Scroll Reveal (kartu) */
    #ajakan.reveal-ready [data-reveal] {
        opacity: 0;
        transform: translateY(32px) scale(.97);
        filter: blur(6px);
        transition:
            opacity .9s cubic-bezier(.22, 1, .36, 1),
            transform .9s cubic-bezier(.22, 1, .36, 1),
            filter .9s cubic-bezier(.22, 1, .36, 1);
        will-change: opacity, transform;
    }

    #ajakan.reveal-ready [data-reveal].is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }

    /* Isi kartu muncul berurutan */
    #ajakan.reveal-ready .ajakan-item {
        opacity: 0;
        transform: translateY(16px);
        transition:
            opacity .7s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            transform .7s cubic-bezier(.22, 1, .36, 1) var(--d, 0s);
    }

    #ajakan.reveal-ready .is-visible .ajakan-item {
        opacity: 1;
        transform: none;
    }

    /* Blob latar bergerak pelan */
    @keyframes ajakan-drift-a {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50%      { transform: translate(40px, 18px) scale(1.2); }
    }

    @keyframes ajakan-drift-b {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50%      { transform: translate(-36px, -14px) scale(1.15); }
    }

    #ajakan .ajakan-blob-a { animation: ajakan-drift-a 9s ease-in-out infinite; }
    #ajakan .ajakan-blob-b { animation: ajakan-drift-b 11s ease-in-out infinite; }

    /* Spotlight mengikuti kursor */
    #ajakan .ajakan-spotlight {
        background: radial-gradient(
            320px circle at var(--mx, 50%) var(--my, 50%),
            rgba(37, 99, 235, .10),
            transparent 70%
        );
    }

    /* Ikon: melayang + riak */
    @keyframes ajakan-float {
        0%, 100% { transform: translateY(0); }
        50%      { transform: translateY(-5px); }
    }

    @keyframes ajakan-ripple {
        0%   { transform: scale(1);   opacity: .45; }
        100% { transform: scale(1.9); opacity: 0; }
    }

    @keyframes ajakan-icon-pop {
        0%   { transform: scale(1)   rotate(0); }
        40%  { transform: scale(1.25) rotate(-10deg); }
        70%  { transform: scale(.94) rotate(6deg); }
        100% { transform: scale(1)   rotate(0); }
    }

    #ajakan .ajakan-icon-box {
        animation: ajakan-float 4s ease-in-out infinite;
    }

    #ajakan .ajakan-ripple {
        animation: ajakan-ripple 2.6s ease-out infinite;
    }

    #ajakan .ajakan-ripple:nth-child(2) {
        animation-delay: 1.3s;
    }

    /* Tombol: kilau berkala */
    @keyframes ajakan-shine {
        0%, 70% { transform: translateX(-120%); }
        100%    { transform: translateX(120%); }
    }

    #ajakan .ajakan-shine {
        animation: ajakan-shine 4.5s ease-in-out infinite;
    }

    /* Efek hover hanya untuk perangkat yang punya hover */
    @media (hover: hover) {
        #ajakan .ajakan-card:hover .ajakan-icon svg {
            animation: ajakan-icon-pop .6s ease-in-out;
        }

        #ajakan .ajakan-btn:hover .ajakan-shine {
            animation: none;
            transform: translateX(120%);
            transition: transform .7s ease-out;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #ajakan.reveal-ready [data-reveal],
        #ajakan.reveal-ready .ajakan-item {
            opacity: 1;
            transform: none;
            filter: none;
            transition: none;
        }

        #ajakan .ajakan-blob-a,
        #ajakan .ajakan-blob-b,
        #ajakan .ajakan-icon-box,
        #ajakan .ajakan-ripple,
        #ajakan .ajakan-shine,
        #ajakan .ajakan-card:hover .ajakan-icon svg {
            animation: none;
        }
    }
</style>

<section id="ajakan" class="bg-[#FDFDFD]">

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10">

        <div data-reveal>
            {{-- HP/tablet kecil: bertumpuk & rata tengah. md ke atas: satu baris. --}}
            <div
                class="ajakan-card group relative flex flex-col
                       items-center gap-5 overflow-hidden rounded-2xl
                       bg-blue-50/60 px-5 py-7
                       sm:gap-6 sm:px-8 sm:py-8
                       md:flex-row md:gap-8
                       lg:px-10"
            >

                {{-- Background Decoration --}}
                <span
                    aria-hidden="true"
                    class="ajakan-blob-a pointer-events-none absolute
                           -left-10 -top-16 h-48 w-48 rounded-full
                           bg-blue-200/50 blur-3xl"
                ></span>

                <span
                    aria-hidden="true"
                    class="ajakan-blob-b pointer-events-none absolute
                           -bottom-20 right-10 h-56 w-56 rounded-full
                           bg-sky-200/40 blur-3xl"
                ></span>

                {{-- Spotlight --}}
                <span
                    aria-hidden="true"
                    class="ajakan-spotlight pointer-events-none absolute
                           inset-0 opacity-0 transition-opacity
                           duration-300 group-hover:opacity-100"
                ></span>

                {{-- Icon --}}
                <div
                    class="ajakan-item relative shrink-0"
                    style="--d: .15s"
                >
                    <div class="ajakan-icon-box relative h-14 w-14 sm:h-16 sm:w-16">

                        {{-- Ripple --}}
                        <span
                            aria-hidden="true"
                            class="ajakan-ripple absolute inset-0
                                   rounded-xl bg-blue-200"
                        ></span>
                        <span
                            aria-hidden="true"
                            class="ajakan-ripple absolute inset-0
                                   rounded-xl bg-blue-200"
                        ></span>

                        <div
                            class="ajakan-icon relative flex h-14 w-14
                                   items-center justify-center
                                   rounded-xl bg-blue-100 text-blue-600
                                   sm:h-16 sm:w-16"
                        >
                            <x-lucide-shield-check class="h-8 w-8 sm:h-9 sm:w-9" />
                        </div>

                    </div>
                </div>

                {{-- Text --}}
                <div class="relative min-w-0 flex-1 text-center md:text-left">

                    <h2
                        class="ajakan-item text-lg font-semibold
                               leading-snug text-gray-900 sm:text-base"
                        style="--d: .25s"
                    >
                        Siap Mengelola Akademik Sekolah Lebih Baik?
                    </h2>

                    <p
                        class="ajakan-item mx-auto mt-2 max-w-2xl text-[13px]
                               leading-relaxed text-gray-600
                               sm:text-xs sm:leading-5 md:mx-0"
                        style="--d: .35s"
                    >
                        Masuk ke Portal Internal untuk Mengakses Nilai, Jadwal,
                        dan Materi Belajar. Fitur Lengkap untuk Siswa & Guru
                        Sekolah Kita.
                    </p>

                </div>

                {{-- Button --}}
                <div
                    class="ajakan-item relative w-full shrink-0 sm:w-auto"
                    style="--d: .45s"
                >

                    <a
                        href="{{ route('login') }}"
                        class="ajakan-btn group/btn relative inline-flex
                               w-full items-center justify-center gap-2.5
                               overflow-hidden rounded-lg bg-blue-600
                               px-5 py-3.5 text-sm font-medium text-white
                               transition duration-300
                               hover:-translate-y-0.5 hover:bg-blue-700
                               hover:shadow-lg hover:shadow-blue-600/25
                               focus-visible:outline focus-visible:outline-2
                               focus-visible:outline-offset-2
                               focus-visible:outline-blue-500
                               active:translate-y-0 active:scale-[0.98]
                               sm:w-auto sm:py-3 sm:text-xs"
                    >
                        {{-- Shine --}}
                        <span
                            aria-hidden="true"
                            class="ajakan-shine pointer-events-none absolute
                                   inset-0 bg-linear-to-r
                                   from-transparent via-white/25
                                   to-transparent"
                        ></span>

                        <span class="relative">
                            Mulai Sekarang
                        </span>

                        <x-lucide-arrow-right
                            class="relative h-4 w-4 transition-transform
                                   duration-200
                                   group-hover/btn:translate-x-1"
                        />
                    </a>

                </div>

            </div>
        </div>

    </div>

    {{-- Script: Reveal + Spotlight --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const section = document.getElementById('ajakan');

            /* Scroll Reveal */
            if ('IntersectionObserver' in window) {
                section.classList.add('reveal-ready');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.2, rootMargin: '0px 0px -40px 0px' });

                section
                    .querySelectorAll('[data-reveal]')
                    .forEach((el) => observer.observe(el));
            }

            /* Spotlight mengikuti kursor */
            const canHover = window.matchMedia('(hover: hover)').matches;
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (!canHover || reduceMotion) return;

            const card = section.querySelector('.ajakan-card');

            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                card.style.setProperty('--mx', `${e.clientX - rect.left}px`);
                card.style.setProperty('--my', `${e.clientY - rect.top}px`);
            });
        });
    </script>

</section>