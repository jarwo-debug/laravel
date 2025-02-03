<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl">Ini adalah halaman Home Page</h3> --}}
    <!-- MAIN VIDEO -->
    <header class="bg-white shadow">
        <section>
            <div class="">
                <div class="main-video">
                    <div class="video-head">

                        <video class="video-poster video-poster-desk" src="img/betv.mp4" autoplay="" loop=""
                            playsinline="" muted=""></video>
                        <video class="video-poster video-poster-mobile" src="img/betv.mp4" autoplay="" loop=""
                            playsinline="" muted=""></video>
                        <div class="video-title vt-mobile">
                            <a href="">
                            </a>

                            <div class="scroll__down">
                                <a href="#wrap__all">
                                    <img src="img/arrowd.png" alt="">
                                </a>
                            </div>
                            <script>
                                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                                    anchor.addEventListener('click', function(e) {
                                        e.preventDefault();

                                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                                            behavior: 'smooth'
                                        });
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header> <!-- video header-->

    <section>
        <div class="wrapper-all" id="wrap__all">
            <!-- MAIN CONTENT -->
            <section class="main-content">

                <div class="main-content-box">
                    <a href="#"><img width="100%" src="img/betv-banner-new.jpg"></a>
                </div>
                <div class="main-content-box">
                    <div class="mc-schedule">
                        <img width="100%" src="img/bgschedule.png" alt="schedule" title="schedule">
                        <div class="mc-schedule-box">
                            <div class="mc-schedule-title">
                                <h2>schedule</h2>
                                <h4>November 2020</h4>
                            </div>
                            <div id="style-3" class="mc-schedule-list">
                                <!-- SCHEDULE -->
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>08:00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">Ngopi Khas Bengkulu</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>10.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>LEJEL</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>12.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR METROPOLIS RE RUN</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>12.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>BEKASUS RE RUN</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>13.OO</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR DAERAH RE RUN</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>14.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="program/141/safana">EKSMUS</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>15.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="program/56/insert">KANG DUL CARI TAU</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>15.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KOMEDI SEMAKU</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>16.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">BETANDANG</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>16.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR REJANG </h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>17.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR METROPOLIS LIVE</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>17:30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">SYIAR </a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>18:00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">ADZAN MAGHRIB / LAGU RELIGI</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>18.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">BEKASUS</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>19.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR DAERAH</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>20.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>BENGKULU TALK SHOW</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>21.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>BETANDANG</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>21.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR REJANG</h4>
                                        <p></p>
                                    </div>
                                    <!-- </div><div class="mc-schedule-item">
                            <div class="hours">
                                <h4>02:30</h4>
                            </div>
                            <div class="name-program"><h4>CNN INDONESIA CONNECTED</h4><p></p>
                            </div>
                            </div>							SCHEDULE -->
                                </div>
                            </div>
                            <div class="mc-schedule-link">
                                <a href="schedule">
                                    <p>FULL SCHEDULE</p>
                                    <img src="img/icon/play-icon-pink.png" alt="schedule" title="schedule">
                                </a>
                            </div>
            </section>

            {{-- <section class="bg-white ">
                <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24 ">
                    <div class="max-w-3xl mx-auto text-center">
                        <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
                            Schedule
                        </h2>

                        <div class="mt-4">
                            <a href="#" title=""
                                class="inline-flex items-center text-lg font-medium text-primary-600 hover:underline dark:text-primary-500">
                                Learn more about our agenda
                                <svg aria-hidden="true" class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
                        <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    08:00 - 09:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Opening remarks</a>
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    09:00 - 10:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Bergside LLC: Controlling the video
                                        traffic
                                        flows</a>
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    10:00 - 11:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Flowbite - An Open Framework for
                                        Forensic
                                        Watermarking</a>
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    11:00 - 12:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Coffee Break</a>
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    12:00 - 13:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Scaling your brand from €0 to
                                        multimillion
                                        euros</a>
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    13:00 - 14:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Updates from the Open Source
                                        Multimedia
                                        community</a>
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    14:00 - 15:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Exploring the balance between
                                        customer
                                        acquisition and retention</a>
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    15:00 - 16:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Flowbite - An Open Framework for
                                        Forensic
                                        Watermarking</a>
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    16:00 - 14:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Scaling your brand from €0 to
                                        multimillion
                                        euros</a>
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p
                                    class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                    17:00 - 14:00
                                </p>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Drinks & networking</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}










</x-layout>
