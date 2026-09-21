@php

$features = [
    [
        'title' => 'Data Siswa',
        'description' => 'Kelola data siswa secara terstruktur dan mudah untuk mendukung kebutuhan akademik sekolah.',
        'icon' => 'users-round',
        'detail' => 'Modul Data Siswa menjadi pusat penyimpanan seluruh informasi peserta didik — mulai dari biodata, riwayat kelas, hingga dokumen pendukung. Semua data tersimpan rapi dalam satu sistem sehingga staf tata usaha maupun wali kelas dapat mengaksesnya kapan saja tanpa perlu berkas fisik.',
        'points' => [
            'Biodata lengkap: identitas, orang tua/wali, dan kontak darurat',
            'Riwayat perpindahan kelas dan kenaikan tingkat otomatis tercatat',
            'Status siswa (aktif, pindah, lulus) mudah diperbarui',
            'Pencarian & filter cepat berdasarkan kelas, angkatan, atau nama',
        ],
    ],
    [
        'title' => 'Data Guru',
        'description' => 'Kelola informasi guru dengan mudah dan terorganisir dalam satu sistem akademik.',
        'icon' => 'user-round',
        'detail' => 'Seluruh informasi tenaga pengajar—dari data pribadi, mata pelajaran yang diampu, hingga jadwal mengajar—terpusat dalam satu tempat. Memudahkan pihak sekolah memantau beban mengajar dan penugasan guru secara menyeluruh.',
        'points' => [
            'Biodata guru beserta status kepegawaian',
            'Daftar mata pelajaran dan kelas yang diampu',
            'Jadwal mengajar otomatis tersinkron dengan Jadwal Akademik',
            'Riwayat penugasan dari tahun ajaran sebelumnya',
        ],
    ],
    [
        'title' => 'Mata Pelajaran',
        'description' => 'Kelola mata pelajaran untuk membantu pengaturan kegiatan akademik sekolah.',
        'icon' => 'book-open',
        'detail' => 'Atur struktur kurikulum dengan mudah, mulai dari penamaan mata pelajaran, tingkat kelas yang bersangkutan, hingga guru pengampunya. Perubahan kurikulum antar tahun ajaran juga dapat dikelola tanpa mengganggu data yang sudah ada.',
        'points' => [
            'Pengelompokan mata pelajaran per tingkat & jurusan',
            'Penentuan guru pengampu untuk tiap mata pelajaran',
            'Pengaturan bobot nilai sesuai kurikulum sekolah',
            'Riwayat perubahan kurikulum antar tahun ajaran',
        ],
    ],
    [
        'title' => 'Jadwal Akademik',
        'description' => 'Atur dan kelola jadwal akademik agar kegiatan pembelajaran lebih terorganisir.',
        'icon' => 'calendar-days',
        'detail' => 'Susun jadwal pelajaran untuk setiap kelas dengan tampilan kalender yang jelas. Sistem membantu mendeteksi potensi bentrok jadwal antar guru maupun ruang kelas sehingga proses penyusunan menjadi lebih cepat dan minim kesalahan.',
        'points' => [
            'Penyusunan jadwal per kelas dan per guru',
            'Deteksi otomatis jika ada jadwal yang bentrok',
            'Kalender akademik untuk hari libur dan agenda sekolah',
            'Notifikasi perubahan jadwal ke guru terkait',
        ],
    ],
    [
        'title' => 'Nilai & Akademik',
        'description' => 'Kelola nilai dan informasi akademik siswa secara terpusat dan mudah diakses.',
        'icon' => 'graduation-cap',
        'detail' => 'Guru dapat menginput nilai tugas, ujian, hingga nilai akhir langsung ke sistem. Rekap nilai per semester dan rapor otomatis tersusun, membantu wali kelas dan orang tua memantau perkembangan akademik siswa secara real-time.',
        'points' => [
            'Input nilai per mata pelajaran dan jenis penilaian',
            'Rapor otomatis tersusun tiap akhir semester',
            'Rekap nilai dan rata-rata kelas yang mudah dibaca',
            'Grafik perkembangan akademik tiap siswa',
        ],
    ],
    [
        'title' => 'Informasi Sekolah',
        'description' => 'Sajikan berbagai informasi sekolah agar dapat diakses dengan lebih mudah.',
        'icon' => 'school',
        'detail' => 'Tampilkan profil, pengumuman, dan kegiatan sekolah dalam satu tempat yang mudah diakses siswa, guru, maupun orang tua. Informasi penting tidak lagi tercecer di berbagai media terpisah.',
        'points' => [
            'Profil dan visi-misi sekolah',
            'Papan pengumuman resmi yang selalu terbarui',
            'Galeri kegiatan dan prestasi sekolah',
            'Informasi kontak dan lokasi sekolah',
        ],
    ],
];

@endphp

<style>
    /* Scroll Reveal */
    #fitur.reveal-ready [data-reveal] {
        opacity: 0;
        transform: translateY(28px);
        filter: blur(6px);
        transition:
            opacity .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            transform .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            filter .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s);
        will-change: opacity, transform;
    }

    #fitur.reveal-ready [data-reveal].is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }

    /* Jeda kartu mengikuti jumlah kolom:
       1 kolom  -> tanpa jeda
       2 kolom  -> --d2 (kiri ke kanan per 2 kartu)
       3 kolom  -> --d3 (kiri ke kanan per 3 kartu) */
    #fitur .fitur-item {
        --d: 0s;
    }

    @media (min-width: 640px) {
        #fitur .fitur-item { --d: var(--d2, 0s); }
    }

    @media (min-width: 1024px) {
        #fitur .fitur-item { --d: var(--d3, 0s); }
    }

    /* Badge Dot Pulse */
    @keyframes fitur-pulse {
        0%   { transform: scale(1);   opacity: .6; }
        100% { transform: scale(3.2); opacity: 0; }
    }

    #fitur .fitur-dot::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        background: currentColor;
        animation: fitur-pulse 1.8s ease-out infinite;
    }

    /* Card Spotlight */
    #fitur .fitur-spotlight {
        background: radial-gradient(
            220px circle at var(--mx, 50%) var(--my, 50%),
            rgba(37, 99, 235, .09),
            transparent 70%
        );
    }

    /* Icon Pop */
    @keyframes fitur-icon-pop {
        0%   { transform: scale(1)   rotate(0); }
        40%  { transform: scale(1.3) rotate(-10deg); }
        70%  { transform: scale(.92) rotate(6deg); }
        100% { transform: scale(1)   rotate(0); }
    }

    /* Link Underline */
    #fitur .fitur-link-line {
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .35s cubic-bezier(.22, 1, .36, 1);
    }

    #fitur .fitur-link:focus-visible .fitur-link-line {
        transform: scaleX(1);
    }

    /* Di layar sentuh garis bawah langsung terlihat sebagai petunjuk bisa di-tap */
    @media (hover: none) {
        #fitur .fitur-link-line {
            transform: scaleX(1);
            opacity: .35;
        }
    }

    /* Efek hover hanya untuk perangkat yang punya hover */
    @media (hover: hover) {
        #fitur .fitur-card:hover .fitur-icon svg {
            animation: fitur-icon-pop .6s ease-in-out;
        }

        #fitur .fitur-link:hover .fitur-link-line {
            transform: scaleX(1);
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #fitur.reveal-ready [data-reveal] {
            opacity: 1;
            transform: none;
            filter: none;
            transition: none;
        }

        #fitur .fitur-dot::after,
        #fitur .fitur-card:hover .fitur-icon svg {
            animation: none;
        }
    }

    /* ---------- Popup Detail Fitur ---------- */
    #fitur-modal {
        opacity: 0;
        pointer-events: none;
    }

    #fitur-modal[data-open="true"] {
        opacity: 1;
        pointer-events: auto;
    }

    #fitur-modal .fitur-modal-backdrop {
        opacity: 0;
        transition: opacity .35s cubic-bezier(.22, 1, .36, 1);
    }

    #fitur-modal[data-open="true"] .fitur-modal-backdrop {
        opacity: 1;
    }

    #fitur-modal .fitur-modal-panel {
        opacity: 0;
        transform: translateY(28px) scale(.97);
        transition:
            opacity .35s cubic-bezier(.22, 1, .36, 1),
            transform .35s cubic-bezier(.22, 1, .36, 1);
    }

    #fitur-modal[data-open="true"] .fitur-modal-panel {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    /* Transisi opacity wrapper sendiri (untuk fade in/out halus) */
    #fitur-modal {
        transition: opacity .35s cubic-bezier(.22, 1, .36, 1);
    }

    @media (prefers-reduced-motion: reduce) {
        #fitur-modal,
        #fitur-modal .fitur-modal-backdrop,
        #fitur-modal .fitur-modal-panel {
            transition: none;
        }
    }
</style>

<section id="fitur" class="scroll-mt-16 bg-[#FDFDFD] py-14 sm:py-16 lg:py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6">

        {{-- Header --}}
        <div class="mx-auto mb-8 max-w-2xl text-center sm:mb-10">

            <div data-reveal style="--d: 0s">
                <div
                    class="inline-flex items-center gap-2
                           rounded-full bg-blue-50 px-3 py-1.5
                           text-[10px] font-medium uppercase
                           tracking-wider text-blue-600"
                >
                    <span
                        class="fitur-dot relative h-1.5 w-1.5
                               rounded-full bg-blue-600 text-blue-600"
                    ></span>

                    Digitalisasi Pendidikan
                </div>
            </div>

            <h2
                data-reveal
                style="--d: .1s"
                class="mt-3 text-[1.75rem] font-semibold
                       tracking-tight text-gray-900
                       sm:text-4xl"
            >
                Fitur Utama
            </h2>

            <p
                data-reveal
                style="--d: .2s"
                class="mt-3 text-[15px] font-medium text-gray-500 sm:text-sm"
            >
                Semua Kebutuhan Akademik dalam Satu Tempat
            </p>

        </div>


        {{-- Feature Cards --}}
        <div
            class="grid grid-cols-1 gap-4
                   sm:grid-cols-2 sm:gap-5
                   lg:grid-cols-3"
        >

            @foreach ($features as $feature)

                {{-- Delay berdasarkan kolom, jadi tiap baris muncul kiri ke kanan --}}
                <div
                    data-reveal
                    style="--d2: {{ ($loop->index % 2) * .12 }}s; --d3: {{ ($loop->index % 3) * .12 }}s"
                    class="fitur-item h-full"
                >

                    <div
                        class="fitur-card group relative h-full
                               overflow-hidden rounded-2xl border
                               border-gray-100 bg-white p-5 shadow-sm
                               transition-[transform,box-shadow]
                               duration-300 ease-out
                               hover:-translate-y-1.5 hover:shadow-xl
                               hover:shadow-gray-200/70
                               active:scale-[0.99]
                               sm:p-6"
                    >

                        {{-- Spotlight --}}
                        <span
                            aria-hidden="true"
                            class="fitur-spotlight pointer-events-none
                                   absolute inset-0 opacity-0
                                   transition-opacity duration-300
                                   group-hover:opacity-100"
                        ></span>

                        {{-- Corner Glow --}}
                        <span
                            aria-hidden="true"
                            class="pointer-events-none absolute -right-8
                                   -top-8 h-24 w-24 scale-50 rounded-full
                                   bg-blue-100/70 opacity-0 blur-2xl
                                   transition-all duration-500
                                   group-hover:scale-125
                                   group-hover:opacity-100"
                        ></span>

                        {{-- Mobile: ikon di kiri, teks di kanan. Tablet ke atas: ikon di atas teks. --}}
                        <div class="relative flex items-start gap-4 sm:block">

                            {{-- Icon --}}
                            <div
                                class="fitur-icon flex h-11 w-11 shrink-0
                                       items-center justify-center rounded-xl
                                       bg-blue-50 text-blue-600
                                       transition-all duration-500
                                       ease-[cubic-bezier(.34,1.56,.64,1)]
                                       group-hover:-rotate-6
                                       group-hover:scale-110
                                       group-hover:bg-blue-600
                                       group-hover:text-white
                                       group-hover:shadow-lg
                                       group-hover:shadow-blue-600/30"
                            >
                                @switch($feature['icon'])

                                    @case('users-round')
                                        <x-lucide-users-round class="h-5 w-5" />
                                        @break

                                    @case('user-round')
                                        <x-lucide-user-round class="h-5 w-5" />
                                        @break

                                    @case('book-open')
                                        <x-lucide-book-open class="h-5 w-5" />
                                        @break

                                    @case('calendar-days')
                                        <x-lucide-calendar-days class="h-5 w-5" />
                                        @break

                                    @case('graduation-cap')
                                        <x-lucide-graduation-cap class="h-5 w-5" />
                                        @break

                                    @case('school')
                                        <x-lucide-school class="h-5 w-5" />
                                        @break

                                @endswitch
                            </div>


                            {{-- Content --}}
                            <div class="min-w-0 flex-1">

                                <h3 class="text-base font-semibold text-gray-900 sm:mt-5">
                                    {{ $feature['title'] }}
                                </h3>

                                <p class="mt-2 text-[13px] leading-relaxed text-gray-500
                                          sm:mt-3 sm:text-xs">
                                    {{ $feature['description'] }}
                                </p>


                                {{-- Tombol pembuka popup detail --}}
                                <button
                                    type="button"
                                    data-feature-open
                                    data-title="{{ $feature['title'] }}"
                                    class="fitur-link mt-3 inline-flex cursor-pointer items-center
                                           gap-1 border-0 bg-transparent p-0 py-1 text-left text-[13px]
                                           font-medium text-blue-600 transition
                                           hover:text-blue-700
                                           focus-visible:outline focus-visible:outline-2
                                           focus-visible:outline-offset-2
                                           focus-visible:outline-blue-500
                                           sm:mt-4 sm:py-0 sm:text-xs"
                                >
                                    <span class="relative">
                                        Pelajari Selengkapnya

                                        <span
                                            aria-hidden="true"
                                            class="fitur-link-line absolute
                                                   -bottom-0.5 left-0 h-px w-full
                                                   bg-current"
                                        ></span>
                                    </span>

                                    <x-lucide-arrow-right
                                        class="h-3.5 w-3.5
                                               transition-transform duration-200
                                               group-hover:translate-x-1"
                                    />
                                </button>

                                {{-- Template konten lengkap untuk popup (tidak dirender langsung) --}}
                                <template data-feature-panel>
                                    <div class="mb-5 flex items-center gap-4">
                                        <div
                                            class="flex h-12 w-12 shrink-0 items-center justify-center
                                                   rounded-xl bg-blue-50 text-blue-600"
                                        >
                                            @switch($feature['icon'])

                                                @case('users-round')
                                                    <x-lucide-users-round class="h-6 w-6" />
                                                    @break

                                                @case('user-round')
                                                    <x-lucide-user-round class="h-6 w-6" />
                                                    @break

                                                @case('book-open')
                                                    <x-lucide-book-open class="h-6 w-6" />
                                                    @break

                                                @case('calendar-days')
                                                    <x-lucide-calendar-days class="h-6 w-6" />
                                                    @break

                                                @case('graduation-cap')
                                                    <x-lucide-graduation-cap class="h-6 w-6" />
                                                    @break

                                                @case('school')
                                                    <x-lucide-school class="h-6 w-6" />
                                                    @break

                                            @endswitch
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-medium uppercase tracking-wider text-blue-600">
                                                Fitur Unggulan
                                            </p>
                                            <h3 class="text-lg font-semibold text-gray-900">
                                                {{ $feature['title'] }}
                                            </h3>
                                        </div>
                                    </div>

                                    <p class="text-sm leading-relaxed text-gray-600">
                                        {{ $feature['detail'] }}
                                    </p>

                                    @if (!empty($feature['points']))
                                        <ul class="mt-5 space-y-2.5">
                                            @foreach ($feature['points'] as $point)
                                                <li class="flex items-start gap-2.5 text-sm text-gray-700">
                                                    <x-lucide-check class="mt-0.5 h-4 w-4 shrink-0 text-blue-600" />
                                                    <span>{{ $point }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </template>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

    {{-- Popup Detail Fitur --}}
    <div
        id="fitur-modal"
        data-open="false"
        aria-hidden="true"
        inert
        class="fixed inset-0 z-[60] flex items-end justify-center sm:items-center sm:p-4"
    >
        <div
            data-modal-backdrop
            aria-hidden="true"
            class="fitur-modal-backdrop absolute inset-0 bg-gray-900/40 backdrop-blur-sm"
        ></div>

        <div
            data-modal-panel
            role="dialog"
            aria-modal="true"
            class="fitur-modal-panel relative z-10 max-h-[85vh] w-full overflow-y-auto
                   rounded-t-3xl bg-white p-6 shadow-2xl
                   sm:max-w-lg sm:rounded-3xl sm:p-8"
        >
            <button
                type="button"
                data-modal-close
                aria-label="Tutup"
                class="absolute right-4 top-4 flex h-9 w-9 items-center justify-center
                       rounded-full text-gray-400 transition hover:bg-gray-100 hover:text-gray-700
                       focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-500"
            >
                <svg class="h-4.5 w-4.5" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                     stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 5l10 10M15 5L5 15" />
                </svg>
            </button>

            <div data-modal-content></div>
        </div>
    </div>

    {{-- Reveal + Card Spotlight + Popup --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const section = document.getElementById('fitur');

            /* Scroll Reveal */
            if ('IntersectionObserver' in window) {
                section.classList.add('reveal-ready');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

                section
                    .querySelectorAll('[data-reveal]')
                    .forEach((el) => observer.observe(el));
            }

            /* Spotlight mengikuti kursor */
            const canHover = window.matchMedia('(hover: hover)').matches;
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (canHover && !reduceMotion) {
                section.querySelectorAll('.fitur-card').forEach((card) => {
                    card.addEventListener('mousemove', (e) => {
                        const rect = card.getBoundingClientRect();
                        card.style.setProperty('--mx', `${e.clientX - rect.left}px`);
                        card.style.setProperty('--my', `${e.clientY - rect.top}px`);
                    });
                });
            }

            /* ---------- Popup Detail Fitur ---------- */
            const modal      = document.getElementById('fitur-modal');
            const panel      = modal.querySelector('[data-modal-panel]');
            const contentBox = modal.querySelector('[data-modal-content]');
            const closeBtn   = modal.querySelector('[data-modal-close]');
            const backdrop   = modal.querySelector('[data-modal-backdrop]');

            let lastTrigger = null;

            // Kunci scroll TANPA memindah posisi scroll (position:fixed + scrollTo
            // bisa memicu animasi scroll kalau situs pakai scroll-behavior: smooth).
            // Cukup overflow:hidden, dan kompensasi lebar scrollbar agar layout
            // tidak bergeser saat modal buka/tutup.
            const lockScroll = () => {
                const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;
                document.body.style.overflow = 'hidden';
                if (scrollBarWidth > 0) {
                    document.body.style.paddingRight = `${scrollBarWidth}px`;
                }
            };

            const unlockScroll = () => {
                document.body.style.overflow = '';
                document.body.style.paddingRight = '';
            };

            const onKeydown = (e) => {
                if (e.key === 'Escape') closeModal();
            };

            const openModal = (trigger) => {
                const card = trigger.closest('.fitur-item');
                const template = card?.querySelector('template[data-feature-panel]');
                if (!template) return;

                contentBox.innerHTML = '';
                contentBox.appendChild(template.content.cloneNode(true));
                panel.setAttribute('aria-label', trigger.dataset.title || 'Detail fitur');

                lastTrigger = trigger;

                modal.removeAttribute('inert');
                modal.setAttribute('aria-hidden', 'false');
                lockScroll();

                // Set data-open sedikit setelah render supaya transisi CSS ter-trigger
                requestAnimationFrame(() => {
                    modal.dataset.open = 'true';
                    requestAnimationFrame(() => closeBtn?.focus({ preventScroll: true }));
                });

                document.addEventListener('keydown', onKeydown);
            };

            const closeModal = () => {
                if (modal.dataset.open !== 'true') return;

                modal.dataset.open = 'false';
                modal.setAttribute('aria-hidden', 'true');
                unlockScroll();
                document.removeEventListener('keydown', onKeydown);

                const finish = () => {
                    modal.setAttribute('inert', '');
                    lastTrigger?.focus({ preventScroll: true });
                };

                if (reduceMotion) {
                    finish();
                } else {
                    modal.addEventListener('transitionend', finish, { once: true });
                    // Jaring pengaman jika transitionend tidak terpicu
                    setTimeout(finish, 400);
                }
            };

            document.querySelectorAll('[data-feature-open]').forEach((btn) => {
                btn.addEventListener('click', () => openModal(btn));
            });

            closeBtn?.addEventListener('click', closeModal);
            backdrop?.addEventListener('click', closeModal);
        });
    </script>

</section>