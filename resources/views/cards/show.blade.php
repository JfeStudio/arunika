<x-app-website :title="' | Details Challenges'">
    <section class="card-preview pt-20 pb-20 lg:pt-28">
        <div class="container mx-auto">
            <div class="rows-preview flex flex-wrap justify-center gap-y-5 md:gap-y-7 lg:justify-between xl:flex-nowrap">
                <div class="cols-preview lg:basis-1/2">
                    <div class="swiper card-cube max-w-[22rem] md:max-w-xl lg:max-w-lg xl:max-w-xl">
                        <div class="swiper-wrapper h-full">
                            <div class="swiper-slide">
                                <img
                                    src="https://res.cloudinary.com/dz209s6jk/image/upload/q_auto:good,w_900/Challenges/qkpgcsmter7tah2sjdij.jpg" />
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
                        <div class="info-language my-3 flex gap-x-4 md:gap-x-6">
                            <span
                                class="sale block rounded-full bg-info py-[.3rem] px-4 text-center text-xs font-semibold uppercase text-white">{{ $challenges->fee }}</span>
                            <div class="language flex items-center gap-x-3">
                                <span
                                    class="text-base font-medium uppercase text-danger">{{ $challenges->markup }}</span>
                                <span
                                    class="text-base font-medium uppercase text-info">{{ $challenges->styling }}</span>
                                <span
                                    class="text-base font-medium uppercase text-warning">{{ $challenges->language }}</span>
                            </div>
                            <div
                                class="mode ml-auto flex items-center rounded-sm border border-warning text-slate-50 md:ml-0 lg:ml-auto">
                                <i
                                    class="bx bx-dumbbell bg-warning px-2 py-[.2rem] text-[1rem] font-semibold text-holy"></i>
                                <span class="px-2 text-xs font-bold uppercase text-warning">
                                    {{ $challenges->mode }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <h2 class="title mt-5 font-serif capitalize font-semibold text-dark lg:text-2xl">
                        {{ $challenges->title }}
                    </h2>
                    <p class="mt-3 mb-5 text-sm capitalize text-secondary">
                        {{ $challenges->description }}
                    </p>
                    <div class="asset rounded-lg bg-dark-scy p-5">
                        <h3 class="mb-3 text-holy-blur">Aset yang di sediakan</h3>
                        <div class="text-asset">
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-x icon text-lg text-danger"></i>
                                <p class="text-[.8rem] text-slate-300">
                                    Sketch and Figma design file access -
                                    <span class="cursor-pointer text-primary underline hover:no-underline">Unlock with
                                        PRO</span>
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-lg text-green-500"></i>
                                <p class="text-[.8rem] text-slate-300">
                                    JPEG design files for mobile & desktop layouts
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-lg text-green-500"></i>
                                <p class="text-[.8rem] text-slate-300">
                                    Style guide for fonts, colors, etc
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-lg text-green-500"></i>
                                <p class="text-[.8rem] text-slate-300">
                                    Optimized image assets
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-lg text-green-500"></i>
                                <p class="text-[.8rem] text-slate-300">
                                    README file to help you get started
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-lg text-green-500"></i>
                                <p class="text-[.8rem] text-slate-300">
                                    HTML file with pre-written content
                                </p>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="bx mt-3 flex cursor-pointer items-center gap-x-2 rounded-full bg-start px-7 py-2 font-sans text-xs font-extrabold uppercase text-holy-blur hover:opacity-90">
                        Start Challenges (FREE)
                        <i class="bx bx-dumbbell icon translate-y-[.05rem] text-sm"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-app-website>
