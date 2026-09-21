@php
    $steps = [
        [
            'icon' => 'log-in',
            'title' => 'Login Akun',
            'text' => 'Masukkan username dan password yang telah ditentukan oleh Admin atau Pusat untuk mengakses akun SASKANSA.',
        ],
        [
            'icon' => 'key-round',
            'title' => 'Atur Password',
            'text' => 'Setelah berhasil login, pengguna diarahkan ke halaman Atur Password untuk mengganti password sesuai dengan keinginan.',
        ],
        [
            'icon' => 'layout-dashboard',
            'title' => 'Akses Dashboard',
            'text' => 'Setelah password berhasil diperbarui, pengguna akan diarahkan ke dashboard sesuai hak akses dan kebutuhan masing-masing.',
        ],
    ];
@endphp

<style>
    /* Scroll Reveal */
    #cara-kerja.reveal-ready [data-reveal] {
        opacity: 0;
        transform: translateY(28px);
        filter: blur(6px);
        transition:
            opacity .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            transform .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            filter .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s);
        will-change: opacity, transform;
    }

    #cara-kerja.reveal-ready [data-reveal].is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }

    /* Jeda kartu: tanpa jeda saat bertumpuk (HP), bertahap saat 3 kolom */
    #cara-kerja .cara-item {
        --d: 0s;
    }

    @media (min-width: 768px) {
        #cara-kerja .cara-item { --d: var(--d3, 0s); }
    }

    /* Connector Chip (muncul setelah kartu) */
    #cara-kerja.reveal-ready .cara-chip {
        opacity: 0;
        scale: .3;
        transition:
            opacity .5s ease calc(var(--d, 0s) + .45s),
            scale .6s cubic-bezier(.34, 1.56, .64, 1) calc(var(--d, 0s) + .45s);
    }

    #cara-kerja.reveal-ready .is-visible .cara-chip {
        opacity: 1;
        scale: 1;
    }

    /* Panah bergerak searah chip: horizontal di desktop, vertikal di HP
       (chip diputar 90deg di HP sehingga arah gerak ikut berputar) */
    @keyframes cara-nudge {
        0%, 100% { transform: translateX(0); }
        50%      { transform: translateX(3px); }
    }

    #cara-kerja .cara-chip svg {
        animation: cara-nudge 1.6s ease-in-out infinite;
    }

    /* Badge Dot Pulse */
    @keyframes cara-pulse {
        0%   { transform: scale(1);   opacity: .6; }
        100% { transform: scale(3.2); opacity: 0; }
    }

    #cara-kerja .cara-dot::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        background: currentColor;
        animation: cara-pulse 1.8s ease-out infinite;
    }

    /* Card Spotlight */
    #cara-kerja .cara-spotlight {
        background: radial-gradient(
            220px circle at var(--mx, 50%) var(--my, 50%),
            rgba(37, 99, 235, .09),
            transparent 70%
        );
    }

    /* Icon Pop */
    @keyframes cara-icon-pop {
        0%   { transform: scale(1)   rotate(0); }
        40%  { transform: scale(1.3) rotate(-10deg); }
        70%  { transform: scale(.92) rotate(6deg); }
        100% { transform: scale(1)   rotate(0); }
    }

    /* Efek hover hanya untuk perangkat yang punya hover */
    @media (hover: hover) {
        #cara-kerja .cara-card:hover .cara-icon {
            animation: cara-icon-pop .6s ease-in-out;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #cara-kerja.reveal-ready [data-reveal],
        #cara-kerja.reveal-ready .cara-chip {
            opacity: 1;
            transform: none;
            scale: 1;
            filter: none;
            transition: none;
        }

        #cara-kerja .cara-dot::after,
        #cara-kerja .cara-chip svg,
        #cara-kerja .cara-card:hover .cara-icon {
            animation: none;
        }
    }
</style>

<section id="cara-kerja" class="scroll-mt-16 bg-[#FDFDFD]">

    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-16 lg:py-20">

        {{-- Heading --}}
        <div class="mx-auto max-w-2xl text-center">

            {{-- Badge --}}
            <div data-reveal style="--d: 0s">
                <div
                    class="mb-4 inline-flex items-center gap-2
                           rounded-full bg-blue-50 px-3 py-1.5
                           text-[10px] font-medium uppercase
                           tracking-wider text-blue-600 sm:mb-5"
                >
                    <span
                        class="cara-dot relative h-1.5 w-1.5
                               rounded-full bg-blue-600 text-blue-600"
                    ></span>

                    Digitalisasi Pendidikan
                </div>
            </div>

            {{-- Heading --}}
            <h2
                data-reveal
                style="--d: .1s"
                class="text-[1.75rem] font-semibold tracking-tight
                       text-gray-900 sm:text-4xl"
            >
                Cara Kerja
            </h2>

            <p
                data-reveal
                style="--d: .2s"
                class="mt-3 text-[15px] font-medium text-gray-500 sm:text-sm"
            >
                Mulai Menggunakan SASKANSA dalam 3 Langkah Mudah
            </p>

        </div>

        {{-- Steps
             HP/tablet kecil: bertumpuk vertikal dengan panah ke bawah
             md ke atas: 3 kolom dengan panah ke kanan --}}
        <div
            class="mx-auto mt-8 grid max-w-lg grid-cols-1 gap-7
                   sm:mt-10
                   md:max-w-none md:grid-cols-3 md:gap-5
                   lg:gap-8"
        >

            @foreach ($steps as $step)
                <div
                    data-reveal
                    style="--d3: {{ .3 + $loop->index * .15 }}s"
                    class="cara-item relative h-full"
                >

                    <div
                        class="cara-card group relative h-full
                               overflow-hidden rounded-2xl border
                               border-gray-100 bg-white p-5 shadow-sm
                               transition-[transform,box-shadow]
                               duration-300 ease-out
                               hover:-translate-y-1.5 hover:shadow-xl
                               hover:shadow-gray-200/70
                               sm:p-6"
                    >

                        {{-- Spotlight --}}
                        <span
                            aria-hidden="true"
                            class="cara-spotlight pointer-events-none
                                   absolute inset-0 opacity-0
                                   transition-opacity duration-300
                                   group-hover:opacity-100"
                        ></span>

                        <div class="relative">

                            <div class="flex items-center gap-3">

                                {{-- Icon --}}
                                <div
                                    class="flex h-10 w-10 shrink-0
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
                                    <x-dynamic-component
                                        :component="'lucide-' . $step['icon']"
                                        class="cara-icon h-5 w-5"
                                    />
                                </div>

                                <div class="min-w-0">

                                    <span
                                        class="text-[10px] font-medium
                                               uppercase tracking-wider
                                               text-blue-600"
                                    >
                                        Langkah 0{{ $loop->iteration }}
                                    </span>

                                    <h3 class="mt-0.5 text-[15px] font-semibold text-gray-900 sm:text-sm">
                                        {{ $step['title'] }}
                                    </h3>

                                </div>

                            </div>

                            <p class="mt-4 text-[13px] leading-relaxed text-gray-500
                                      sm:text-xs sm:leading-5">
                                {{ $step['text'] }}
                            </p>

                        </div>

                    </div>

                    {{-- Connector antar langkah
                         HP: di bawah kartu, panah menghadap ke bawah (chip diputar 90deg)
                         md ke atas: di sisi kanan kartu, panah menghadap ke kanan --}}
                    @unless ($loop->last)
                        <span
                            aria-hidden="true"
                            class="cara-chip absolute left-1/2 -bottom-6.5 z-10
                                   flex h-6 w-6 -translate-x-1/2 rotate-90
                                   items-center justify-center rounded-full
                                   border border-gray-100 bg-white text-blue-600
                                   shadow-sm
                                   md:bottom-auto md:left-auto md:-right-5.5
                                   md:top-8.5 md:translate-x-0 md:rotate-0
                                   lg:-right-7"
                        >
                            <x-lucide-arrow-right class="h-3 w-3" />
                        </span>
                    @endunless

                </div>
            @endforeach

        </div>

    </div>

    {{-- Reveal + Card Spotlight --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const section = document.getElementById('cara-kerja');

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
                }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

                section
                    .querySelectorAll('[data-reveal]')
                    .forEach((el) => observer.observe(el));
            }

            /* Spotlight mengikuti kursor */
            const canHover = window.matchMedia('(hover: hover)').matches;
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (!canHover || reduceMotion) return;

            section.querySelectorAll('.cara-card').forEach((card) => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    card.style.setProperty('--mx', `${e.clientX - rect.left}px`);
                    card.style.setProperty('--my', `${e.clientY - rect.top}px`);
                });
            });
        });
    </script>

</section>