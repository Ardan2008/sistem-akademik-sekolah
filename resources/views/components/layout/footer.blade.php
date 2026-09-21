@php
    $socials = [
        ['label' => 'Facebook', 'href' => '#', 'icon' => 'facebook'],
        ['label' => 'Instagram', 'href' => '#', 'icon' => 'instagram'],
        ['label' => 'YouTube', 'href' => '#', 'icon' => 'youtube'],
        ['label' => 'Email', 'href' => 'mailto:saskansa@gmail.com', 'icon' => 'mail'],
    ];

    $quickLinks = [
        ['label' => 'Beranda', 'href' => route('beranda') . '#beranda'],
        ['label' => 'Tentang', 'href' => route('beranda') . '#tentang'],
        ['label' => 'Fitur', 'href' => route('beranda') . '#fitur'],
        ['label' => 'Cara Kerja', 'href' => route('beranda') . '#cara-kerja'],
        ['label' => 'FAQ', 'href' => route('beranda') . '#faq'],
    ];

    $platformLinks = [
        'Dashboard', 'Data Siswa', 'Data Guru', 'Akademik',
        'Jadwal', 'Nilai', 'Pengumuman',
    ];
@endphp

<style>
    /* ---------- Scroll Reveal ---------- */
    #site-footer.reveal-ready [data-reveal] {
        opacity: 0;
        transform: translateY(24px);
        filter: blur(6px);
        transition:
            opacity .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            transform .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            filter .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s);
        will-change: opacity, transform;
    }

    #site-footer.reveal-ready [data-reveal].is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }

    /* Di layar kecil kolom bertumpuk: tidak perlu jeda bertahap */
    @media (max-width: 639px) {
        #site-footer [data-reveal] {
            --d: 0s !important;
        }
    }

    /* ---------- Garis atas: kilau bergerak ---------- */
    @keyframes footer-sweep {
        0%   { transform: translateX(-100%); }
        100% { transform: translateX(400%); }
    }

    #site-footer .footer-sweep {
        animation: footer-sweep 6s ease-in-out infinite;
    }

    /* ---------- Glow latar melayang ---------- */
    @keyframes footer-glow {
        0%, 100% { transform: translate(-50%, 0) scale(1);   opacity: .7; }
        50%      { transform: translate(-50%, 14px) scale(1.15); opacity: 1; }
    }

    #site-footer .footer-glow {
        animation: footer-glow 9s ease-in-out infinite;
    }

    /* ---------- Brand shimmer ---------- */
    @keyframes footer-shimmer {
        0%   { background-position: 120% 0; }
        100% { background-position: -120% 0; }
    }

    #site-footer .footer-brand {
        background-image: linear-gradient(
            100deg,
            #ffffff 40%,
            #93c5fd 50%,
            #ffffff 60%
        );
        background-size: 250% 100%;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        animation: footer-shimmer 7s linear infinite;
    }

    /* ---------- Link: garis bawah + geser ---------- */
    #site-footer .footer-link {
        position: relative;
        display: inline-block;
        transition: color .25s ease, transform .3s cubic-bezier(.22, 1, .36, 1);
    }

    #site-footer .footer-link::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -3px;
        height: 1px;
        background: currentColor;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .35s cubic-bezier(.22, 1, .36, 1);
    }

    #site-footer .footer-link:focus-visible {
        color: #fff;
        outline: 2px solid #60a5fa;
        outline-offset: 4px;
        border-radius: 2px;
    }

    #site-footer .footer-link:focus-visible::after {
        transform: scaleX(1);
    }

    /* Efek hover hanya untuk perangkat yang benar-benar punya hover
       (mencegah efek "nyangkut" setelah tap di HP) */
    @media (hover: hover) {
        #site-footer .footer-link:hover {
            color: #fff;
        }

        #site-footer .footer-link:hover::after {
            transform: scaleX(1);
        }

        #site-footer .footer-list .footer-link:hover {
            transform: translateX(4px);
        }
    }

    /* ---------- Ikon sosial: pop ---------- */
    @keyframes footer-pop {
        0%   { transform: scale(1)   rotate(0); }
        40%  { transform: scale(1.25) rotate(-10deg); }
        70%  { transform: scale(.94) rotate(6deg); }
        100% { transform: scale(1)   rotate(0); }
    }

    #site-footer .footer-social:hover svg,
    #site-footer .footer-social:focus-visible svg {
        animation: footer-pop .55s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        #site-footer.reveal-ready [data-reveal] {
            opacity: 1;
            transform: none;
            filter: none;
            transition: none;
        }

        #site-footer .footer-sweep,
        #site-footer .footer-glow,
        #site-footer .footer-social:hover svg,
        #site-footer .footer-social:focus-visible svg {
            animation: none;
        }

        #site-footer .footer-brand {
            animation: none;
            background-image: none;
            color: #fff;
        }
    }
</style>

<footer
    id="site-footer"
    class="relative overflow-hidden bg-[#020207] text-white"
>

    {{-- Garis atas dengan kilau --}}
    <div
        aria-hidden="true"
        class="absolute inset-x-0 top-0 h-px overflow-hidden
               bg-linear-to-r from-transparent
               via-blue-500/40 to-transparent"
    >
        <span
            class="footer-sweep absolute inset-y-0 left-0 w-1/4
                   bg-linear-to-r from-transparent
                   via-blue-300 to-transparent"
        ></span>
    </div>

    {{-- Glow latar --}}
    <span
        aria-hidden="true"
        class="footer-glow pointer-events-none absolute left-1/2
               -top-24 h-48 w-xl max-w-full rounded-full
               bg-blue-600/15 blur-3xl"
    ></span>

    <div
        class="relative mx-auto max-w-7xl px-4 pt-12
               pb-[max(2rem,env(safe-area-inset-bottom))]
               sm:px-6 sm:pt-14 lg:pt-16"
    >

        {{-- Footer Content
             Mobile : brand penuh, Quick Links & Fitur berdampingan, Kontak penuh
             Tablet : sama, dengan kontak tersusun 2-3 kolom
             Desktop: 4 kolom --}}
        <div
            class="grid grid-cols-2 gap-x-6 gap-y-10
                   sm:gap-x-10
                   lg:grid-cols-[1.4fr_1fr_1fr_1.3fr] lg:gap-x-12"
        >

            {{-- Brand --}}
            <div data-reveal style="--d: 0s" class="col-span-2 lg:col-span-1">

                <h2 class="footer-brand text-lg font-semibold text-white">
                    SASKANSA
                </h2>

                <p class="mt-4 max-w-md text-[13px] leading-relaxed text-gray-400
                          sm:text-xs lg:max-w-xs">
                    Sistem Akademik Sekolah yang membantu mengelola
                    data dan informasi akademik secara terstruktur
                    dalam satu platform.
                </p>

                {{-- Social Media --}}
                <div class="mt-5 flex flex-wrap gap-2.5 sm:gap-2">

                    @foreach ($socials as $social)
                        <a
                            href="{{ $social['href'] }}"
                            aria-label="{{ $social['label'] }}"
                            class="footer-social flex h-10 w-10 items-center
                                   justify-center rounded-full
                                   bg-blue-600 text-white
                                   transition duration-300
                                   hover:-translate-y-1 hover:bg-blue-500
                                   hover:shadow-lg hover:shadow-blue-500/40
                                   focus-visible:outline focus-visible:outline-2
                                   focus-visible:outline-offset-2
                                   focus-visible:outline-blue-300
                                   active:translate-y-0 active:scale-95
                                   sm:h-8 sm:w-8"
                        >
                            <x-dynamic-component
                                :component="'lucide-' . $social['icon']"
                                class="h-[18px] w-[18px] sm:h-4 sm:w-4"
                            />
                        </a>
                    @endforeach

                </div>
            </div>

            {{-- Quick Links --}}
            <div data-reveal style="--d: .12s">

                <h3 class="text-xs font-medium tracking-widest text-gray-300">
                    Quick Links
                </h3>

                <ul class="footer-list mt-4 space-y-1.5 text-[13px] text-gray-400
                           sm:mt-5 sm:space-y-3 sm:text-xs">

                    @foreach ($quickLinks as $link)
                        <li>
                            <a href="{{ $link['href'] }}"
                               class="footer-link py-1.5 sm:py-0">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>

            {{-- Fitur Platform --}}
            <div data-reveal style="--d: .24s">

                <h3 class="text-xs font-medium tracking-widest text-gray-300">
                    Fitur Platform
                </h3>

                <ul class="footer-list mt-4 space-y-1.5 text-[13px] text-gray-400
                           sm:mt-5 sm:space-y-3 sm:text-xs">

                    @foreach ($platformLinks as $label)
                        <li>
                            <a href="#" class="footer-link py-1.5 sm:py-0">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>

            {{-- Kontak --}}
            <div data-reveal style="--d: .36s" class="col-span-2 lg:col-span-1">

                <h3 class="text-xs font-medium tracking-widest text-gray-300">
                    Kontak
                </h3>

                <div
                    class="mt-4 grid gap-5 text-[13px] text-gray-400
                           sm:mt-5 sm:grid-cols-2 sm:text-xs
                           md:grid-cols-3 lg:grid-cols-1"
                >

                    {{-- Lokasi --}}
                    <div class="group flex items-start gap-3">

                        <x-lucide-map-pin
                            class="mt-0.5 h-4 w-4 shrink-0 text-blue-500
                                   transition-transform duration-300
                                   ease-[cubic-bezier(.34,1.56,.64,1)]
                                   group-hover:-translate-y-0.5
                                   group-hover:scale-125"
                        />

                        <div class="min-w-0">
                            <p class="font-medium text-white">
                                Lokasi
                            </p>

                            <p class="mt-2 leading-relaxed">
                                Jl. Purwosari,<br>
                                Pasuruan, Jawa Timur,<br>
                                Indonesia
                            </p>
                        </div>

                    </div>

                    {{-- Telepon --}}
                    <div class="group flex items-start gap-3">

                        <x-lucide-phone
                            class="mt-0.5 h-4 w-4 shrink-0 text-blue-500
                                   transition-transform duration-300
                                   ease-[cubic-bezier(.34,1.56,.64,1)]
                                   group-hover:-rotate-12
                                   group-hover:scale-125"
                        />

                        <div class="min-w-0">
                            <p class="font-medium text-white">
                                Telepon
                            </p>

                            <p class="mt-2">
                                <a href="tel:+6281575858150"
                                   class="footer-link">
                                    +62 815-7585-8150
                                </a>
                            </p>
                        </div>

                    </div>

                    {{-- Email --}}
                    <div class="group flex items-start gap-3 sm:col-span-2 md:col-span-1">

                        <x-lucide-mail
                            class="mt-0.5 h-4 w-4 shrink-0 text-blue-500
                                   transition-transform duration-300
                                   ease-[cubic-bezier(.34,1.56,.64,1)]
                                   group-hover:-translate-y-0.5
                                   group-hover:scale-125"
                        />

                        <div class="min-w-0">
                            <p class="font-medium text-white">
                                Email
                            </p>

                            <p class="mt-2 break-words">
                                <a href="mailto:saskansa@gmail.com"
                                   class="footer-link">
                                    saskansa@gmail.com
                                </a>
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        {{-- Bottom Footer --}}
        <div
            data-reveal
            style="--d: .45s"
            class="mt-10 flex flex-col items-center gap-3
                   border-t border-gray-800 pt-6 text-center
                   text-xs text-gray-400
                   sm:flex-row sm:justify-between sm:gap-4
                   sm:text-left sm:text-[10px]"
        >

            <p>
                © {{ date('Y') }} SASKANSA. All rights reserved.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-x-3 gap-y-1">

                <a href="#" class="footer-link py-1 sm:py-0">
                    Privacy Policy
                </a>

                <span aria-hidden="true" class="text-gray-600">|</span>

                <a href="#" class="footer-link py-1 sm:py-0">
                    Terms of Service
                </a>

            </div>

        </div>

    </div>

    {{-- Script: Reveal --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const footer = document.getElementById('site-footer');

            if (!('IntersectionObserver' in window)) return;

            footer.classList.add('reveal-ready');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -5% 0px' });

            footer
                .querySelectorAll('[data-reveal]')
                .forEach((el) => observer.observe(el));
        });
    </script>

</footer>