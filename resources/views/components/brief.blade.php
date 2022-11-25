<section class="intro-challenges pb-5 lg:pt-12">
    <div class="container mx-auto">
        <h2 class="text-center font-serif text-lg font-semibold uppercase tracking-widest text-dark lg:text-lg">
            Tantangan
        </h2>
        <div class="rows-intro-challenges mt-12 mb-8 flex flex-wrap text-dark lg:mt-20 lg:flex-nowrap lg:gap-x-24">
            <div class="cols-intro-challenges lg:basis-1/2">
                <h3 class="mb-3 font-serif text-xl font-extrabold">Ringkasan</h3>
                <p class="mb-3 text-sm lg:text-base">
                    Tantangan Anda adalah membangun komponen bagan batang ini dan membuatnya terlihat sedekat mungkin
                    dengan desain.
                </p>
                <p class="mb-3 text-sm lg:text-base">
                    Anda dapat menggunakan alat apa pun yang Anda suka untuk membantu Anda menyelesaikan tantangan.
                    Jadi, jika Anda memiliki sesuatu yang ingin Anda latih, jangan ragu untuk mencobanya.
                </p>
                <p class="mb-3 text-sm lg:text-base">
                    Kami menyediakan data untuk bagan dalam file
                    <span
                        class="px-2 py-1.5 text-sm font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">data.json</span>
                    lokal . Jadi Anda dapat menggunakannya untuk menambahkan bilah secara dinamis jika Anda mau.
                </p>
                <p class="mb-3 text-sm lg:text-base">
                    Pengguna Anda harus dapat:
                </p>
                <ul class="mb-3 list-disc pl-5">
                    <li class="text-sm lg:text-base">
                        Lihat bagan batang dan arahkan kursor ke masing-masing batang untuk melihat jumlah yang tepat
                        untuk setiap hari
                    </li>
                    <li class="text-sm lg:text-base">
                        Lihat bilah hari ini disorot dengan warna berbeda dari bilah lainnya
                    </li>
                    <li class="text-sm lg:text-base">
                        Lihat tata letak optimal untuk konten tergantung pada ukuran layar perangkat mereka
                    </li>
                    <li class="text-sm lg:text-base">
                        Lihat status hover untuk semua elemen interaktif di halaman </li>
                    <li class="text-sm lg:text-base">
                        <span class="text-sm font-extrabold lg:text-base">Bonus :</span>
                        Lihat bilah yang dibuat secara dinamis berdasarkan data yang disediakan di file JSON lokal
                    </li>
                </ul>
                <p class="mb-3 text-sm lg:text-base">
                    Unduh proyek dan buka file
                    <span
                        class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">README.md</span>
                    Ini akan memberikan detail lebih lanjut tentang proyek dan membantu Anda menyiapkannya.
                </p>
                <p class="mb-3 text-sm lg:text-base">
                    Ingin dukungan pada tantangan?
                    <a class="underline hover:no-underline" href="#"> Bergabunglah dengan komunitas JfeStudio
                        kami</a>
                    dan ajukan pertanyaan di saluran bantuan.
                </p>
            </div>
            <div class="cols-intro-challenges lg:basis-1/2">
                <h3 class="my-6 mb-3 font-serif text-xl font-extrabold lg:mt-0">
                    Ayo kita mulai
                </h3>
                <ul class="list-decimal pl-5">
                    <li class="text-sm lg:text-base">Unduh kode awal</li>
                    <li class="text-sm lg:text-base">
                        Siapkan proyek dengan kontrol versi (misalnya Git)
                    </li>
                    <li class="text-sm lg:text-base">
                        Baca file <span
                            class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">README.md</span>
                        dan lihat-lihat proyeknya
                    </li>
                    <li class="text-sm lg:text-base">
                        Dapatkan warna, font, dll dari file
                        <span
                            class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">style-guide.md</span>
                        file
                    </li>
                    <li class="text-sm lg:text-base">
                        Siapkan arsitektur proyek/file Anda seperti yang Anda inginkan
                    </li>
                    <li class="text-sm lg:text-base">Mulai pengkodean!</li>
                </ul>
                <h3 class="mt-6 mb-3 font-serif text-xl font-extrabold">
                    Ide untuk menguji diri sendiri
                </h3>
                <ul class="list-disc pl-5">
                    <li class="text-sm lg:text-base">
                        Tulis gaya Anda menggunakan pra-prosesor, seperti
                        <a class="underline hover:no-underline" href="#">Sass</a>,
                        <a class="underline hover:no-underline" href="#">Less</a> atau
                        <a class="underline hover:no-underline" href="#">Stylus</a>
                    </li>
                    <li class="text-sm lg:text-base">
                        Latih mata Anda untuk detail dengan mendapatkan solusi Anda sedekat mungkin dengan desain
                    </li>
                    <li class="text-sm lg:text-base">
                        Gunakan framework/library JavaScript untuk berlatih membangun menggunakan komponen
                    </li>
                    <li class="text-sm lg:text-base">
                        Coba perkirakan waktu yang diperlukan bagi Anda untuk membangun proyek. Kemudian lihat apakah
                        waktu yang dibutuhkan cocok dengan perkiraan Anda. Estimasi proyek adalah keterampilan yang
                        sering diabaikan tetapi sangat penting bagi pengembang profesional
                    </li>
                </ul>
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
                            data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path fill="currentColor"
                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                            </path>
                        </svg>
                        Sign in with Github
                    </a>
                @endauth
            @endif
        </div>
    </div>
</section>
