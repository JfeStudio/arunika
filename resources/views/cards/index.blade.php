<x-app-website :title="' | Challenges'">
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
                                <div class="relative rounded-lg overflow-hidden">
                                    <a href="{{ route('cards.show', $challenge->id) }}">
                                        <div class="news-info before:z-10"></div>
                                        <img class="h-56 object-cover drop-shadow-sm"
                                            src="https://source.unsplash.com/random/1200x700" alt="images project" />
                                    </a>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <a href="./challenges-now.html"
                                    class="mt-1 block capitalize font-serif text-lg font-medium">
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
                                    <p class="text-[.8rem] capitalize text-secondary">
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
