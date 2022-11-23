<x-app-website :title="' | Homepage'">
    {{-- hero section --}}
    <section class="content py-20 lg:py-20">
        <div class="container mx-auto">
            <div class="rows-content flex flex-wrap gap-y-8 md:justify-between lg:items-center">
                <div class="cols-content relative flex justify-center lg:basis-1/2 lg:justify-end">
                    <img class="hero-images w-3/4 drop-shadow-2xl md:w-3/5 lg:w-[80%]" src="images/hero-img.png"
                        alt="hero images" />
                    <div
                        class="content-slide-autoplay absolute top-2/3 right-1/2 max-w-xs translate-x-1/2 overflow-hidden rounded-lg shadow-3xl lg:translate-x-2/3">
                        <div class="rows-slide-autoplay">
                            <div class="swiper slide-autoplay">
                                <div class="swiper-wrapper">
                                    <div
                                        class="swiper-slide card flex flex-nowrap items-start gap-x-3 bg-slate-50 p-5 text-center">
                                        <div class="card-images basis-1/2">
                                            <img class="rounded-full shadow-xl" src="images/user-testimonial-1.jpg"
                                                alt="user testimonial" />
                                        </div>
                                        <div class="card-body">
                                            <p class="testimonial text-left text-[.7rem] font-bold text-dark">
                                                Website ini sangat membantu saya melatih keterampilan
                                                pembuatan layouting pada kasus Flex box dan Grid.
                                            </p>
                                            <p
                                                class="dev mt-2 text-left font-serif text-[.6rem] font-semibold tracking-wider text-gray-400">
                                                John BBC - CEO @space.id
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-slide card flex flex-nowrap items-start gap-x-3 bg-slate-50 p-5 text-center">
                                        <div class="card-images basis-1/2 overflow-hidden rounded-full bg-gray-300">
                                            <img class="shadow-xl" src="images/team-1.png" alt="user testimonial" />
                                        </div>
                                        <div class="card-body">
                                            <p class="testimonial text-left text-[.7rem] font-bold text-dark">
                                                Website ini sangat membantu saya dalam mempelajari
                                                studi kasus baru pada bagian Mobile First.
                                            </p>
                                            <p
                                                class="dev mt-2 text-left font-serif text-[.6rem] font-semibold tracking-wider text-gray-400">
                                                M Syaiful Rizal - CEO @ioTm.id
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-slide card flex flex-nowrap items-start gap-x-3 bg-slate-50 p-5 text-center">
                                        <div class="card-images basis-1/2">
                                            <img class="rounded-full shadow-xl" src="images/user-testimonial-2.jpg"
                                                alt="user testimonial" />
                                        </div>
                                        <div class="card-body">
                                            <p class="testimonial text-left text-[.7rem] font-bold text-dark">
                                                Website ini sangat membantu saya dalam menentukan
                                                typography dan menyediakan Asset secara gratis.
                                            </p>
                                            <p
                                                class="dev mt-2 text-left font-serif text-[.6rem] font-semibold tracking-wider text-gray-400">
                                                Robert FOX - CEO @jfestudio.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cols-content lg:order-first text-center lg:basis-1/2">
                    <h1
                        class="title-content px-6 leading-tight text-center font-lora text-2xl font-poppins text-dark md:text-[2.4rem]">
                        Tingkatkan skill
                        <span class="font-bold text-primary">Front End</span> anda, dengan
                        membuat sebuah <span class="font-bold text-primary">Project</span>
                        nyata
                    </h1>
                    <p class="font-poppins my-6 px-4 text-center text-[.95rem] text-dark">
                        Selesaikan tantangan
                        <span class="font-medium italic">HTML, CSS </span> dan
                        <span class="font-medium italic">Javacript</span> dengan design
                        profesional, untuk mengasah skill slicing design kita,
                        bergabunglah dengan kami untuk menyelesaikan suatu project dan
                        saling membantu satu sama lain untuk menjadi lebih baik.
                    </p>
                    <div class="flex justify-center items-center gap-3">
                        <a href="#challenges"
                            class="flex items-center gap-2 text-white bg-blue-600 hover:bg-blue-700 border border-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-[.925rem] px-6 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <i class='bx bx-code-alt text-xl leading-none'></i>
                            Mulai Sekarang</a>
                        <a href="#community"
                            class="flex items-center gap-2 text-blue-600 hover:text-white border border-blue-600 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-[.925rem] px-6 py-2.5 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                            <i class='bx bx-play-circle text-xl leading-none'></i>
                            Pelajari Dulu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- choose your challenges --}}
    <section class="choose py-16 lg:py-24">
        <div class="container mx-auto">
            <div class="rows-choose">
                <h3 class="text-center font-serif text-[1.3rem] font-medium text-dark md:text-2xl">
                    Tertarik bergabung?
                </h3>
                <div class="swiper slider relative mt-4 w-full">
                    <div class="swiper-wrapper py-6 md:py-10">
                        <div
                            class="swiper-slide h-[220px] rounded-lg px-4 py-5 text-center md:max-w-sm md:shadow-3xl lg:max-w-md">
                            <img class="mx-auto w-28 drop-shadow-lg lg:w-24" src="images/img-introduction-2.svg"
                                alt="" />
                            <h3 class="mt-4 mb-3 text-base font-medium text-dark">
                                Choose your challenge
                            </h3>
                            <p class="text-[.875rem] text-secondary">
                                Lihat koleksi desain web kami, Pilih satu yang menurut Anda
                                akan menjadi tantangan yang bagus untuk Anda pada tahap ini
                            </p>
                        </div>
                        <div
                            class="swiper-slide h-[220px] rounded-lg px-4 py-5 text-center md:max-w-sm md:shadow-3xl lg:max-w-md">
                            <img class="mx-auto w-[5.7rem] drop-shadow-lg lg:w-[4.7rem]"
                                src="images/img-introduction-6.svg" alt="" />
                            <h3 class="mt-4 mb-3 text-[.95rem] font-medium text-dark">
                                Code the design
                            </h3>
                            <p class="text-[.825rem] text-secondary">
                                Mulai tantangan dan unduh semua file. Kami menyediakan semua
                                file yang Anda perlukan untuk menyelesaikan tantangan.
                            </p>
                        </div>
                        <div
                            class="swiper-slide h-[220px] rounded-lg px-4 py-5 text-center md:max-w-sm md:shadow-3xl lg:max-w-md">
                            <img class="mx-auto w-[6.5rem] drop-shadow-lg" src="images/img-introduction-4.svg"
                                alt="" />
                            <h3 class="mt-4 mb-3 text-[.95rem] font-medium text-dark">
                                Submit your solution
                            </h3>
                            <p class="text-[.825rem] text-secondary">
                                Posting solusi Anda di platform agar semua orang dapat melihat
                                dan mendapatkan umpan balik tentang kode Anda dari pengembang
                                lain.
                            </p>
                        </div>
                        <div
                            class="swiper-slide h-[220px] rounded-lg px-4 py-5 text-center md:max-w-sm md:shadow-3xl lg:max-w-md">
                            <img class="mx-auto w-28 drop-shadow-lg lg:w-24" src="images/img-introduction-3.svg "
                                alt="" />
                            <h3 class="mt-4 mb-3 text-[.95rem] font-medium text-dark">
                                Give others feedback
                            </h3>
                            <p class="text-[.825rem] text-secondary">
                                Bantu orang lain sambil memperdalam pengetahuan Anda sendiri
                                dengan memberikan umpan balik tentang solusi.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-pagination z-20 translate-y-3"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- challenges (latest) --}}
    <section id="challenges" class="latest py-16 -scroll-mt-24">
        <div class="container relative mx-auto overflow-hidden rounded-t-3xl">
            <div class="rounded-blank absolute top-0 left-0 right-0 -z-10 h-80 bg-dark"></div>
            <h1 class="my-10 text-center font-serif text-2xl font-medium text-slate-50 md:text-[1.6rem] lg:my-16">
                Latest Challenges
            </h1>
            <div class="rows-latest flex flex-wrap justify-center gap-y-5 md:gap-6">
                @foreach ($challenges as $challenge)
                    <div class="cols-latest">
                        <div class="card border border-slate-100 max-w-xs rounded-lg bg-holy p-3 shadow-3xl">
                            <div class="card-images relative">
                                <span
                                    class="sale absolute right-2 top-2 z-10 block rounded-full bg-info py-[.3rem] px-4 text-center text-xs font-semibold uppercase text-white">{{ $challenge->fee }}</span>
                                <a href="{{ route('homes.show', $challenge->id) }}">
                                    <img class="h-56 rounded-lg object-cover drop-shadow-sm"
                                        src="https://source.unsplash.com/random/1200x700" alt="images project" />
                                </a>
                            </div>
                            <div class="card-body py-3">
                                <a href="#" class="mt-1 block capitalize font-serif text-lg font-medium">
                                    {{ $challenge->title }}
                                </a>
                                <div class="info-language my-3 flex justify-between">
                                    <div class="language flex items-center gap-x-3">
                                        <span
                                            class="text-base font-medium uppercase text-danger">{{ $challenge->markup }}</span>
                                        <span
                                            class="text-base font-medium uppercase text-info">{{ $challenge->styling }}</span>
                                        <span
                                            class="text-base font-medium uppercase text-warning">{{ $challenge->language }}</span>
                                    </div>
                                    <div class="mode flex items-center rounded-sm border border-warning text-slate-50">
                                        <i
                                            class="bx bx-dumbbell bg-warning px-2 py-[.2rem] text-[1rem] font-semibold text-holy"></i>
                                        <span class="px-2 text-xs font-bold uppercase text-warning">
                                            {{ $challenge->mode }}
                                        </span>
                                    </div>
                                </div>
                                <div class="paragraf-info">
                                    <p class="text-[.8rem] text-secondary">
                                        {{ $challenge->description }}
                                        {{-- Proyek galeri seni dua halaman ini akan sempurna jika Anda
                                        siap untuk mengerjakan project bagian ini, Ada beberapa
                                        tantangan tata letak yang sangat menarik! --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="mx-auto mt-8 block max-w-max text-center text-sm text-dark underline hover:no-underline md:mt-12"
                href="/cards">Lihat semua Challenges</a>
        </div>
    </section>

    {{-- Community --}}
    <x-community></x-community>

    {{-- Newsletter --}}
    <x-newsletter></x-newsletter>

    {{-- footer --}}
    <x-footer></x-footer>
</x-app-website>
