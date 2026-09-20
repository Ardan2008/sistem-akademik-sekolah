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


<section id="fitur" class="bg-[#FDFDFD] py-16">

    <div class="mx-auto max-w-7xl px-6">

        {{-- Header --}}
        <div class="mb-10 text-center">

            <div
                class="inline-flex items-center gap-2
                       rounded-full bg-blue-50 px-3 py-1.5
                       text-[10px] font-medium uppercase
                       tracking-wider text-blue-600"
            >
                <span
                    class="h-1.5 w-1.5 rounded-full bg-blue-600"
                ></span>

                Digitalisasi Pendidikan
            </div>

            <h1
                class="mt-3 text-3xl font-semibold
                       tracking-tight text-gray-900
                       sm:text-4xl"
            >
                Fitur Utama
            </h1>

            <p
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

                <div
                    class="group rounded-2xl border border-gray-100
                           bg-white p-6 shadow-sm
                           transition duration-300
                           hover:-translate-y-1
                           hover:border-blue-100
                           hover:shadow-md"
                >

                    {{-- Icon --}}
                    <div
                        class="flex h-11 w-11 items-center
                               justify-center rounded-xl
                               bg-blue-50 text-blue-600
                               transition duration-300
                               group-hover:bg-blue-600
                               group-hover:text-white"
                    >
                        @switch($feature['icon'])

                            @case('users-round')
                                <x-lucide-users-round
                                    class="h-5 w-5"
                                />
                                @break

                            @case('user-round')
                                <x-lucide-user-round
                                    class="h-5 w-5"
                                />
                                @break

                            @case('book-open')
                                <x-lucide-book-open
                                    class="h-5 w-5"
                                />
                                @break

                            @case('calendar-days')
                                <x-lucide-calendar-days
                                    class="h-5 w-5"
                                />
                                @break

                            @case('graduation-cap')
                                <x-lucide-graduation-cap
                                    class="h-5 w-5"
                                />
                                @break

                            @case('school')
                                <x-lucide-school
                                    class="h-5 w-5"
                                />
                                @break

                        @endswitch
                    </div>


                    {{-- Content --}}
                    <h2
                        class="mt-5 text-base font-semibold
                               text-gray-900"
                    >
                        {{ $feature['title'] }}
                    </h2>

                    <p
                        class="mt-3 text-xs leading-relaxed
                               text-gray-500"
                    >
                        {{ $feature['description'] }}
                    </p>


                    {{-- Link --}}
                    <a
                        href="#"
                        class="mt-4 inline-flex items-center gap-1
                               text-xs font-medium text-blue-600
                               transition hover:text-blue-700"
                    >
                        <span>Pelajari Selengkapnya</span>

                        <x-lucide-arrow-right
                            class="h-3.5 w-3.5
                                   transition-transform duration-200
                                   group-hover:translate-x-1"
                        />
                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>