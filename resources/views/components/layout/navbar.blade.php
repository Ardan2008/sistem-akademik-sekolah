<nav class="w-full bg-[#FDFDFD]">

    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-6">

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
           class="rounded-md border border-blue-500 px-5 py-1.5 text-xs font-medium text-blue-600 transition hover:bg-blue-50">
            Masuk
        </a>

    </div>

</nav>