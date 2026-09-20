<footer class="bg-[#020207] text-white">

    <div class="mx-auto max-w-7xl px-6 py-12">

        {{-- Footer Content --}}
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div>

                <h2 class="text-lg font-semibold text-white">
                    SASKANSA
                </h2>

                <p class="mt-4 max-w-xs text-xs leading-relaxed text-gray-400">
                    Sistem Akademik Sekolah yang membantu mengelola
                    data dan informasi akademik secara terstruktur
                    dalam satu platform.
                </p>

                {{-- Social Media --}}
                <div class="mt-5 flex gap-2">

                    {{-- Facebook --}}
                    <a
                        href="#"
                        aria-label="Facebook"
                        class="flex h-8 w-8 items-center justify-center
                               rounded-full bg-blue-600 text-white
                               transition hover:bg-blue-500"
                    >
                        <x-lucide-facebook class="h-4 w-4" />
                    </a>

                    {{-- Instagram --}}
                    <a
                        href="#"
                        aria-label="Instagram"
                        class="flex h-8 w-8 items-center justify-center
                               rounded-full bg-blue-600 text-white
                               transition hover:bg-blue-500"
                    >
                        <x-lucide-instagram class="h-4 w-4" />
                    </a>

                    {{-- Youtube --}}
                    <a
                        href="#"
                        aria-label="YouTube"
                        class="flex h-8 w-8 items-center justify-center
                               rounded-full bg-blue-600 text-white
                               transition hover:bg-blue-500"
                    >
                        <x-lucide-youtube class="h-4 w-4" />
                    </a>

                    {{-- Email --}}
                    <a
                        href="mailto:saskansa@gmail.com"
                        aria-label="Email"
                        class="flex h-8 w-8 items-center justify-center
                               rounded-full bg-blue-600 text-white
                               transition hover:bg-blue-500"
                    >
                        <x-lucide-mail class="h-4 w-4" />
                    </a>

                </div>
            </div>

            {{-- Quick Links --}}
            <div>

                <h3
                    class="text-xs font-medium tracking-widest
                           text-gray-300"
                >
                    Quick Links
                </h3>

                <ul class="mt-5 space-y-3 text-xs text-gray-400">

                    <li>
                        <a
                            href="{{ route('beranda') }}"
                            class="transition hover:text-white"
                        >
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a
                            href="{{ route('beranda') }}#tentang"
                            class="transition hover:text-white"
                        >
                            Tentang
                        </a>
                    </li>

                    <li>
                        <a
                            href="{{ route('beranda') }}#fitur"
                            class="transition hover:text-white"
                        >
                            Fitur
                        </a>
                    </li>

                    <li>
                        <a
                            href="{{ route('beranda') }}#cara-kerja"
                            class="transition hover:text-white"
                        >
                            Cara Kerja
                        </a>
                    </li>

                    <li>
                        <a
                            href="{{ route('beranda') }}#faq"
                            class="transition hover:text-white"
                        >
                            FAQ
                        </a>
                    </li>

                </ul>
            </div>

            {{-- Fitur Platform --}}
            <div>

                <h3
                    class="text-xs font-medium tracking-widest
                           text-gray-300"
                >
                    Fitur Platform
                </h3>

                <ul class="mt-5 space-y-3 text-xs text-gray-400">

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Data Siswa
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Data Guru
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Akademik
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Jadwal
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Nilai
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Pengumuman
                        </a>
                    </li>

                </ul>
            </div>

            {{-- Kontak --}}
            <div>

                <h3
                    class="text-xs font-medium tracking-widest
                           text-gray-300"
                >
                    Kontak
                </h3>

                <div class="mt-5 space-y-5 text-xs text-gray-400">

                    {{-- Lokasi --}}
                    <div class="flex items-start gap-3">

                        <x-lucide-map-pin
                            class="mt-0.5 h-4 w-4 shrink-0 text-blue-500"
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
                    <div class="flex items-start gap-3">

                        <x-lucide-phone
                            class="mt-0.5 h-4 w-4 shrink-0 text-blue-500"
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
                    <div class="flex items-start gap-3">

                        <x-lucide-mail
                            class="mt-0.5 h-4 w-4 shrink-0 text-blue-500"
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

                <a
                    href="#"
                    class="transition hover:text-white"
                >
                    Privacy Policy
                </a>

                <span>|</span>

                <a
                    href="#"
                    class="transition hover:text-white"
                >
                    Terms of Service
                </a>

            </div>

        </div>

    </div>
</footer>