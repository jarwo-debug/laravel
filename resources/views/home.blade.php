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
        </div>
    </section>



    <div class="mx-auto  px-4 py-6 sm:px-6 lg:px-8">
        @if ($programs->count())
            <div class="vodMain__grid">
                <div class="vod vodhidden boxContent__box vodMain__gridTwo">
                    <div class="vod-thumb"><img width="100%" src="{{ asset('storage/' . $programs[0]->image) }}"
                            alt="{{ $programs[0]->kategori->nama }}" title="{{ $programs[0]->title }}"
                            style="max-height: 400px; overflow:hidden;">
                    </div>
                    <div class="vod-layer"></div>
                    <div class="vod-box">
                        <a href="/video/{{ $programs[0]->slug }}">
                            <div class="vod-title">
                                <h4>{{ $programs[0]->kategori->nama }}</h4>
                                <h2>{{ $programs[0]->title }}</h2>
                            </div>
                            <div class="vod-play">
                                <img src="img/icon/play-icon-white-fix.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
                <div class="vod vodhidden boxContent__box vodMain__gridTwo">
                    <div class="vod-thumb"><img width="100%" src="{{ asset('storage/' . $programs[1]->image) }}"
                            alt="{{ $programs[1]->kategori->nama }}" title="{{ $programs[1]->title }}"
                            style="max-height: 400px; overflow:hidden;">
                    </div>
                    <div class="vod-layer"></div>
                    <div class="vod-box">
                        <a href="/video/{{ $programs[1]->slug }}">
                            <div class="vod-title">
                                <h4>{{ $programs[1]->kategori->nama }}</h4>
                                <h2>{{ $programs[1]->title }}</h2>
                            </div>
                            <div class="vod-play">
                                <img src="img/icon/play-icon-white-fix.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
                <div class="vod vodhidden boxContent__box vodMain__gridTwo">
                    <div class="vod-thumb"><img width="100%" src="{{ asset('storage/' . $programs[2]->image) }}"
                            alt="{{ $programs[2]->kategori->nama }}" title="{{ $programs[2]->title }}"
                            style="max-height: 400px; overflow:hidden;">
                    </div>
                    <div class="vod-layer"></div>
                    <div class="vod-box">
                        <a href="/video/{{ $programs[2]->slug }}">
                            <div class="vod-title">
                                <h4>{{ $programs[2]->kategori->nama }}</h4>
                                <h2>{{ $programs[2]->title }}</h2>
                            </div>
                            <div class="vod-play">
                                <img src="img/icon/play-icon-white-fix.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
        @endif




    </div>
    </section>
    </div>










</x-layout>
