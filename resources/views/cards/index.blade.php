<x-app-website>
    <!-- title challenges -->
    <div class="title-challenges pt-28 md:pt-32">
        <div class="container mx-auto">
            <h1
                class="title relative text-center font-serif text-xl font-medium leading-6 text-dark before:absolute before:top-2/4 before:left-0 before:-z-10 before:w-full before:-translate-y-1/2 before:text-5xl before:font-extrabold before:tracking-widest before:text-slate-200 before:content-['Challenges'] lg:text-3xl before:lg:text-6xl">
                Pilih Design untuk kasus Website tantanganmu, selamat mengerjakan!
            </h1>
        </div>
    </div>

    <!-- challenges -->
    <section class="challenges pt-10 pb-14">
        <div class="container mx-auto">
            <div class="rows-latest flex flex-wrap justify-center gap-y-5 py-4 md:gap-6">
                @foreach ($challenges as $challenge)
                    <div class="cols-latest">
                        <div class="card border border-slate-100 max-w-xs rounded-lg bg-holy p-3 shadow-3xl">
                            <div class="card-images relative">
                                <span
                                    class="sale absolute right-2 top-2 z-10 block rounded-full bg-info py-[.3rem] px-4 text-center text-xs font-semibold uppercase text-white">Free</span>
                                <a href="./challenges-now.html">
                                    <img class="h-56 rounded-lg object-cover drop-shadow-sm"
                                        src="https://source.unsplash.com/random/1200x700" alt="images project" />
                                </a>
                            </div>
                            <div class="card-body py-3">
                                <a href="./challenges-now.html" class="mt-1 block font-serif text-lg font-medium">
                                    {{ $challenge->title }}
                                </a>
                                <div class="info-language my-3 flex justify-between">
                                    <div class="language flex items-center gap-x-3">
                                        <span class="text-base font-medium text-danger">{{ $challenge->markup }}</span>
                                        <span class="text-base font-medium text-info">{{ $challenge->styling }}</span>
                                        <span
                                            class="text-base font-medium text-warning">{{ $challenge->language }}</span>
                                    </div>
                                    <div class="mode flex items-center rounded-sm border border-warning text-slate-50">
                                        <span
                                            class="bg-warning px-2 py-[.2rem] text-xs font-semibold text-holy">3</span>
                                        <span class="px-2 text-xs font-bold uppercase text-warning">
                                            {{ $challenge->mode }}
                                        </span>
                                    </div>
                                </div>
                                <div class="paragraf-info">
                                    <p class="text-[.8rem] text-secondary">
                                        {{ $challenge->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- community --}}
    <x-community></x-community>

    {{-- newsletter --}}
    <x-newsletter></x-newsletter>

    {{-- footer --}}
    <x-footer></x-footer>
</x-app-website>
