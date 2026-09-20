@php
    $faqs = [
        [
            'q' => 'Apa itu SASKANSA?',
            'a' => 'SASKANSA adalah Sistem Akademik Sekolah berbasis portal internal yang membantu sekolah mengelola informasi akademik secara terstruktur dan terintegrasi.',
        ],
        [
            'q' => 'Bagaimana SASKANSA membantu kegiatan belajar mengajar?',
            'a' => 'SASKANSA membantu mengelola berbagai kebutuhan akademik seperti data siswa, mata pelajaran, jadwal, nilai, tugas, dan informasi akademik lainnya.',
        ],
        [
            'q' => 'Siapa saja yang dapat menggunakan SASKANSA?',
            'a' => 'SASKANSA dirancang untuk digunakan oleh tiga role utama, yaitu Admin, Guru, dan Siswa, dengan akses sesuai dengan hak masing-masing.',
        ],
        [
            'q' => 'Bagaimana cara mendapatkan akun untuk login?',
            'a' => 'Akun diberikan sesuai dengan role pengguna. Setelah login pertama, pengguna tertentu dapat diarahkan untuk membuat password baru.',
        ],
    ];
@endphp

<section id="faq" class="bg-[#FDFDFD]">

    <div class="mx-auto max-w-7xl px-6 py-20">

        <div class="grid items-start gap-10 lg:grid-cols-2">

            {{-- FAQ Content --}}
            <div>

                {{-- Badge --}}
                <div
                    class="mb-5 inline-flex items-center gap-2
                           rounded-full bg-blue-50 px-3 py-1.5
                           text-[10px] font-medium uppercase
                           tracking-wider text-blue-600"
                >
                    <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>

                    Digitalisasi Pendidikan
                </div>

                {{-- Heading --}}
                <h2
                    class="max-w-md text-3xl font-semibold
                           leading-tight tracking-tight
                           text-gray-900 sm:text-4xl"
                >
                    Frequently Asked
                    <span class="block">
                        Questions
                    </span>
                </h2>

                {{-- FAQ List --}}
                <div class="mt-10 space-y-3">

                    @foreach ($faqs as $faq)
                        <details
                            data-faq
                            data-state="closed"
                            class="group overflow-hidden rounded-2xl
                                   border border-gray-100 bg-white
                                   shadow-sm transition-shadow duration-300
                                   hover:shadow-md"
                        >

                            <summary
                                class="flex cursor-pointer list-none
                                       items-center justify-between
                                       px-5 py-5 text-xs font-semibold
                                       text-gray-900 outline-none
                                       focus:outline-none
                                       [&::-webkit-details-marker]:hidden"
                            >
                                <span>{{ $faq['q'] }}</span>

                                <span
                                    class="ml-4 flex h-7 w-7 shrink-0
                                           items-center justify-center
                                           rounded-full bg-gray-50
                                           text-gray-400
                                           transition-all duration-300
                                           group-data-[state=open]:bg-blue-50
                                           group-data-[state=open]:text-blue-600"
                                >
                                    <x-lucide-chevron-down
                                        class="h-4 w-4
                                               transition-transform
                                               duration-300
                                               ease-out
                                               group-data-[state=open]:rotate-180"
                                    />
                                </span>
                            </summary>

                            {{-- Animated Content --}}
                            <div data-faq-content class="overflow-hidden">
                                <div class="px-5 pb-5">
                                    <p class="text-[11px] leading-5 text-gray-500">
                                        {{ $faq['a'] }}
                                    </p>
                                </div>
                            </div>

                        </details>
                    @endforeach

                </div>
            </div>


            {{-- FAQ Illustration --}}
            <div class="self-start">

                <div
                    class="overflow-hidden rounded-2xl
                           border border-gray-100 bg-white
                           shadow-sm"
                >

                    <img
                        src="{{ asset('image/faq/faq-ilustrasi.webp') }}"
                        alt="Ilustrasi bantuan dan FAQ SASKANSA"
                        class="h-auto w-full object-cover"
                    >

                    {{-- Help Content --}}
                    <div class="p-6">

                        <h3 class="text-base font-semibold text-gray-900">
                            Kendala Akses atau Lupa Password?
                        </h3>

                        <p class="mt-2 text-xs leading-5 text-gray-500">
                            Tim IT Sekolah siap membantu jika Anda
                            mengalami masalah saat login, lupa kata
                            sandi, atau memerlukan bantuan teknis
                            lainnya di portal SASKANSA.
                        </p>

                        <a
                            href="#"
                            class="group mt-4 inline-flex
                                   items-center gap-2 rounded-lg
                                   bg-blue-600 px-4 py-2.5
                                   text-[10px] font-medium
                                   text-white transition
                                   hover:bg-blue-700"
                        >
                            <x-lucide-headset class="h-4 w-4" />

                            <span>Hubungi Tim IT Sekolah</span>

                            <x-lucide-arrow-right
                                class="h-3.5 w-3.5
                                       transition-transform
                                       duration-200
                                       group-hover:translate-x-1"
                            />
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </div>

    {{-- FAQ Smooth Accordion Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const DURATION = 300;
            const EASING = 'ease-in-out';
            const ACCORDION = false; // ubah ke true agar hanya satu FAQ terbuka
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            document.querySelectorAll('#faq [data-faq]').forEach((details) => {
                const summary = details.querySelector('summary');
                const content = details.querySelector('[data-faq-content]');
                let animation = null;

                const animate = (from, to, onFinish) => {
                    if (animation) animation.cancel();

                    if (reduceMotion) {
                        onFinish();
                        return;
                    }

                    animation = content.animate(
                        { height: [`${from}px`, `${to}px`] },
                        { duration: DURATION, easing: EASING }
                    );

                    animation.onfinish = () => {
                        animation = null;
                        onFinish();
                    };
                    animation.oncancel = () => (animation = null);
                };

                const open = () => {
                    if (ACCORDION) {
                        document
                            .querySelectorAll('#faq [data-faq][data-state="open"]')
                            .forEach((other) => {
                                if (other !== details) other.querySelector('summary').click();
                            });
                    }

                    const from = content.offsetHeight; // 0 jika sedang tertutup
                    details.open = true;
                    details.dataset.state = 'open';

                    animate(from, content.scrollHeight, () => {});
                };

                const close = () => {
                    const from = content.offsetHeight;
                    details.dataset.state = 'closed';

                    animate(from, 0, () => {
                        details.open = false;
                    });
                };

                summary.addEventListener('click', (e) => {
                    e.preventDefault();

                    if (details.dataset.state === 'open') {
                        close();
                    } else {
                        open();
                    }
                });
            });
        });
    </script>

</section>