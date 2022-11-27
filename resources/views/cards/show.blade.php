<x-app-website :title="' | Details Challenges'">
    {{-- card details --}}
    <section class="card-preview pt-20 pb-20 lg:pt-28">
        <div class="container mx-auto">
            <div class="rows-preview flex flex-wrap justify-center gap-y-5 md:gap-y-7 lg:justify-between xl:flex-nowrap">
                <div class="cols-preview lg:basis-1/2">
                    <div class="swiper card-cube max-w-[22rem] md:max-w-xl lg:max-w-lg xl:max-w-xl">
                        <div class="swiper-wrapper h-full">
                            <div class="swiper-slide">
                                {{-- <img
                                    src="https://res.cloudinary.com/dz209s6jk/image/upload/q_auto:good,w_900/Challenges/qkpgcsmter7tah2sjdij.jpg" /> --}}
                                    @if ($challenges->images)
                                        <img
                                            src="/images/{{ $challenges->images }}" alt="Rounded avatar">
                                    @else
                                        <img class="w-12 h-12 rounded-md object-cover"
                                            src="https://source.unsplash.com/random/1200x700" alt="Rounded avatar">
                                    @endif
                            </div>
                            <div class="swiper-slide">
                                <img
                                    src="https://res.cloudinary.com/dz209s6jk/image/upload/q_auto:good,w_900/Challenges/xihpurhitfpt5mycko8z.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img
                                    src="https://res.cloudinary.com/dz209s6jk/image/upload/q_auto:good,w_900/Challenges/jxvqmmhh6qfcoeoxmfie.jpg" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="info-breakpoint mt-5 flex flex-nowrap justify-between md:justify-center md:gap-x-5">
                        <div class="flex items-center gap-x-1 rounded-full bg-dark-scy py-1 px-3 md:px-4 lg:px-5">
                            <h3 class="text-[.7rem] text-holy-blur lg:text-xs">
                                Desktop Design
                            </h3>
                            <i class="bx bx-check icon text-sm text-green-500"></i>
                        </div>
                        <div class="flex items-center gap-x-1 rounded-full bg-dark-scy py-1 px-3 md:px-4 lg:px-5">
                            <h3 class="text-[.7rem] text-holy-blur lg:text-xs">
                                Active States
                            </h3>
                            <i class="bx bx-check icon text-sm text-green-500"></i>
                        </div>
                        <div class="flex items-center gap-x-1 rounded-full bg-dark-scy py-1 px-3 md:px-4 lg:px-5">
                            <h3 class="text-[.7rem] text-holy-blur lg:text-xs">
                                Mobile Design
                            </h3>
                            <i class="bx bx-check icon text-sm text-green-500"></i>
                        </div>
                    </div>
                </div>
                <div class="cols-preview basis-full lg:basis-[45%]">
                    <div class="content-preview">
                        <div class="info-language mb-3 flex gap-x-4 md:gap-x-6">
                            <span
                                class="sale block rounded-full bg-blue-600 py-1 px-4 text-center text-sm font-semibold uppercase text-white">{{ $challenges->fee }}</span>
                            <div class="language flex items-center gap-x-3">
                                <span
                                    class="text-base font-medium uppercase text-danger">{{ $challenges->markup }}</span>
                                <span
                                    class="text-base font-medium uppercase text-info">{{ $challenges->styling }}</span>
                                <span
                                    class="text-base font-medium uppercase text-warning">{{ $challenges->language }}</span>
                            </div>
                            <div
                                class="mode ml-auto flex items-center rounded-sm border border-red-600 md:ml-0 lg:ml-auto">
                                <i
                                    class="bx bx-dumbbell bg-red-600 px-2 py-[.325rem] text-[1rem] font-semibold text-holy"></i>
                                <span class="px-2 text-xs font-bold uppercase text-red-600">
                                    {{ $challenges->mode }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <h2 class="title mt-5 font-lora capitalize font-semibold text-dark lg:text-3xl">
                        {{ $challenges->title }}
                    </h2>
                    <p class="mt-3 mb-5 text-sm capitalize text-secondary">
                        {{ $challenges->description }}
                    </p>
                    <div class="asset rounded-lg bg-gray-800 p-5">
                        <h3 class="mb-3 text-holy-blur">Assets yang di sediakan</h3>
                        <div class="text-asset">
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-x icon text-xl font-semibold text-danger"></i>
                                <p class="text-sm text-slate-300">
                                    Sketch dan Figma design file akses -
                                    <span class="cursor-pointer text-blue-500 underline hover:no-underline">Unlock with
                                        PRO</span>
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-xl text-green-400"></i>
                                <p class="text-sm text-slate-300">
                                    JPEG design file untuk mobile & desktop layouts
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-xl text-green-400"></i>
                                <p class="text-sm text-slate-300">
                                    Style guide untuk fonts, colors, etc
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-xl text-green-400"></i>
                                <p class="text-sm text-slate-300">
                                    Optimized image assets
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-xl text-green-400"></i>
                                <p class="text-sm text-slate-300">
                                    README file untuk membantumu jika ada kesulitan
                                    {{-- README file to help you get started --}}
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-xl text-green-400"></i>
                                <p class="text-sm text-slate-300">
                                    HTML file dengan konten yang telah di tulis
                                    {{-- HTML file with pre-written content --}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="auth">
                        @if (Route::has('login'))
                            @auth
                                <button type="button"
                                    class="text-white gap-x-2 mt-4 bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-full text-sm px-7 py-2.5 text-center flex items-center dark:hover:bg-[#050708]/40 dark:focus:ring-gray-600">
                                    Mulai Tantangan (FREE)
                                    <i class="bx bx-dumbbell translate-y-[.1rem] text-xl leading-none"></i>
                                </button>
                            @else
                                <a href="{{ route('login') }}"
                                    class="max-w-max text-white gap-x-2 mt-4 bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-full text-sm px-7 py-2.5 text-center flex items-center dark:hover:bg-[#050708]/40 dark:focus:ring-gray-600">
                                    <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab"
                                        data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 496 512">
                                        <path fill="currentColor"
                                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                        </path>
                                    </svg>
                                    Login dengan Github
                                </a>
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- how to challenges -->
    <x-brief></x-brief>

    {{-- accordion --}}
    <x-accordion></x-accordion>

    {{-- community --}}
    <x-community></x-community>

    {{-- newsletter --}}
    <x-newsletter></x-newsletter>

    {{-- footer --}}
    <x-footer></x-footer>
</x-app-website>
