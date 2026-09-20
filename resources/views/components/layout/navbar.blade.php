<header
    id="site-navbar"
    data-scrolled="false"
    class="group sticky top-0 z-50 h-16 bg-[#FDFDFD]
           transition-colors duration-500
           data-[scrolled=true]:bg-transparent"
>

    <nav
        class="mx-auto flex h-16 w-full max-w-7xl items-center
               justify-between rounded-full border border-transparent
               px-6 transition-all duration-500 ease-out
               group-data-[scrolled=true]:h-14
               group-data-[scrolled=true]:max-w-3xl
               group-data-[scrolled=true]:translate-y-2
               group-data-[scrolled=true]:border-gray-100
               group-data-[scrolled=true]:bg-white/80
               group-data-[scrolled=true]:shadow-lg
               group-data-[scrolled=true]:shadow-gray-200/60
               group-data-[scrolled=true]:backdrop-blur-md"
    >

        {{-- Logo --}}
        <a href="{{ route('beranda') }}"
           class="text-sm font-bold tracking-wide text-blue-600">
            SASKANSA
        </a>

        {{-- Navigation --}}
        <ul class="flex items-center gap-8 text-xs font-medium text-gray-700">

            <li>
                <a href="{{ route('beranda') }}"
                   class="transition hover:text-blue-700">
                    Beranda
                </a>
            </li>

            <li>
                <a href="{{ route('beranda') }}#tentang"
                   class="transition hover:text-blue-600">
                    Tentang
                </a>
            </li>

            <li>
                <a href="{{ route('beranda') }}#fitur"
                   class="transition hover:text-blue-600">
                    Fitur
                </a>
            </li>

            <li>
                <a href="{{ route('beranda') }}#cara-kerja"
                   class="transition hover:text-blue-600">
                    Cara Kerja
                </a>
            </li>

            <li>
                <a href="{{ route('beranda') }}#faq"
                   class="transition hover:text-blue-600">
                    FAQ
                </a>
            </li>

        </ul>

        {{-- Tombol Masuk --}}
        <a href="{{ route('login') }}"
           class="inline-flex h-8 items-center rounded-lg border
                  border-blue-500 px-5 text-xs font-medium
                  text-blue-600 transition-all duration-500 ease-out
                  hover:bg-blue-50
                  group-data-[scrolled=true]:rounded-2xl">
            Masuk
        </a>

    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('site-navbar');
            const THRESHOLD = 10; // jarak scroll (px) sebelum navbar berubah
            let ticking = false;

            const update = () => {
                const scrolled = window.scrollY > THRESHOLD;
                const next = scrolled ? 'true' : 'false';

                if (navbar.dataset.scrolled !== next) {
                    navbar.dataset.scrolled = next;
                }
                ticking = false;
            };

            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(update);
                    ticking = true;
                }
            }, { passive: true });

            update(); // set kondisi awal (misal saat reload di tengah halaman)
        });
    </script>

</header>