<x-app-website :title="' | Details Challenges'">
    {{-- card details --}}
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
                        <div class="info-language mb-3 flex gap-x-4 md:gap-x-6">
                            <span
                                class="sale block rounded-full bg-blue-600 py-[.3rem] px-4 text-center text-xs font-semibold uppercase text-white">{{ $challenges->fee }}</span>
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
                                    class="bx bx-dumbbell bg-red-600 px-2 py-[.2rem] text-[1rem] font-semibold text-holy"></i>
                                <span class="px-2 text-xs font-bold uppercase text-red-600">
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
                    <div class="asset rounded-lg bg-gray-800 p-5">
                        <h3 class="mb-3 text-holy-blur">Aset yang di sediakan</h3>
                        <div class="text-asset">
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-x icon text-xl font-semibold text-danger"></i>
                                <p class="text-sm text-slate-300">
                                    Sketch and Figma design file access -
                                    <span class="cursor-pointer text-blue-500 underline hover:no-underline">Unlock with
                                        PRO</span>
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-xl text-green-400"></i>
                                <p class="text-sm text-slate-300">
                                    JPEG design files for mobile & desktop layouts
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-xl text-green-400"></i>
                                <p class="text-sm text-slate-300">
                                    Style guide for fonts, colors, etc
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
                                    README file to help you get started
                                </p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="bx bx-check icon text-xl text-green-400"></i>
                                <p class="text-sm text-slate-300">
                                    HTML file with pre-written content
                                </p>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                        class="text-white gap-x-2 mt-4 bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-full text-sm px-7 py-2.5 text-center flex items-center dark:hover:bg-[#050708]/40 dark:focus:ring-gray-600 mr-2 mb-2">
                        Start Challenges (FREE)
                        <i class="bx bx-dumbbell translate-y-[.1rem] text-xl leading-none"></i>
                    </button>
                    {{-- Start Challenges (FREE) --}}
                </div>
            </div>
        </div>
    </section>

    <!-- how to challenges -->
    <section class="intro-challenges pb-5 lg:pt-12">
        <div class="container mx-auto">
            <h2 class="text-center font-serif text-lg font-semibold uppercase tracking-widest text-dark lg:text-lg">
                Challenge
            </h2>
            <div class="rows-intro-challenges mt-12 mb-8 flex flex-wrap text-dark lg:mt-20 lg:flex-nowrap lg:gap-x-24">
                <div class="cols-intro-challenges lg:basis-1/2">
                    <h3 class="mb-3 font-serif text-xl font-extrabold">Brief</h3>
                    <p class="mb-3 text-sm lg:text-base">
                        Your challenge is to build out this bar chart component and get it
                        looking as close to the design as possible.
                    </p>
                    <p class="mb-3 text-sm lg:text-base">
                        You can use any tools you like to help you complete the challenge.
                        So if you've got something you'd like to practice, feel free to
                        give it a go.
                    </p>
                    <p class="mb-3 text-sm lg:text-base">
                        We provide the data for the chart in a local
                        <span
                            class="px-2 py-1.5 text-sm font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">data.json</span>
                        file. So you can
                        use that to add the bars dynamically if you choose.
                    </p>
                    <p class="mb-3 text-sm lg:text-base">
                        Your users should be able to :
                    </p>
                    <ul class="mb-3 list-disc pl-5">
                        <li class="text-sm lg:text-base">
                            View the bar chart and hover over the individual bars to see the
                            correct amounts for each day
                        </li>
                        <li class="text-sm lg:text-base">
                            See the current day's bar highlighted in a different colour to
                            the other bars
                        </li>
                        <li class="text-sm lg:text-base">
                            View the optimal layout for the content depending on their
                            device's screen size
                        </li>
                        <li class="text-sm lg:text-base">
                            See hover states for all interactive elements on the page
                        </li>
                        <li class="text-sm lg:text-base">
                            <span class="text-sm font-extrabold lg:text-base">Bonus :</span>
                            See dynamically generated bars based on the data provided in the
                            local JSON file
                        </li>
                    </ul>
                    <p class="mb-3 text-sm lg:text-base">
                        Download the project and go through the
                        <span
                            class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">README.md</span>
                        file. This will
                        provide further details about the project and help you set it up.
                    </p>
                    <p class="mb-3 text-sm lg:text-base">
                        Want some support on the challenge?
                        <a class="underline hover:no-underline" href="#">Join our JfeStudio community</a>
                        and ask questions in the help channel.
                    </p>
                </div>
                <div class="cols-intro-challenges lg:basis-1/2">
                    <h3 class="my-6 mb-3 font-serif text-xl font-extrabold lg:mt-0">
                        Getting started
                    </h3>
                    <ul class="list-decimal pl-5">
                        <li class="text-sm lg:text-base">Download the starter code</li>
                        <li class="text-sm lg:text-base">
                            Set up the project with version control (e.g. Git)
                        </li>
                        <li class="text-sm lg:text-base">
                            Read the <span
                                class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">README.md</span>
                            file
                            and have a look around the project
                        </li>
                        <li class="text-sm lg:text-base">
                            Get colors, fonts etc from the
                            <span
                                class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">style-guide.md</span>
                            file
                        </li>
                        <li class="text-sm lg:text-base">
                            Set up your project/file architecture however you want
                        </li>
                        <li class="text-sm lg:text-base">Start coding!</li>
                    </ul>
                    <h3 class="mt-6 mb-3 font-serif text-xl font-extrabold">
                        Ideas to test yourself
                    </h3>
                    <ul class="list-disc pl-5">
                        <li class="text-sm lg:text-base">
                            Write your styles using a pre-processor, such as
                            <a class="underline hover:no-underline" href="#">Sass</a>,
                            <a class="underline hover:no-underline" href="#">Less</a> or
                            <a class="underline hover:no-underline" href="#">Stylus</a>
                        </li>
                        <li class="text-sm lg:text-base">
                            Train your eye for detail by getting your solution as close to
                            the design as you can
                        </li>
                        <li class="text-sm lg:text-base">
                            Use a JavaScript framework/library to practice building using
                            components
                        </li>
                        <li class="text-sm lg:text-base">
                            Try estimating the time it will take for you to build the
                            project. Then see if the time taken matches up to your estimate.
                            Project estimations are a skill that is often overlooked but is
                            essential for professional developers
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button"
                class="text-white gap-x-2 mt-4 bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-full text-sm px-7 py-2.5 text-center flex items-center dark:hover:bg-[#050708]/40 dark:focus:ring-gray-600 mr-2 mb-2">
                Start Challenges (FREE)
                <i class="bx bx-dumbbell translate-y-[.1rem] text-xl leading-none"></i>
            </button>
        </div>
    </section>

    {{-- accordion --}}
    <section class="accordion container mx-auto my-20">
        <h3 class="mb-10 text-center font-serif text-lg font-bold uppercase tracking-widest">
            Challenges FAQS
        </h3>
        <div id="accordion-color" class="w-3/4 m-auto" data-accordion="collapse"
            data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
            <h2 id="accordion-color-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                    aria-controls="accordion-color-body-1">
                    <span>What is Flowbite?</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                        components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                            href="/docs/getting-started/introduction/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start
                        developing websites even faster with components on top of Tailwind CSS.</p>
                </div>
            </div>
            <h2 id="accordion-color-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                    aria-controls="accordion-color-body-2">
                    <span>Is there a Figma file available?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed
                        using the Figma software so everything you see in the library has a design equivalent in our
                        Figma file.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on
                        the utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
            </div>
            <h2 id="accordion-color-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                    aria-controls="accordion-color-body-3">
                    <span>What are the differences between Flowbite and Tailwind UI?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components
                        from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
                        Another difference is that Flowbite relies on smaller and standalone components, whereas
                        Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                        Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from
                        using the best of two worlds.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul>
                </div>
            </div>
            <h2 id="accordion-color-heading-4">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                    aria-controls="accordion-color-body-4">
                    <span>What are the differences between Flowbite and Tailwind UI?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components
                        from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
                        Another difference is that Flowbite relies on smaller and standalone components, whereas
                        Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                        Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from
                        using the best of two worlds.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul>
                </div>
            </div>
            <h2 id="accordion-color-heading-5">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-color-body-5" aria-expanded="false"
                    aria-controls="accordion-color-body-5">
                    <span>What are the differences between Flowbite and Tailwind UI?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components
                        from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
                        Another difference is that Flowbite relies on smaller and standalone components, whereas
                        Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                        Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from
                        using the best of two worlds.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul>
                </div>
            </div>
            <h2 id="accordion-color-heading-6">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-color-body-6" aria-expanded="false"
                    aria-controls="accordion-color-body-6">
                    <span>What are the differences between Flowbite and Tailwind UI?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components
                        from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
                        Another difference is that Flowbite relies on smaller and standalone components, whereas
                        Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                        Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from
                        using the best of two worlds.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul>
                </div>
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
