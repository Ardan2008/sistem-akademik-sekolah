@php

$features = [
    [
        'title' => 'Data Siswa',
        'description' => 'Kelola data siswa secara terstruktur dan mudah untuk mendukung kebutuhan akademik sekolah.',
        'icon' => 'users-round',
    ],
    [
        'title' => 'Data Guru',
        'description' => 'Kelola informasi guru dengan mudah dan terorganisir dalam satu sistem akademik.',
        'icon' => 'user-round',
    ],
    [
        'title' => 'Mata Pelajaran',
        'description' => 'Kelola mata pelajaran untuk membantu pengaturan kegiatan akademik sekolah.',
        'icon' => 'book-open',
    ],
    [
        'title' => 'Jadwal Akademik',
        'description' => 'Atur dan kelola jadwal akademik agar kegiatan pembelajaran lebih terorganisir.',
        'icon' => 'calendar-days',
    ],
    [
        'title' => 'Nilai & Akademik',
        'description' => 'Kelola nilai dan informasi akademik siswa secara terpusat dan mudah diakses.',
        'icon' => 'graduation-cap',
    ],
    [
        'title' => 'Informasi Sekolah',
        'description' => 'Sajikan berbagai informasi sekolah agar dapat diakses dengan lebih mudah.',
        'icon' => 'school',
    ],
];

@endphp

<style>
    /* Scroll Reveal */
    #fitur.reveal-ready [data-reveal] {
        opacity: 0;
        transform: translateY(28px);
        filter: blur(6px);
        transition:
            opacity .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            transform .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            filter .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s);
        will-change: opacity, transform;
    }

    #fitur.reveal-ready [data-reveal].is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }

    /* Badge Dot Pulse */
    @keyframes fitur-pulse {
        0%   { transform: scale(1);   opacity: .6; }
        100% { transform: scale(3.2); opacity: 0; }
    }

    #fitur .fitur-dot::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        background: currentColor;
        animation: fitur-pulse 1.8s ease-out infinite;
    }

    /* Card Spotlight */
    #fitur .fitur-spotlight {
        background: radial-gradient(
            220px circle at var(--mx, 50%) var(--my, 50%),
            rgba(37, 99, 235, .09),
            transparent 70%
        );
    }

    /* Icon Pop */
    @keyframes fitur-icon-pop {
        0%   { transform: scale(1)   rotate(0); }
        40%  { transform: scale(1.3) rotate(-10deg); }
        70%  { transform: scale(.92) rotate(6deg); }
        100% { transform: scale(1)   rotate(0); }
    }

    #fitur .fitur-card:hover .fitur-icon svg {
        animation: fitur-icon-pop .6s ease-in-out;
    }

    /* Link Underline */
    #fitur .fitur-link-line {
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .35s cubic-bezier(.22, 1, .36, 1);
    }

    #fitur .fitur-link:hover .fitur-link-line,
    #fitur .fitur-link:focus-visible .fitur-link-line {
        transform: scaleX(1);
    }

    @media (prefers-reduced-motion: reduce) {
        #fitur.reveal-ready [data-reveal] {
            opacity: 1;
            transform: none;
            filter: none;
            transition: none;
        }

        #fitur .fitur-dot::after,
        #fitur .fitur-card:hover .fitur-icon svg {
            animation: none;
        }
    }
</style>

<section id="fitur" class="bg-[#FDFDFD] py-16">

    <div class="mx-auto max-w-7xl px-6">

        {{-- Header --}}
        <div class="mb-10 text-center">

            <div data-reveal style="--d: 0s">
                <div
                    class="inline-flex items-center gap-2
                           rounded-full bg-blue-50 px-3 py-1.5
                           text-[10px] font-medium uppercase
                           tracking-wider text-blue-600"
                >
                    <span
                        class="fitur-dot relative h-1.5 w-1.5
                               rounded-full bg-blue-600 text-blue-600"
                    ></span>

                    Digitalisasi Pendidikan
                </div>
            </div>

            <h1
                data-reveal
                style="--d: .1s"
                class="mt-3 text-3xl font-semibold
                       tracking-tight text-gray-900
                       sm:text-4xl"
            >
                Fitur Utama
            </h1>

            <p
                data-reveal
                style="--d: .2s"
                class="mt-3 text-sm font-medium text-gray-500"
            >
                Semua Kebutuhan Akademik dalam Satu Tempat
            </p>

        </div>


        {{-- Feature Cards --}}
        <div
            class="grid grid-cols-1 gap-5
                   sm:grid-cols-2 lg:grid-cols-3"
        >

            @foreach ($features as $feature)

                {{-- Delay berdasarkan kolom, jadi tiap baris muncul kiri ke kanan --}}
                <div
                    data-reveal
                    style="--d: {{ ($loop->index % 3) * .12 }}s"
                    class="h-full"
                >

                    <div
                        class="fitur-card group relative h-full
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
                            class="fitur-spotlight pointer-events-none
                                   absolute inset-0 opacity-0
                                   transition-opacity duration-300
                                   group-hover:opacity-100"
                        ></span>

                        {{-- Corner Glow --}}
                        <span
                            aria-hidden="true"
                            class="pointer-events-none absolute -right-8
                                   -top-8 h-24 w-24 scale-50 rounded-full
                                   bg-blue-100/70 opacity-0 blur-2xl
                                   transition-all duration-500
                                   group-hover:scale-125
                                   group-hover:opacity-100"
                        ></span>

                        <div class="relative">

                            {{-- Icon --}}
                            <div
                                class="fitur-icon flex h-11 w-11 items-center
                                       justify-center rounded-xl
                                       bg-blue-50 text-blue-600
                                       transition-all duration-500
                                       ease-[cubic-bezier(.34,1.56,.64,1)]
                                       group-hover:-rotate-6
                                       group-hover:scale-110
                                       group-hover:bg-blue-600
                                       group-hover:text-white
                                       group-hover:shadow-lg
                                       group-hover:shadow-blue-600/30"
                            >
                                @switch($feature['icon'])

                                    @case('users-round')
                                        <x-lucide-users-round class="h-5 w-5" />
                                        @break

                                    @case('user-round')
                                        <x-lucide-user-round class="h-5 w-5" />
                                        @break

                                    @case('book-open')
                                        <x-lucide-book-open class="h-5 w-5" />
                                        @break

                                    @case('calendar-days')
                                        <x-lucide-calendar-days class="h-5 w-5" />
                                        @break

                                    @case('graduation-cap')
                                        <x-lucide-graduation-cap class="h-5 w-5" />
                                        @break

                                    @case('school')
                                        <x-lucide-school class="h-5 w-5" />
                                        @break

                                @endswitch
                            </div>


                            {{-- Content --}}
                            <h2 class="mt-5 text-base font-semibold text-gray-900">
                                {{ $feature['title'] }}
                            </h2>

                            <p class="mt-3 text-xs leading-relaxed text-gray-500">
                                {{ $feature['description'] }}
                            </p>


                            {{-- Link --}}
                            <a
                                href="#"
                                class="fitur-link mt-4 inline-flex items-center
                                       gap-1 text-xs font-medium text-blue-600
                                       transition hover:text-blue-700"
                            >
                                <span class="relative">
                                    Pelajari Selengkapnya

                                    <span
                                        aria-hidden="true"
                                        class="fitur-link-line absolute
                                               -bottom-0.5 left-0 h-px w-full
                                               bg-current"
                                    ></span>
                                </span>

                                <x-lucide-arrow-right
                                    class="h-3.5 w-3.5
                                           transition-transform duration-200
                                           group-hover:translate-x-1"
                                />
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

    {{-- Script: Reveal + Card Spotlight --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const section = document.getElementById('fitur');

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

            section.querySelectorAll('.fitur-card').forEach((card) => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    card.style.setProperty('--mx', `${e.clientX - rect.left}px`);
                    card.style.setProperty('--my', `${e.clientY - rect.top}px`);
                });
            });
        });
    </script>

</section>