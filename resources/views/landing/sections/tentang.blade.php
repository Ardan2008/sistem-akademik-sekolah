<style>
    /* Scroll Reveal */
    #tentang.reveal-ready [data-reveal] {
        opacity: 0;
        transform: translateY(28px);
        filter: blur(6px);
        transition:
            opacity .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            transform .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            filter .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s);
        will-change: opacity, transform;
    }

    #tentang.reveal-ready [data-reveal].is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }

    /* Di layar kecil kolom bertumpuk: hilangkan jeda bertahap agar terasa responsif */
    @media (max-width: 639px) {
        #tentang [data-reveal] {
            --d: 0s !important;
        }
    }

    /* Image Reveal (tirai terbuka dari kiri) */
    #tentang.reveal-ready [data-reveal="image"] {
        opacity: 1;
        transform: none;
        filter: none;
        transition: none;
    }

    #tentang.reveal-ready [data-reveal="image"] .tentang-image-inner {
        clip-path: inset(0 100% 0 0 round 1rem);
        transition: clip-path 1.2s cubic-bezier(.77, 0, .175, 1) var(--d, 0s);
    }

    #tentang.reveal-ready [data-reveal="image"].is-visible .tentang-image-inner {
        clip-path: inset(0 0 0 0 round 1rem);
    }

    #tentang.reveal-ready [data-reveal="image"] img {
        transform: scale(1.25);
        transition: transform 1.6s cubic-bezier(.22, 1, .36, 1) var(--d, 0s);
    }

    #tentang.reveal-ready [data-reveal="image"].is-visible img {
        transform: scale(1);
    }

    /* Hover zoom setelah reveal selesai (hanya perangkat dengan hover) */
    @media (hover: hover) {
        #tentang .tentang-image:hover img {
            transform: scale(1.06) !important;
            transition: transform .9s cubic-bezier(.22, 1, .36, 1) !important;
        }
    }

    /* Garis bawah "Terintegrasi" */
    #tentang .tentang-mark {
        position: relative;
        display: inline-block;
    }

    #tentang .tentang-bar {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 2px;
        height: 6px;
        border-radius: 9999px;
        background: rgba(59, 130, 246, .18);
        overflow: hidden;
        z-index: -1;
        pointer-events: none;
    }

    #tentang .tentang-bar-glint {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 35%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(37, 99, 235, .55),
            transparent
        );
        transform: translateX(-100%);
    }

    /* tergambar saat section terlihat */
    #tentang.reveal-ready .tentang-bar {
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .8s cubic-bezier(.22, 1, .36, 1) .7s;
    }

    #tentang.reveal-ready .is-visible .tentang-bar {
        transform: scaleX(1);
    }

    @keyframes tentang-glint {
        0%        { transform: translateX(-100%); }
        60%, 100% { transform: translateX(300%); }
    }

    #tentang.reveal-ready .is-visible .tentang-bar-glint {
        animation: tentang-glint 3s ease-in-out 1.8s infinite;
    }

    /* Badge Dot Pulse */
    @keyframes tentang-pulse {
        0%   { transform: scale(1);   opacity: .6; }
        100% { transform: scale(3.2); opacity: 0; }
    }

    #tentang .tentang-dot::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        background: currentColor;
        animation: tentang-pulse 1.8s ease-out infinite;
    }

    /* Icon Pop */
    @keyframes tentang-icon-pop {
        0%   { transform: scale(1)   rotate(0); }
        40%  { transform: scale(1.3) rotate(-10deg); }
        70%  { transform: scale(.92) rotate(6deg); }
        100% { transform: scale(1)   rotate(0); }
    }

    #tentang .tentang-stat:hover .tentang-icon svg {
        animation: tentang-icon-pop .6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        #tentang.reveal-ready [data-reveal],
        #tentang.reveal-ready [data-reveal="image"] .tentang-image-inner,
        #tentang.reveal-ready [data-reveal="image"] img,
        #tentang.reveal-ready .tentang-bar {
            opacity: 1;
            transform: none;
            filter: none;
            clip-path: none;
            transition: none;
        }

        #tentang .tentang-dot::after,
        #tentang .tentang-stat:hover .tentang-icon svg,
        #tentang .tentang-bar-glint {
            animation: none;
        }

        #tentang .tentang-bar-glint {
            opacity: 0;
        }
    }
</style>

<section id="tentang" class="scroll-mt-16 bg-[#FDFDFD]">

    <div
        class="mx-auto grid max-w-7xl items-center gap-10
               px-4 py-16
               sm:gap-12 sm:px-6 sm:py-20
               lg:grid-cols-2 lg:gap-16 lg:py-24"
    >

        {{-- Image --}}
        <div
            data-reveal="image"
            style="--d: 0s"
            class="tentang-image"
        >
            <div
                class="tentang-image-inner aspect-[4/3] overflow-hidden
                       rounded-2xl sm:aspect-[16/10] lg:aspect-auto"
            >
                <img
                    src="{{ asset('image/about/about-image.webp') }}"
                    alt="Aktivitas pembelajaran sekolah"
                    loading="lazy"
                    decoding="async"
                    class="h-full w-full object-cover"
                >
            </div>
        </div>

        {{-- Content --}}
        <div>

            {{-- Badge --}}
            <div data-reveal style="--d: .15s">
                <div
                    class="mb-4 inline-flex items-center gap-2
                           rounded-full bg-blue-50 px-3 py-1.5
                           text-[10px] font-medium uppercase
                           tracking-wider text-blue-600 sm:mb-5"
                >
                    <span
                        class="tentang-dot relative h-1.5 w-1.5
                               rounded-full bg-blue-600 text-blue-600"
                    ></span>

                    Digitalisasi Pendidikan
                </div>
            </div>

            {{-- Heading --}}
            <h2
                data-reveal
                style="--d: .25s"
                class="isolate max-w-lg text-[1.75rem] font-semibold
                       leading-snug tracking-tight text-gray-900
                       sm:text-4xl sm:leading-tight"
            >
                Mengenal Platform
                <br class="hidden sm:block">
                Administrasi Sekolah yang
                <span class="tentang-mark text-blue-600">
                    Terintegrasi

                    <span class="tentang-bar" aria-hidden="true">
                        <span class="tentang-bar-glint"></span>
                    </span>
                </span>
            </h2>

            {{-- Description --}}
            <p
                data-reveal
                style="--d: .35s"
                class="mt-4 max-w-xl text-[15px] leading-7 text-gray-600
                       sm:mt-5 sm:text-sm sm:leading-6"
            >
                SASKANSA dirancang untuk membantu sekolah beradaptasi
                dengan kebutuhan administrasi. Semua informasi akademik
                dikelola dalam satu sistem yang terstruktur, aman, dan
                mudah diakses.
            </p>

            {{-- Statistics --}}
            <div class="mt-7 grid grid-cols-2 gap-4 sm:mt-8 sm:gap-6">

                {{-- Data Siswa --}}
                <div data-reveal style="--d: .45s">
                    <div
                        class="tentang-stat group flex items-center gap-3
                               rounded-2xl border border-gray-100 bg-white p-3
                               sm:border-0 sm:bg-transparent sm:p-0"
                    >

                        <div
                            class="tentang-icon flex h-11 w-11 shrink-0
                                   items-center justify-center
                                   rounded-xl bg-blue-50
                                   text-blue-600
                                   transition-all duration-500
                                   ease-[cubic-bezier(.34,1.56,.64,1)]
                                   group-hover:-rotate-6
                                   group-hover:scale-110
                                   group-hover:bg-blue-600
                                   group-hover:text-white
                                   group-hover:shadow-lg
                                   group-hover:shadow-blue-600/30"
                        >
                            <x-lucide-users-round class="h-5 w-5" />
                        </div>

                        <div class="min-w-0">
                            <p class="text-xl font-semibold text-gray-900">
                                <span data-count="2000">2000</span>+
                            </p>

                            <p class="text-xs text-gray-500">
                                Data Siswa
                            </p>
                        </div>

                    </div>
                </div>

                {{-- Guru Aktif --}}
                <div data-reveal style="--d: .55s">
                    <div
                        class="tentang-stat group flex items-center gap-3
                               rounded-2xl border border-gray-100 bg-white p-3
                               sm:border-0 sm:bg-transparent sm:p-0"
                    >

                        <div
                            class="tentang-icon flex h-11 w-11 shrink-0
                                   items-center justify-center
                                   rounded-xl bg-blue-50
                                   text-blue-600
                                   transition-all duration-500
                                   ease-[cubic-bezier(.34,1.56,.64,1)]
                                   group-hover:-rotate-6
                                   group-hover:scale-110
                                   group-hover:bg-blue-600
                                   group-hover:text-white
                                   group-hover:shadow-lg
                                   group-hover:shadow-blue-600/30"
                        >
                            <x-lucide-graduation-cap class="h-5 w-5" />
                        </div>

                        <div class="min-w-0">
                            <p class="text-xl font-semibold text-gray-900">
                                <span data-count="2000">2000</span>+
                            </p>

                            <p class="text-xs text-gray-500">
                                Guru Aktif
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- Reveal + Count Up --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const section = document.getElementById('tentang');
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            /* Count Up */
            const countUp = (el) => {
                const target = parseInt(el.dataset.count, 10);
                const duration = 1800;
                const start = performance.now();

                const easeOutExpo = (t) => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t));

                const tick = (now) => {
                    const progress = Math.min((now - start) / duration, 1);
                    el.textContent = Math.round(target * easeOutExpo(progress));
                    if (progress < 1) requestAnimationFrame(tick);
                };

                el.textContent = '0';
                requestAnimationFrame(tick);
            };

            /* Scroll Reveal */
            if ('IntersectionObserver' in window) {
                section.classList.add('reveal-ready');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (!entry.isIntersecting) return;

                        entry.target.classList.add('is-visible');

                        if (!reduceMotion) {
                            entry.target.querySelectorAll('[data-count]').forEach((el) => {
                                // tunggu sedikit agar angka mulai berjalan setelah kartu tampil
                                setTimeout(() => countUp(el), 300);
                            });
                        }

                        observer.unobserve(entry.target);
                    });
                }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

                section
                    .querySelectorAll('[data-reveal]')
                    .forEach((el) => observer.observe(el));
            }
        });
    </script>

</section>