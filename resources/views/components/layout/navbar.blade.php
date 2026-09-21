@php
    $links = [
        ['label' => 'Beranda',    'hash' => 'beranda'],
        ['label' => 'Tentang',    'hash' => 'tentang'],
        ['label' => 'Fitur',      'hash' => 'fitur'],
        ['label' => 'Cara Kerja', 'hash' => 'cara-kerja'],
        ['label' => 'FAQ',        'hash' => 'faq'],
    ];
@endphp

<header
    id="site-navbar"
    data-scrolled="false"
    data-open="false"
    class="group sticky top-0 z-50 h-16 bg-[#FDFDFD] px-4 sm:px-6
           transition-colors duration-500
           data-[scrolled=true]:bg-transparent
           data-[open=true]:bg-[#FDFDFD]"
>

    {{-- Backdrop (mobile only) --}}
    <div
        id="nav-backdrop"
        aria-hidden="true"
        class="invisible fixed inset-x-0 bottom-0 top-16 -z-10 bg-gray-900/20 opacity-0
               backdrop-blur-sm transition-[opacity,visibility] duration-300 md:hidden
               group-data-[open=true]:visible group-data-[open=true]:opacity-100
               motion-reduce:transition-none"
    ></div>

    <nav
        aria-label="Navigasi utama"
        class="mx-auto flex h-16 w-full max-w-7xl items-center
               justify-between rounded-full border border-transparent
               px-4 transition-all duration-500 ease-out sm:px-6
               group-data-[scrolled=true]:h-14
               group-data-[scrolled=true]:max-w-3xl
               group-data-[scrolled=true]:translate-y-2
               group-data-[scrolled=true]:border-gray-100
               group-data-[scrolled=true]:bg-white/80
               group-data-[scrolled=true]:shadow-lg
               group-data-[scrolled=true]:shadow-gray-200/60
               group-data-[scrolled=true]:backdrop-blur-md
               group-data-[open=true]:border-gray-100
               group-data-[open=true]:bg-white
               md:group-data-[open=true]:bg-transparent
               md:group-data-[open=true]:border-transparent
               motion-reduce:transition-none"
    >

        {{-- Logo --}}
        <a href="{{ route('beranda') }}"
           class="text-sm font-bold tracking-wide text-blue-600">
            SASKANSA
        </a>

        {{-- Navigasi desktop --}}
        <ul class="hidden items-center gap-8 text-xs font-medium text-gray-700 md:flex">
            @foreach ($links as $link)
                <li>
                    <a href="{{ route('beranda') }}#{{ $link['hash'] }}"
                       data-hash="{{ $link['hash'] }}"
                       data-nav-link
                       class="nav-link relative inline-block py-2 text-gray-700
                              transition-colors duration-300 hover:text-blue-600">
                        {{ $link['label'] }}
                        <span
                            data-underline
                            class="pointer-events-none absolute inset-x-0 -bottom-0.5 h-0.5
                                   origin-center scale-x-0 rounded-full bg-blue-600
                                   transition-transform duration-300 ease-out"
                        ></span>
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- Tombol Masuk (desktop) --}}
        <a href="{{ route('login') }}"
           class="hidden h-8 items-center rounded-lg border border-blue-500 px-5
                  text-xs font-medium text-blue-600 transition-all duration-500
                  ease-out hover:bg-blue-50 md:inline-flex
                  group-data-[scrolled=true]:rounded-2xl">
            Masuk
        </a>

        {{-- Tombol hamburger (mobile) --}}
        <button
            id="nav-toggle"
            type="button"
            aria-controls="mobile-menu"
            aria-expanded="false"
            aria-label="Buka menu"
            class="relative -mr-1 flex h-10 w-10 items-center justify-center rounded-full
                   text-gray-700 transition hover:bg-blue-50 hover:text-blue-600
                   focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                   focus-visible:outline-blue-500 md:hidden"
        >
            <span class="sr-only">Menu</span>
            <span aria-hidden="true" class="relative block h-4 w-5">
                <span class="absolute left-0 top-0 h-0.5 w-5 rounded-full bg-current
                             transition-all duration-300 ease-out motion-reduce:transition-none
                             group-data-[open=true]:top-[7px] group-data-[open=true]:rotate-45"></span>
                <span class="absolute left-0 top-[7px] h-0.5 w-5 rounded-full bg-current
                             transition-all duration-200 ease-out motion-reduce:transition-none
                             group-data-[open=true]:translate-x-2 group-data-[open=true]:opacity-0"></span>
                <span class="absolute left-0 top-[14px] h-0.5 w-5 rounded-full bg-current
                             transition-all duration-300 ease-out motion-reduce:transition-none
                             group-data-[open=true]:top-[7px] group-data-[open=true]:-rotate-45"></span>
            </span>
        </button>

    </nav>

    {{-- Panel menu mobile --}}
    <div
        id="mobile-menu"
        class="pointer-events-none invisible absolute inset-x-4 top-[4.5rem] origin-top
               -translate-y-3 scale-95 rounded-3xl border border-gray-100 bg-white p-3
               opacity-0 shadow-xl shadow-gray-200/70
               transition-[opacity,transform,visibility] duration-300 ease-out
               group-data-[scrolled=true]:top-[4.25rem]
               group-data-[open=true]:pointer-events-auto group-data-[open=true]:visible
               group-data-[open=true]:translate-y-0 group-data-[open=true]:scale-100
               group-data-[open=true]:opacity-100
               motion-reduce:transition-none md:hidden"
    >
        <ul class="flex flex-col">
            @foreach ($links as $link)
                <li
                    style="--i: {{ $loop->index }}"
                    class="translate-y-2 opacity-0 transition duration-300 ease-out
                           group-data-[open=true]:translate-y-0 group-data-[open=true]:opacity-100
                           group-data-[open=true]:[transition-delay:calc(var(--i)*55ms+90ms)]
                           motion-reduce:transition-none"
                >
                    <a href="{{ route('beranda') }}#{{ $link['hash'] }}"
                       data-hash="{{ $link['hash'] }}"
                       data-nav-link
                       data-menu-link
                       class="nav-link-mobile flex items-center justify-between rounded-2xl px-4 py-3
                              text-base font-medium text-gray-800 transition-colors duration-300
                              hover:bg-blue-50 hover:text-blue-600
                              focus-visible:outline focus-visible:outline-2
                              focus-visible:outline-blue-500">
                        {{ $link['label'] }}
                        <svg data-chevron class="h-4 w-4 text-gray-300 transition-colors duration-300" viewBox="0 0 20 20" fill="none"
                             stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                             stroke-linejoin="round" aria-hidden="true">
                            <path d="M7 4l6 6-6 6" />
                        </svg>
                    </a>
                </li>
            @endforeach
        </ul>

        <div
            style="--i: {{ count($links) }}"
            class="mt-2 translate-y-2 border-t border-gray-100 p-1 pt-3 opacity-0
                   transition duration-300 ease-out
                   group-data-[open=true]:translate-y-0 group-data-[open=true]:opacity-100
                   group-data-[open=true]:[transition-delay:calc(var(--i)*55ms+90ms)]
                   motion-reduce:transition-none"
        >
            <a href="{{ route('login') }}"
               data-menu-link
               class="flex h-11 w-full items-center justify-center rounded-2xl bg-blue-600
                      text-sm font-semibold text-white shadow-md shadow-blue-600/25
                      transition hover:bg-blue-700 active:scale-[0.98]">
                Masuk
            </a>
        </div>
    </div>

    <style>
        .nav-link.is-active {
            color: #2563eb; /* blue-600 */
        }
        .nav-link.is-active [data-underline] {
            transform: scaleX(1);
        }
        .nav-link-mobile.is-active {
            color: #2563eb;
            background-color: #eff6ff; /* blue-50 */
        }
        .nav-link-mobile.is-active [data-chevron] {
            color: #2563eb;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar   = document.getElementById('site-navbar');
            const toggle   = document.getElementById('nav-toggle');
            const backdrop = document.getElementById('nav-backdrop');
            const menu     = document.getElementById('mobile-menu');
            const THRESHOLD = 10; 
            let ticking = false;

            /* Efek scroll (bentuk navbar) */
            const update = () => {
                const next = window.scrollY > THRESHOLD ? 'true' : 'false';
                if (navbar.dataset.scrolled !== next) navbar.dataset.scrolled = next;
                ticking = false;
            };

            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(update);
                    ticking = true;
                }
            }, { passive: true });

            update(); // kondisi awal (misal reload di tengah halaman)

            /* Menu mobile */
            const setMenu = (open) => {
                navbar.dataset.open = open ? 'true' : 'false';
                toggle.setAttribute('aria-expanded', open);
                toggle.setAttribute('aria-label', open ? 'Tutup menu' : 'Buka menu');
                menu.toggleAttribute('inert', !open);
            };

            setMenu(false);

            toggle.addEventListener('click', () => {
                setMenu(navbar.dataset.open !== 'true');
            });

            backdrop.addEventListener('click', () => setMenu(false));

            menu.querySelectorAll('[data-menu-link]').forEach((link) => {
                link.addEventListener('click', () => setMenu(false));
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && navbar.dataset.open === 'true') {
                    setMenu(false);
                    toggle.focus();
                }
            });

            // Tutup otomatis saat layar melebar ke ukuran desktop
            window.matchMedia('(min-width: 768px)').addEventListener('change', (e) => {
                if (e.matches) setMenu(false);
            });

            /* Scrollspy: highlight link menetap + update hash URL */
            const hashes   = @json(array_column($links, 'hash'));
            const navLinks = document.querySelectorAll('[data-nav-link]');
            const sections = hashes
                .map((id) => document.getElementById(id))
                .filter(Boolean);

            const setActive = (hash) => {
                navLinks.forEach((link) => {
                    const active = link.dataset.hash === hash;
                    link.classList.toggle('is-active', active);
                });
            };

            // Klik: langsung "menetap" ke link yang ditekan, tanpa menunggu scroll settle
            navLinks.forEach((link) => {
                link.addEventListener('click', () => {
                    setActive(link.dataset.hash);
                });
            });

            if (sections.length) {
                let currentHash = null;

                const observer = new IntersectionObserver(
                    (entries) => {
                        // Pilih section paling atas yang sedang terlihat di "zona aktif"
                        const visible = entries
                            .filter((entry) => entry.isIntersecting)
                            .sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top);

                        if (visible.length > 0) {
                            const id = visible[0].target.id;
                            if (id !== currentHash) {
                                currentHash = id;
                                setActive(id);
                                history.replaceState(null, '', `#${id}`);
                            }
                        }
                    },
                    {
                        // Zona aktif: pita horizontal di sekitar tengah layar
                        root: null,
                        rootMargin: '-96px 0px -55% 0px',
                        threshold: 0,
                    }
                );

                sections.forEach((section) => observer.observe(section));

                // State awal: pakai hash di URL kalau ada, kalau tidak pakai link pertama
                const initialHash = window.location.hash.replace('#', '') || hashes[0];
                setActive(initialHash);
            }
        });
    </script>

</header>