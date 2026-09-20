@php
    $benefits = [
        [
            'icon' => 'list-checks',
            'title' => 'Terorganisir',
            'text' => 'Data akademik tersusun dengan baik sehingga lebih mudah dikelola, diperbarui, dan ditemukan saat dibutuhkan.',
        ],
        [
            'icon' => 'zap',
            'title' => 'Efisien',
            'text' => 'Membantu mengurangi proses administrasi secara manual, menghemat waktu, dan mempercepat pengelolaan berbagai kebutuhan sekolah.',
        ],
        [
            'icon' => 'users-round',
            'title' => 'Terhubung',
            'text' => 'Informasi akademik dapat diakses dengan lebih mudah melalui satu platform yang terintegrasi, sehingga mendukung koordinasi antar pengguna.',
        ],
    ];
@endphp

<style>
    /* Scroll Reveal */
    #manfaat.reveal-ready [data-reveal] {
        opacity: 0;
        transform: translateY(28px);
        filter: blur(6px);
        transition:
            opacity .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            transform .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            filter .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s);
        will-change: opacity, transform;
    }

    #manfaat.reveal-ready [data-reveal].is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }

    /* Badge Dot Pulse */
    @keyframes manfaat-pulse {
        0%   { transform: scale(1);   opacity: .6; }
        100% { transform: scale(3.2); opacity: 0; }
    }

    #manfaat .manfaat-dot::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        background: currentColor;
        animation: manfaat-pulse 1.8s ease-out infinite;
    }

    /* Card Spotlight (mengikuti kursor) */
    #manfaat .manfaat-spotlight {
        background: radial-gradient(
            220px circle at var(--mx, 50%) var(--my, 50%),
            rgba(37, 99, 235, .09),
            transparent 70%
        );
    }

    /* Icon Pop */
    @keyframes manfaat-icon-pop {
        0%   { transform: scale(1)   rotate(0); }
        40%  { transform: scale(1.3) rotate(-10deg); }
        70%  { transform: scale(.92) rotate(6deg); }
        100% { transform: scale(1)   rotate(0); }
    }

    #manfaat .manfaat-card:hover .manfaat-icon {
        animation: manfaat-icon-pop .6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        #manfaat.reveal-ready [data-reveal] {
            opacity: 1;
            transform: none;
            filter: none;
            transition: none;
        }

        #manfaat .manfaat-dot::after,
        #manfaat .manfaat-card:hover .manfaat-icon {
            animation: none;
        }
    }
</style>

<section id="manfaat" class="bg-[#FDFDFD]">

    <div class="mx-auto max-w-7xl px-6 py-20">

        {{-- Heading --}}
        <div class="text-center">

            {{-- Badge --}}
            <div data-reveal style="--d: 0s">
                <div
                    class="mb-5 inline-flex items-center gap-2
                           rounded-full bg-blue-50 px-3 py-1.5
                           text-[10px] font-medium uppercase
                           tracking-wider text-blue-600"
                >
                    <span
                        class="manfaat-dot relative h-1.5 w-1.5
                               rounded-full bg-blue-600 text-blue-600"
                    ></span>

                    Digitalisasi Pendidikan
                </div>
            </div>

            {{-- Title --}}
            <h2
                data-reveal
                style="--d: .1s"
                class="text-3xl font-semibold tracking-tight
                       text-gray-900 sm:text-4xl"
            >
                Manfaat SASKANSA
            </h2>

            {{-- Subtitle --}}
            <p
                data-reveal
                style="--d: .2s"
                class="mt-3 text-sm font-medium text-gray-500"
            >
                Dibuat untuk Membuat Pekerjaan Sekolah Menjadi Lebih Ringan
            </p>

        </div>


        {{-- Benefits --}}
        <div class="mt-10 grid grid-cols-1 gap-5 md:grid-cols-3">

            @foreach ($benefits as $benefit)
                <div
                    data-reveal
                    style="--d: {{ .3 + $loop->index * .12 }}s"
                    class="h-full"
                >
                    <div
                        class="manfaat-card group relative h-full
                               overflow-hidden rounded-2xl border
                               border-gray-100 bg-white p-6 shadow-sm
                               transition-[transform,box-shadow]
                               duration-300 ease-out
                               hover:-translate-y-1.5 hover:shadow-xl
                               hover:shadow-gray-200/70"
                    >

                        {{-- Spotlight --}}
                        <span
                            aria-hidden="true"
                            class="manfaat-spotlight pointer-events-none
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
                                        :component="'lucide-' . $benefit['icon']"
                                        class="manfaat-icon h-5 w-5"
                                    />
                                </div>

                                <h3 class="text-base font-semibold text-gray-900">
                                    {{ $benefit['title'] }}
                                </h3>

                            </div>

                            <p class="mt-4 text-xs leading-5 text-gray-500">
                                {{ $benefit['text'] }}
                            </p>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>

    {{-- Script: Reveal + Card Spotlight --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const section = document.getElementById('manfaat');

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

            section.querySelectorAll('.manfaat-card').forEach((card) => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    card.style.setProperty('--mx', `${e.clientX - rect.left}px`);
                    card.style.setProperty('--my', `${e.clientY - rect.top}px`);
                });
            });
        });
    </script>

</section>