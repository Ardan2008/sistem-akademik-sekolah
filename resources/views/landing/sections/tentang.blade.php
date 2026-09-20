<section id="tentang" class="bg-[#FDFDFD]">

    <div
        class="mx-auto grid max-w-7xl items-center gap-12
               px-6 py-20 lg:grid-cols-2"
    >

        {{-- Image --}}
        <div class="overflow-hidden rounded-2xl">
            <img
                src="{{ asset('image/about/about-image.webp') }}"
                alt="Aktivitas pembelajaran sekolah"
                class="h-full w-full object-cover"
            >
        </div>


        {{-- Content --}}
        <div>

            {{-- Badge --}}
            <div
                class="mb-5 inline-flex items-center gap-2
                       rounded-full bg-blue-50 px-3 py-1.5
                       text-[10px] font-medium uppercase
                       tracking-wider text-blue-600"
            >
                <span
                    class="h-1.5 w-1.5 rounded-full bg-blue-600"
                ></span>

                Digitalisasi Pendidikan
            </div>


            {{-- Heading --}}
            <h2
                class="max-w-lg text-3xl font-semibold
                       leading-tight tracking-tight text-gray-900
                       sm:text-4xl"
            >
                Mengenal Platform
                <br>
                Administrasi Sekolah yang
                <span class="text-blue-600">
                    Terintegrasi
                </span>
            </h2>


            {{-- Description --}}
            <p
                class="mt-5 max-w-xl text-sm
                       leading-6 text-gray-600"
            >
                SASKANSA dirancang untuk membantu sekolah beradaptasi
                dengan kebutuhan administrasi. Semua informasi akademik
                dikelola dalam satu sistem yang terstruktur, aman, dan
                mudah diakses.
            </p>


            {{-- Statistics --}}
            <div class="mt-8 grid grid-cols-2 gap-6">

                {{-- Data Siswa --}}
                <div class="flex items-center gap-3">

                    <div
                        class="flex h-11 w-11 shrink-0
                               items-center justify-center
                               rounded-xl bg-blue-50
                               text-blue-600"
                    >
                        <x-lucide-users-round class="h-5 w-5" />
                    </div>

                    <div>
                        <p
                            class="text-xl font-semibold
                                   text-gray-900"
                        >
                            2000+
                        </p>

                        <p class="text-xs text-gray-500">
                            Data Siswa
                        </p>
                    </div>

                </div>


                {{-- Guru Aktif --}}
                <div class="flex items-center gap-3">

                    <div
                        class="flex h-11 w-11 shrink-0
                               items-center justify-center
                               rounded-xl bg-blue-50
                               text-blue-600"
                    >
                        <x-lucide-graduation-cap class="h-5 w-5" />
                    </div>

                    <div>
                        <p
                            class="text-xl font-semibold
                                   text-gray-900"
                        >
                            2000+
                        </p>

                        <p class="text-xs text-gray-500">
                            Guru Aktif
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>