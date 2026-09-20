<section id="faq" class="bg-[#FDFDFD]">
    <div class="mx-auto max-w-7xl px-6 py-20">

        <div class="grid items-start gap-10 lg:grid-cols-2">

            {{-- FAQ Content --}}
            <div>

                {{-- Badge --}}
                <div class="mb-5 inline-flex items-center gap-2 rounded-full bg-blue-50 px-3 py-1.5 text-[10px] font-medium uppercase tracking-wider text-blue-600">
                    <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                    Digitalisasi Pendidikan
                </div>

                {{-- Heading --}}
                <h2 class="max-w-md text-4xl font-medium leading-tight tracking-tight text-gray-900">
                    Frequently Asked
                    <span class="block">Questions</span>
                </h2>

                {{-- FAQ List --}}
                <div class="mt-10 space-y-3">

                    {{-- FAQ 1 --}}
                    <details class="group rounded-2xl border border-gray-100 bg-white">
                        <summary class="flex cursor-pointer list-none items-center justify-between px-5 py-5 text-xs font-semibold text-gray-900">
                            <span>Apa itu SASKANSA?</span>

                            <span class="ml-4 text-gray-500 transition-transform duration-200 group-open:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m6 9 6 6 6-6" />
                                </svg>
                            </span>
                        </summary>

                        <div class="px-5 pb-5">
                            <p class="text-[11px] leading-5 text-gray-500">
                                SASKANSA adalah Sistem Akademik Sekolah berbasis
                                portal internal yang membantu sekolah mengelola
                                informasi akademik secara terstruktur dan terintegrasi.
                            </p>
                        </div>
                    </details>


                    {{-- FAQ 2 --}}
                    <details class="group rounded-2xl border border-gray-100 bg-white">
                        <summary class="flex cursor-pointer list-none items-center justify-between px-5 py-5 text-xs font-semibold text-gray-900">
                            <span>
                                Bagaimana SASKANSA membantu kegiatan
                                belajar mengajar?
                            </span>

                            <span class="ml-4 shrink-0 text-gray-500 transition-transform duration-200 group-open:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m6 9 6 6 6-6" />
                                </svg>
                            </span>
                        </summary>

                        <div class="px-5 pb-5">
                            <p class="text-[11px] leading-5 text-gray-500">
                                SASKANSA membantu mengelola berbagai kebutuhan
                                akademik seperti data siswa, mata pelajaran,
                                jadwal, nilai, tugas, dan informasi akademik lainnya.
                            </p>
                        </div>
                    </details>


                    {{-- FAQ 3 --}}
                    <details class="group rounded-2xl border border-gray-100 bg-white">
                        <summary class="flex cursor-pointer list-none items-center justify-between px-5 py-5 text-xs font-semibold text-gray-900">
                            <span>
                                Siapa saja yang dapat menggunakan
                                SASKANSA?
                            </span>

                            <span class="ml-4 shrink-0 text-gray-500 transition-transform duration-200 group-open:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m6 9 6 6 6-6" />
                                </svg>
                            </span>
                        </summary>

                        <div class="px-5 pb-5">
                            <p class="text-[11px] leading-5 text-gray-500">
                                SASKANSA dirancang untuk digunakan oleh tiga
                                role utama, yaitu Admin, Guru, dan Siswa,
                                dengan akses sesuai dengan hak masing-masing.
                            </p>
                        </div>
                    </details>


                    {{-- FAQ 4 --}}
                    <details class="group rounded-2xl border border-gray-100 bg-white">
                        <summary class="flex cursor-pointer list-none items-center justify-between px-5 py-5 text-xs font-semibold text-gray-900">
                            <span>
                                Bagaimana cara mendapatkan akun
                                untuk login?
                            </span>

                            <span class="ml-4 shrink-0 text-gray-500 transition-transform duration-200 group-open:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m6 9 6 6 6-6" />
                                </svg>
                            </span>
                        </summary>

                        <div class="px-5 pb-5">
                            <p class="text-[11px] leading-5 text-gray-500">
                                Akun diberikan sesuai dengan role pengguna.
                                Setelah login pertama, pengguna tertentu
                                dapat diarahkan untuk membuat password baru.
                            </p>
                        </div>
                    </details>

                </div>

            </div>


            {{-- FAQ Illustration --}}
            <div class="lg:pt-28">

                <div class="overflow-hidden rounded-2xl bg-white">

                    <img
                        src="{{ asset('image/faq/faq-ilustrasi.webp') }}"
                        alt="Ilustrasi bantuan dan FAQ SASKANSA"
                        class="h-auto w-full object-cover"
                    >

                    {{-- Help Content --}}
                    <div class="p-6">

                        <h3 class="text-base font-medium text-gray-900">
                            Kendala Akses atau Lupa Password?
                        </h3>

                        <p class="mt-2 text-xs leading-5 text-gray-500">
                            Tim IT Sekolah siap membantu jika Anda mengalami
                            masalah saat login, lupa kata sandi, atau
                            memerlukan kendala teknis lainnya di portal SASKANSA.
                        </p>

                        <a href="#"
                        class="mt-4 inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 text-[10px] font-medium text-white transition hover:bg-blue-700">
                            Hubungi Tim IT Sekolah
                            <span class="text-sm">→</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
