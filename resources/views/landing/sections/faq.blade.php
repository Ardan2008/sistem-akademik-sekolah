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

<style>
    /* Scroll Reveal */
    #faq.reveal-ready [data-reveal] {
        opacity: 0;
        transform: translateY(28px);
        filter: blur(6px);
        transition:
            opacity .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            transform .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s),
            filter .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0s);
        will-change: opacity, transform;
    }

    #faq.reveal-ready [data-reveal="right"] {
        transform: translateX(32px) scale(.97);
    }

    #faq.reveal-ready [data-reveal].is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }

    /* FAQ Answer Text */
    #faq [data-faq-content] p {
        opacity: 0;
        transform: translateY(-8px);
        transition: opacity .35s ease, transform .35s ease;
    }

    #faq [data-faq][data-state="open"] [data-faq-content] p {
        opacity: 1;
        transform: none;
        transition-delay: .12s;
    }

    /* Badge Dot Pulse */
    @keyframes faq-pulse {
        0%   { transform: scale(1);   opacity: .6; }
        100% { transform: scale(3.2); opacity: 0; }
    }

    #faq .faq-dot::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        background: currentColor;
        animation: faq-pulse 1.8s ease-out infinite;
    }

    /* CTA Icon Wiggle */
    @keyframes faq-wiggle {
        0%, 100% { transform: rotate(0); }
        25%      { transform: rotate(-14deg); }
        50%      { transform: rotate(10deg); }
        75%      { transform: rotate(-6deg); }
    }

    #faq .faq-cta:hover .faq-headset {
        animation: faq-wiggle .6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        #faq.reveal-ready [data-reveal] {
            opacity: 1;
            transform: none;
            filter: none;
            transition: none;
        }

        #faq [data-faq-content] p {
            opacity: 1;
            transform: none;
            transition: none;
        }

        #faq .faq-dot::after,
        #faq .faq-cta:hover .faq-headset {
            animation: none;
        }
    }
</style>

<section id="faq" class="bg-[#FDFDFD]">

    <div class="mx-auto max-w-7xl px-6 py-20">

        <div class="grid items-start gap-10 lg:grid-cols-2">

            {{-- FAQ Content --}}
            <div>

                {{-- Badge --}}
                <div data-reveal style="--d: 0s">
                    <div
                        class="mb-5 inline-flex items-center gap-2
                               rounded-full bg-blue-50 px-3 py-1.5
                               text-[10px] font-medium uppercase
                               tracking-wider text-blue-600"
                    >
                        <span
                            class="faq-dot relative h-1.5 w-1.5
                                   rounded-full bg-blue-600 text-blue-600"
                        ></span>

                        Digitalisasi Pendidikan
                    </div>
                </div>

                {{-- Heading --}}
                <h2
                    data-reveal
                    style="--d: .1s"
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
                        <div data-reveal style="--d: {{ .2 + $loop->index * .1 }}s">
                            <details
                                data-faq
                                data-state="{{ $loop->first ? 'open' : 'closed' }}"
                                {{ $loop->first ? 'open' : '' }}
                                class="group overflow-hidden rounded-2xl
                                       border border-gray-100 bg-white
                                       shadow-sm
                                       transition-[transform,box-shadow]
                                       duration-300 ease-out
                                       hover:-translate-y-0.5 hover:shadow-md
                                       data-[state=open]:shadow-md"
                            >

                                <summary
                                    class="flex cursor-pointer list-none
                                           items-center justify-between
                                           px-5 py-5 text-xs font-semibold
                                           text-gray-900 outline-none
                                           focus:outline-none
                                           [&::-webkit-details-marker]:hidden"
                                >
                                    <span
                                        class="transition-colors duration-300
                                               group-data-[state=open]:text-blue-600"
                                    >
                                        {{ $faq['q'] }}
                                    </span>

                                    <span
                                        class="ml-4 flex h-7 w-7 shrink-0
                                               items-center justify-center
                                               rounded-full bg-gray-50
                                               text-gray-400
                                               transition-all duration-300
                                               ease-[cubic-bezier(.34,1.56,.64,1)]
                                               group-hover:scale-110
                                               group-data-[state=open]:bg-blue-50
                                               group-data-[state=open]:text-blue-600"
                                    >
                                        <x-lucide-chevron-down
                                            class="h-4 w-4
                                                   transition-transform
                                                   duration-500
                                                   ease-[cubic-bezier(.34,1.56,.64,1)]
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
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- FAQ Illustration --}}
            <div data-reveal="right" style="--d: .25s" class="self-start">

                <div
                    class="group/card overflow-hidden rounded-2xl
                           border border-gray-100 bg-white
                           shadow-sm transition-shadow duration-500
                           hover:shadow-xl hover:shadow-blue-900/5"
                >

                    <div class="overflow-hidden">
                        <img
                            src="{{ asset('image/faq/faq-ilustrasi.webp') }}"
                            alt="Ilustrasi bantuan dan FAQ SASKANSA"
                            class="h-auto w-full object-cover
                                   transition-transform duration-700
                                   ease-out
                                   group-hover/card:scale-105"
                        >
                    </div>

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
                            class="faq-cta group relative mt-4 inline-flex
                                   items-center gap-2 overflow-hidden
                                   rounded-lg bg-blue-600 px-4 py-2.5
                                   text-[10px] font-medium text-white
                                   transition duration-300
                                   hover:-translate-y-0.5
                                   hover:bg-blue-700 hover:shadow-lg
                                   hover:shadow-blue-600/25
                                   active:translate-y-0"
                        >
                            {{-- Shine --}}
                            <span
                                aria-hidden="true"
                                class="pointer-events-none absolute inset-0
                                       -translate-x-full bg-linear-to-r
                                       from-transparent via-white/25
                                       to-transparent transition-transform
                                       duration-700 ease-out
                                       group-hover:translate-x-full"
                            ></span>

                            <x-lucide-headset class="faq-headset relative h-4 w-4" />

                            <span class="relative">Hubungi Tim IT Sekolah</span>

                            <x-lucide-arrow-right
                                class="relative h-3.5 w-3.5
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

    {{-- FAQ Script: Reveal + Smooth Accordion --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const section = document.getElementById('faq');

            /* Scroll Reveal */
            const items = section.querySelectorAll('[data-reveal]');

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

                items.forEach((el) => observer.observe(el));
            }

            /* Smooth Accordion */
            const DURATION = 300;
            const EASING = 'ease-in-out';
            const ACCORDION = false;
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            section.querySelectorAll('[data-faq]').forEach((details) => {
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
                        section
                            .querySelectorAll('[data-faq][data-state="open"]')
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