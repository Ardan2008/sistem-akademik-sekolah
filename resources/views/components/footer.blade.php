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
                    The purpose of a FAQ is generally to provide information
                    on frequent questions or concerns.
                </p>

                {{-- Social Media --}}
                <div class="mt-5 flex gap-2">
                    <a href="#"
                       class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs font-semibold transition hover:bg-blue-500">
                        f
                    </a>

                    <a href="#"
                       class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs font-semibold transition hover:bg-blue-500">
                        f
                    </a>

                    <a href="#"
                       class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs font-semibold transition hover:bg-blue-500">
                        ◎
                    </a>

                    <a href="#"
                       class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs font-semibold transition hover:bg-blue-500">
                        ●
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-xs font-medium tracking-widest text-gray-300">
                    Quick Links
                </h3>

                <ul class="mt-5 space-y-3 text-xs text-gray-400">

                    <li>
                        <a href="{{ route('beranda') }}"
                           class="transition hover:text-white">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('beranda') }}#tentang"
                           class="transition hover:text-white">
                            Tentang
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('beranda') }}#fitur"
                           class="transition hover:text-white">
                            Fitur
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('beranda') }}#cara-kerja"
                           class="transition hover:text-white">
                            Cara Kerja
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('beranda') }}#faq"
                           class="transition hover:text-white">
                            FAQ
                        </a>
                    </li>

                </ul>
            </div>

            {{-- Fitur Platform --}}
            <div>
                <h3 class="text-xs font-medium tracking-widest text-gray-300">
                    Fitur Platform
                </h3>

                <ul class="mt-5 space-y-3 text-xs text-gray-400">
                    <li>Dashboard</li>
                    <li>Siswa</li>
                    <li>Guru</li>
                    <li>Akademik</li>
                    <li>Jadwal</li>
                    <li>Nilai</li>
                    <li>Pengumuman</li>
                </ul>
            </div>

            {{-- Kontak --}}
            <div>
                <h3 class="text-xs font-medium tracking-widest text-gray-300">
                    Kontak
                </h3>

                <div class="mt-5 space-y-5 text-xs text-gray-400">

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

                    <div>
                        <p class="font-medium text-white">
                            Telepon
                        </p>

                        <p class="mt-2">
                            +62 815-7585-8150
                        </p>
                    </div>

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

        {{-- Bottom Footer --}}
        <div class="mt-10 flex flex-col gap-4 border-t border-gray-800 pt-5 text-[10px] text-gray-400 sm:flex-row sm:items-center sm:justify-between">

            <p>
                © {{ date('Y') }} SASKANSA. All rights reserved.
            </p>

            <div class="flex gap-2">
                <a href="#"
                   class="transition hover:text-white">
                    Privacy Policy
                </a>

                <span>|</span>

                <a href="#"
                   class="transition hover:text-white">
                    Terms of Service
                </a>
            </div>

        </div>

    </div>

</footer>