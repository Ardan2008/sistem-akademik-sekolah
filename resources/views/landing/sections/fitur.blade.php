@php
$features = [
    [
        'title' => 'Data Siswa',
        'description' => 'Kelola data siswa secara terstruktur dan mudah untuk mendukung kebutuhan akademik sekolah.',
    ],
    [
        'title' => 'Data Guru',
        'description' => 'Kelola informasi guru dengan mudah dan terorganisir dalam satu sistem akademik.',
    ],
    [
        'title' => 'Mata Pelajaran',
        'description' => 'Kelola mata pelajaran untuk membantu pengaturan kegiatan akademik sekolah.',
    ],
    [
        'title' => 'Jadwal Akademik',
        'description' => 'Atur dan kelola jadwal akademik agar kegiatan pembelajaran lebih terorganisir.',
    ],
    [
        'title' => 'Nilai & Akademik',
        'description' => 'Kelola nilai dan informasi akademik siswa secara terpusat dan mudah diakses.',
    ],
    [
        'title' => 'Informasi Sekolah',
        'description' => 'Sajikan berbagai informasi sekolah agar dapat diakses dengan lebih mudah.',
    ],
];
@endphp

<section id="fitur" class="bg-[#FDFDFD] py-16">
    <div class="mx-auto max-w-7xl px-6">

        {{-- Header --}}
        <div class="mb-10 text-center">

            <span class="inline-block rounded-full bg-blue-50 px-3 py-1 text-xs font-medium text-blue-600">
                DIGITALISASI PENDIDIKAN
            </span>

            <h1 class="mt-3 text-4xl font-bold tracking-tight text-blue-700">
                Fitur Utama
            </h1>

            <p class="mt-3 text-sm font-semibold text-gray-800">
                Semua Kebutuhan Akademik dalam Satu Tempat
            </p>

        </div>

        {{-- Feature Cards --}}
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ($features as $feature)
                <div
                    class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">

                    <h2 class="text-base font-semibold text-gray-900">
                        {{ $feature['title'] }}
                    </h2>

                    <p class="mt-3 text-xs leading-relaxed text-gray-500">
                        {{ $feature['description'] }}
                    </p>

                    <a
                        href="#"
                        class="mt-4 inline-block text-xs font-medium text-blue-600 transition hover:text-blue-700">
                        Learn More
                    </a>

                </div>
            @endforeach

        </div>

    </div>
</section>
