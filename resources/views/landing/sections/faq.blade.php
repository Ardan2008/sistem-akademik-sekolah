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

    /* Kartu bantuan masuk dari kanan hanya saat 2 kolom (desktop).
       Saat bertumpuk, masuk dari bawah supaya tidak menyebabkan scroll horizontal. */
    @media (min-width: 1024px) {
        #faq.reveal-ready [data-reveal="right"] {
            transform: translateX(32px) scale(.97);
        }
    }

    #faq.reveal-ready [data-reveal].is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }

    /* Jeda daftar FAQ: tanpa jeda di HP, bertahap mulai tablet */
    #faq .faq-item {
        --d: 0s;
    }

    @media (min-width: 640px) {
        #faq .faq-item { --d: var(--dl, 0s); }
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

    /* Efek hover hanya untuk perangkat yang punya hover */
    @media (hover: hover) {
        #faq .faq-cta:hover .faq-headset {
            animation: faq-wiggle .6s ease-in-out;
        }
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

{{-- overflow-x-clip: mencegah scroll horizontal akibat animasi masuk dari samping --}}
<section id="faq" class="scroll-mt-16 overflow-x-clip bg-[#FDFDFD]">

    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-16 lg:py-20">

        <div class="grid items-start gap-10 lg:grid-cols-2 lg:gap-12">

            {{-- FAQ Content --}}
            <div>

                {{-- Badge --}}
                <div data-reveal style="--d: 0s">
                    <div
                        class="mb-4 inline-flex items-center gap-2
                               rounded-full bg-blue-50 px-3 py-1.5
                               text-[10px] font-medium uppercase
                               tracking-wider text-blue-600 sm:mb-5"
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
                    class="max-w-md text-[1.75rem] font-semibold
                           leading-tight tracking-tight
                           text-gray-900 sm:text-4xl"
                >
                    Frequently Asked
                    <span class="block">
                        Questions
                    </span>
                </h2>

                {{-- FAQ List --}}
                <div class="mt-8 space-y-3 sm:mt-10">

                    @foreach ($faqs as $faq)
                        <div
                            data-reveal
                            style="--dl: {{ .2 + $loop->index * .1 }}s"
                            class="faq-item"
                        >
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
                                    class="flex min-h-14 cursor-pointer list-none
                                           items-center justify-between gap-4
                                           px-4 py-4 text-sm font-semibold
                                           text-gray-900 outline-none
                                           focus-visible:ring-2
                                           focus-visible:ring-inset
                                           focus-visible:ring-blue-500
                                           sm:px-5 sm:py-5 sm:text-xs
                                           [&::-webkit-details-marker]:hidden"
                                >
                                    <span
                                        class="min-w-0 leading-snug
                                               transition-colors duration-300
                                               group-data-[state=open]:text-blue-600"
                                    >
                                        {{ $faq['q'] }}
                                    </span>

                                    <span
                                        class="flex h-8 w-8 shrink-0
                                               items-center justify-center
                                               rounded-full bg-gray-50
                                               text-gray-400
                                               transition-all duration-300
                                               ease-[cubic-bezier(.34,1.56,.64,1)]
                                               group-hover:scale-110
                                               group-data-[state=open]:bg-blue-50
                                               group-data-[state=open]:text-blue-600
                                               sm:h-7 sm:w-7"
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
                                    <div class="px-4 pb-4 sm:px-5 sm:pb-5">
                                        <p class="text-[13px] leading-relaxed text-gray-500
                                                  sm:text-[11px] sm:leading-5">
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
                            loading="lazy"
                            decoding="async"
                            class="h-auto w-full object-cover
                                   transition-transform duration-700
                                   ease-out
                                   group-hover/card:scale-105"
                        >
                    </div>

                    {{-- Help Content --}}
                    <div class="p-5 sm:p-6">

                        <h3 class="text-base font-semibold text-gray-900">
                            Kendala Akses atau Lupa Password?
                        </h3>

                        <p class="mt-2 text-[13px] leading-relaxed text-gray-500
                                  sm:text-xs sm:leading-5">
                            Tim IT Sekolah siap membantu jika Anda
                            mengalami masalah saat login, lupa kata
                            sandi, atau memerlukan bantuan teknis
                            lainnya di portal SASKANSA.
                        </p>

                        <a
                            href="#"
                            class="faq-cta group relative mt-4 inline-flex
                                   w-full items-center justify-center gap-2
                                   overflow-hidden rounded-lg bg-blue-600
                                   px-4 py-3 text-[13px] font-medium text-white
                                   transition duration-300
                                   hover:-translate-y-0.5
                                   hover:bg-blue-700 hover:shadow-lg
                                   hover:shadow-blue-600/25
                                   focus-visible:outline focus-visible:outline-2
                                   focus-visible:outline-offset-2
                                   focus-visible:outline-blue-500
                                   active:translate-y-0 active:scale-[0.98]
                                   sm:w-auto sm:py-2.5 sm:text-[10px]"
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

                            <x-lucide-headset class="faq-headset relative h-4 w-4 shrink-0" />

                            <span class="relative">Hubungi Tim IT Sekolah</span>

                            <x-lucide-arrow-right
                                class="relative h-3.5 w-3.5 shrink-0
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

    {{-- Reveal + Smooth Accordion --}}
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