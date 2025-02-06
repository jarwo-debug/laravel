<x-layout>
    <section>
        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">


            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    @if ($programs->count())
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('storage/' . $programs[0]->image) }}"
                                class="absolute block w-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 "
                                alt="{{ $programs[0]->kategori->nama }}">
                            <figcaption
                                class="absolute px-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white bottom-6 ">
                                <p>{{ $programs[0]->title }}</p>
                            </figcaption>
                        </div>
                    @endif

                    @foreach ($programs->skip(1) as $program)
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('storage/' . $program->image) }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="{{ $program->kategori->name }}">
                            <figcaption
                                class="absolute px-4 text-2xl font-bold tracking-tight text-gray-400 dark:text-white bottom-6  ">
                                <p class="text-center ">{{ $program->title }}</p>
                            </figcaption>
                        </div>
                    @endforeach

                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
    </section>


    <section class="bgDark sectContainer bg-gray-600 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="stTitle txtWhite vodMainTitle"></div>
            @if ($programs->count())
                <div class="vodMain__grid">
                    <div class="vod vodhidden boxContent__box vodMain__gridOne">
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
                    <div class="vod vodhidden boxContent__box vodMain__gridOne">
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
            @endif

            @foreach ($programs->skip(2) as $program)
                <div class="vod vodhidden boxContent__box vodMain__gridTwo">
                    <div class="vod-thumb"><img width="100%" src="{{ asset('storage/' . $program->image) }}"
                            alt="{{ $program->kategori->nama }}" title="{{ $program->title }}">
                    </div>
                    <!--
                    
                    -->
                    <div class="vod-layer"></div>
                    <div class="vod-box">
                        <a href="/video/{{ $program->slug }}">
                            <div class="vod-title">
                                <h4>{{ $program->kategori->nama }}</h4>
                                <h2>{{ $program->title }}</h2>
                            </div>
                            <div class="vod-play">
                                <img src="img/icon/play-icon-white-fix.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

    </section>







    <script>
        $(document).ready(function() {

            $('.hmorex').click(function() {
                var row = Number($('#row').val());
                var allcount = Number($('#all').val());
                row = row + 3;

                if (row <= allcount) {
                    $("#row").val(row);

                    $.ajax({
                        url: 'https://www.transtv.co.id/video/a263b77d700565bad6934ed1c124c4da6',
                        type: 'post',
                        data: {
                            row: row
                        },
                        beforeSend: function() {
                            $('.hmorex').css("background", "#343434");
                            $(".hmorex").html("<div class='loader'></div>");

                        },
                        success: function(response) {

                            setTimeout(function() {

                                $(".post:last").after(response).show().fadeIn("slow");

                                var rowno = row + 3;

                                if (rowno > allcount) {

                                    $('.hmorex').text("Hide");
                                    $('.hmorex').css("background", "darkorchid");
                                } else {
                                    $(".hmorex").text("MORE");
                                    $('.hmorex').css("background", "#f5b500");
                                }
                            }, 2000);


                        }
                    });
                } else {

                    $(".hmorex").html("<div class='loader'></div>");

                    setTimeout(function() {

                        $('.post:nth-child(3)').nextAll('.post').remove().fadeIn("slow");

                        $("#row").val(0);

                        $('.hmorex').text("MORE");
                        $('.hmorex').css("background", "#f5b500");

                    }, 2000);


                }

            });

        });
    </script>
    <style>
        .hmorex {
            width: 125px;
            display: block;
            text-align: center;
            background: #f5b500;
            padding: 10px;
            margin: 0 auto;
            font-size: 20px;
            font-weight: 700;
            color: #000;
            font-family: "Barlow";
        }

        .hmorex:hover {
            cursor: pointer;
        }

        .loader {
            border: 21px solid #f3f3f3;
            border-radius: 50%;
            border-top: 21px solid #000000;
            width: 35px;
            height: 35px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
            margin-left: auto;
            margin-right: auto;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <script type="text/javascript" src="js/main.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
</x-layout>
