@php
    $socials = [
        ['label' => 'Facebook', 'href' => '#', 'icon' => 'facebook'],
        ['label' => 'Instagram', 'href' => '#', 'icon' => 'instagram'],
        ['label' => 'YouTube', 'href' => '#', 'icon' => 'youtube'],
        ['label' => 'Email', 'href' => 'mailto:saskansa@gmail.com', 'icon' => 'mail'],
    ];

    $quickLinks = [
        ['label' => 'Beranda', 'href' => route('beranda')],
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

    #site-footer .footer-link:hover,
    #site-footer .footer-link:focus-visible {
        color: #fff;
    }

    #site-footer .footer-link:hover::after,
    #site-footer .footer-link:focus-visible::after {
        transform: scaleX(1);
    }

    #site-footer .footer-list .footer-link:hover {
        transform: translateX(4px);
    }

    /* ---------- Ikon sosial: pop ---------- */
    @keyframes footer-pop {
        0%   { transform: scale(1)   rotate(0); }
        40%  { transform: scale(1.25) rotate(-10deg); }
        70%  { transform: scale(.94) rotate(6deg); }
        100% { transform: scale(1)   rotate(0); }
    }

    #site-footer .footer-social:hover svg {
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
        #site-footer .footer-social:hover svg {
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

    <div class="relative mx-auto max-w-7xl px-6 py-12">

        {{-- Footer Content --}}
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div data-reveal style="--d: 0s">

                <h2 class="footer-brand text-lg font-semibold text-white">
                    SASKANSA
                </h2>

                <p class="mt-4 max-w-xs text-xs leading-relaxed text-gray-400">
                    Sistem Akademik Sekolah yang membantu mengelola
                    data dan informasi akademik secara terstruktur
                    dalam satu platform.
                </p>

                {{-- Social Media --}}
                <div class="mt-5 flex gap-2">

                    @foreach ($socials as $social)
                        <a
                            href="{{ $social['href'] }}"
                            aria-label="{{ $social['label'] }}"
                            class="footer-social flex h-8 w-8 items-center
                                   justify-center rounded-full
                                   bg-blue-600 text-white
                                   transition duration-300
                                   hover:-translate-y-1 hover:bg-blue-500
                                   hover:shadow-lg hover:shadow-blue-500/40
                                   active:translate-y-0"
                        >
                            <x-dynamic-component
                                :component="'lucide-' . $social['icon']"
                                class="h-4 w-4"
                            />
                        </a>
                    @endforeach

                </div>
            </div>

            {{-- Quick Links --}}
            <div data-reveal style="--d: .12s">

                <h3
                    class="text-xs font-medium tracking-widest
                           text-gray-300"
                >
                    Quick Links
                </h3>

                <ul class="footer-list mt-5 space-y-3 text-xs text-gray-400">

                    @foreach ($quickLinks as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="footer-link">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>

            {{-- Fitur Platform --}}
            <div data-reveal style="--d: .24s">

                <h3
                    class="text-xs font-medium tracking-widest
                           text-gray-300"
                >
                    Fitur Platform
                </h3>

                <ul class="footer-list mt-5 space-y-3 text-xs text-gray-400">

                    @foreach ($platformLinks as $label)
                        <li>
                            <a href="#" class="footer-link">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>

            {{-- Kontak --}}
            <div data-reveal style="--d: .36s">

                <h3
                    class="text-xs font-medium tracking-widest
                           text-gray-300"
                >
                    Kontak
                </h3>

                <div class="mt-5 space-y-5 text-xs text-gray-400">

                    {{-- Lokasi --}}
                    <div class="group flex items-start gap-3">

                        <x-lucide-map-pin
                            class="mt-0.5 h-4 w-4 shrink-0 text-blue-500
                                   transition-transform duration-300
                                   ease-[cubic-bezier(.34,1.56,.64,1)]
                                   group-hover:-translate-y-0.5
                                   group-hover:scale-125"
                        />

                        <div>
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

                        <div>
                            <p class="font-medium text-white">
                                Telepon
                            </p>

                            <p class="mt-2">
                                +62 815-7585-8150
                            </p>
                        </div>

                    </div>

                    {{-- Email --}}
                    <div class="group flex items-start gap-3">

                        <x-lucide-mail
                            class="mt-0.5 h-4 w-4 shrink-0 text-blue-500
                                   transition-transform duration-300
                                   ease-[cubic-bezier(.34,1.56,.64,1)]
                                   group-hover:-translate-y-0.5
                                   group-hover:scale-125"
                        />

                        <div>
                            <p class="font-medium text-white">
                                Email
                            </p>

                            <p class="mt-2">
                                saskansa@gmail.com
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
            class="mt-10 flex flex-col gap-4
                   border-t border-gray-800 pt-5
                   text-[10px] text-gray-400
                   sm:flex-row sm:items-center
                   sm:justify-between"
        >

            <p>
                © {{ date('Y') }} SASKANSA. All rights reserved.
            </p>

            <div class="flex gap-2">

                <a href="#" class="footer-link">
                    Privacy Policy
                </a>

                <span>|</span>

                <a href="#" class="footer-link">
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
            }, { threshold: 0.1 });

            footer
                .querySelectorAll('[data-reveal]')
                .forEach((el) => observer.observe(el));
        });
    </script>

</footer>