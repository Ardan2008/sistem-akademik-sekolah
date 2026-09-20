{{-- Back to Top (Glass) --}}
<style>
    @keyframes btt-bubble-rise {
        0%   { transform: translateY(0) scale(.3); opacity: 0; }
        25%  { opacity: .9; }
        100% { transform: translateY(-30px) scale(1); opacity: 0; }
    }

    #back-to-top .btt-bubble { opacity: 0; }

    #back-to-top:hover .btt-bubble,
    #back-to-top:focus-visible .btt-bubble {
        animation: btt-bubble-rise 1.3s ease-in infinite;
    }

    #back-to-top .btt-glass {
        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, .85),
            inset 0 -1px 2px rgba(255, 255, 255, .25),
            inset 0 0 0 1px rgba(255, 255, 255, .35),
            0 0 0 1px rgba(15, 40, 80, .06),
            0 8px 24px rgba(15, 40, 80, .14);
    }

    #back-to-top:hover .btt-glass {
        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, .95),
            inset 0 -1px 2px rgba(255, 255, 255, .3),
            inset 0 0 0 1px rgba(255, 255, 255, .45),
            0 0 0 1px rgba(15, 40, 80, .08),
            0 12px 30px rgba(15, 40, 80, .2);
    }

    @media (prefers-reduced-motion: reduce) {
        #back-to-top:hover .btt-bubble,
        #back-to-top:focus-visible .btt-bubble {
            animation: none;
        }
    }
</style>

<button
    id="back-to-top"
    type="button"
    data-visible="false"
    aria-label="Kembali ke atas"
    class="group fixed bottom-6 right-6 z-40 h-12 w-12
           translate-y-4 scale-75 rounded-full
           opacity-0 pointer-events-none
           transition-all duration-500 ease-out
           hover:-translate-y-1
           focus:outline-none active:scale-95
           data-[visible=true]:translate-y-0
           data-[visible=true]:scale-100
           data-[visible=true]:opacity-100
           data-[visible=true]:pointer-events-auto
           sm:bottom-8 sm:right-8"
>

    {{-- Progress Ring --}}
    <svg
        class="absolute inset-0 h-full w-full -rotate-90"
        viewBox="0 0 48 48"
        fill="none"
        aria-hidden="true"
    >
        <circle
            cx="24" cy="24" r="22"
            stroke="rgba(124,156,196,.25)"
            stroke-width="2"
        />
        <circle
            id="back-to-top-progress"
            cx="24" cy="24" r="22"
            stroke="#7C9CC4"
            stroke-width="2"
            stroke-linecap="round"
            stroke-dasharray="138.23"
            stroke-dashoffset="138.23"
        />
    </svg>

    {{-- Glass Disc --}}
    <span
        class="btt-glass absolute inset-1.25 overflow-hidden rounded-full
               bg-[#7C9CC4]/25 text-slate-800
               backdrop-blur-xl backdrop-saturate-150
               transition-shadow duration-300"
    >

        {{-- Specular Highlight --}}
        <span
            class="pointer-events-none absolute inset-x-0 top-0 h-1/2
                   rounded-t-full bg-linear-to-b
                   from-white/55 to-transparent"
        ></span>

        {{-- Bubble Fill (masuk saat hover) --}}
        <span
            class="absolute inset-0 origin-bottom scale-0
                   rounded-full bg-white/45
                   transition-transform duration-500
                   ease-[cubic-bezier(.34,1.56,.64,1)]
                   group-hover:scale-[1.15]
                   group-focus-visible:scale-[1.15]"
        ></span>

        {{-- Floating Bubbles (animasi saat hover) --}}
        <span class="btt-bubble absolute bottom-1 left-2 h-1.5 w-1.5 rounded-full bg-white/80"
              style="animation-delay: 0s"></span>
        <span class="btt-bubble absolute bottom-1 left-4.75 h-2 w-2 rounded-full bg-white/70"
              style="animation-delay: .35s"></span>
        <span class="btt-bubble absolute bottom-1 right-2 h-1 w-1 rounded-full bg-white/85"
              style="animation-delay: .7s"></span>

        {{-- Icon --}}
        <span class="relative flex h-full w-full items-center justify-center">
            <x-lucide-arrow-up
                class="h-5 w-5 stroke-[2.5] transition-transform duration-300
                       ease-out group-hover:-translate-y-0.5"
            />
        </span>

    </span>

</button>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const button = document.getElementById('back-to-top');
        const ring = document.getElementById('back-to-top-progress');
        if (!button || !ring) return;

        const SHOW_AFTER = 400;          // px scroll sebelum tombol muncul
        const CIRCUMFERENCE = 2 * Math.PI * 22;
        let ticking = false;

        const update = () => {
            const scrollTop = window.scrollY;
            const maxScroll =
                document.documentElement.scrollHeight - window.innerHeight;
            const progress = maxScroll > 0
                ? Math.min(scrollTop / maxScroll, 1)
                : 0;

            ring.style.strokeDashoffset = CIRCUMFERENCE * (1 - progress);
            button.dataset.visible = scrollTop > SHOW_AFTER ? 'true' : 'false';
            ticking = false;
        };

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(update);
                ticking = true;
            }
        }, { passive: true });

        window.addEventListener('resize', update, { passive: true });

        button.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            button.blur();
        });

        update();
    });
</script>