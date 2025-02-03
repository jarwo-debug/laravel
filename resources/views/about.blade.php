<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl">Ini adalah halaman About</h3> --}}

    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    BENGKULU EKSPRES
                    TELEVISI</h2>
                <p class="mb-4">PT. Media Sarana Televisi Bengkulu adalah perusahaan di bidang media penyiaran
                    pertelevisian dengan nama BENGKULU EKSPRESS TELEVISI atau dikenal dengan nama BETV. BETV mulai
                    mengudara pada tanggal 18 Desember 2013 di channel 24 UHF dengan lingkup wilayah penyiaran di
                    Bengkulu.</p>
                <p>BETV didirikan dengan landasan edukasi dan sosial budaya guna menghadirkan hiburan serta iformasi
                    untuk mengembangkan budaya lokal dan lingkungan sosial melalui media penyiaran televisi</p>
                <p>
                    BETV menghadirkan ragam dan jenis tayangan inovatif, informatif, edukatif sekaligus menghibur.
                    BETV hadir di tengah masyarakat Bengkulu sebagai salah satu sumbangsih terhadap perkembangan
                    potensi wilayah lokal dari sisi pendidikan, pariwisata, olahraga, seni, budaya serta nilai nilai
                    tradisional dan religi yang memiliki nilai kebanggaan tersendiri dan diharapkan dapat diterima
                    dihati masyarakat.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class=" w-full rounded-lg" src="img/grahabe.png" alt="office content 1">
                {{-- <img class="mt-4 w-full lg:mt-10 rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                    alt="office content 2"> --}}
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    BENGKULU EKSPRESS TELEVISI ONLINE</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    betv.disway.id adalah perusahaan media digital yang berdedikasi untuk menyediakan informasi
                    terkini, analisis mendalam, dan konten hiburan berkualitas melalui platform online. Kami hadir
                    dengan tujuan untuk menjadi sumber utama informasi yang relevan dan
                    terpercaya bagi pembaca di Indonesia, serta menjangkau audiens global melalui platform digital kami.
                </p>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Dengan menggabungkan teknologi mutakhir dan tim redaksi profesional, betv.disway.id menghadirkan
                    berita terkini, topik tren, dan artikel yang mengedukasi, menginspirasi, serta menghibur. Kami fokus
                    pada penyediaan berbagai jenis konten seperti berita politik, ekonomi, budaya, teknologi, kesehatan,
                    gaya hidup, dan hiburan.
                </p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    betv.disway.id
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </section>


    {{-- <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mx-auto max-w-5xl">

                <div class="my-6 md:my-12">
                    <iframe class="h-[260px] md:h-[540px] w-full rounded-lg"
                        src="https://www.youtube.com/embed/KaLxCiilHns"
                        title="Flowbite Crash Course in 20 mins | Introduction to UI components using Tailwind CSS"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="mx-auto mb-6 max-w-3xl space-y-6 md:mb-12">
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Connectivity includes two
                        Thunderbolt / USB 4 ports and two USB 3 ports (all with a USB-C connector), a 3.5 mm headphone
                        jack conveniently mounted on the left edge of the display, Wi-Fi 6 (802.11ax), and Bluetooth
                        5.0.</p>

                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">A-Grade/CR: iMacs are in 9/10
                        Cosmetic Condition and are 100% Fully Functional. iMacs will be shipped in generic packaging and
                        will contain generic accessories. 90 Days Seller Warranty Included. iMacs may show signs of wear
                        like scratches, scuffs and minor dents.</p>
                </div>
                <div class="text-center">
                    <a href="#"
                        class="mb-2 mr-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Show
                        more...</a>
                </div>
            </div>
        </div>
    </section> --}}



</x-layout>
