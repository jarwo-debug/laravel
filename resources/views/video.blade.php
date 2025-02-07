<x-layout>

    <section class="bgDark sectContainer bg-gray-600 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="stTitle txtWhite vodMainTitle">TOP VIDEOS</div>
            <div class="vodMain__grid">


                <div class="vod vodhidden boxContent__box vodMain__gridOne">
                    <div class="vod-thumb"><img width="100%"
                            src="https://www.transtv.co.id/b80f837c8e0e19dee436622f4ff6936f/program_episodik_dff5fdf39b050783e08004c60723d97e/trans-tv-rumpi-guntur-triyoga-apris.jpg"
                            alt="Rumpi (No Secret)" title="Ini Dia, Melaney Ricardo Setelah Sembuh dari Covid-19">
                    </div>
                    <div class="vod-layer"></div>
                    <div class="vod-box">
                        <a href="program/episode/6614/ini-dia-melaney-ricardo-setelah-sembuh-dari-covid-19">
                            <div class="vod-title">
                                <h4>Rumpi (No Secret)</h4>
                                <h2>Ini Dia, Melaney Ricardo Setelah Sembuh dari Covid-19</h2>
                            </div>
                            <div class="vod-play">
                                <img src="layout/ttvnew/src/images/icon/play-icon-white-fix.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>

                <div class="vod vodhidden boxContent__box vodMain__gridOne">
                    <div class="vod-thumb"><img width="100%"
                            src="https://www.transtv.co.id/b80f837c8e0e19dee436622f4ff6936f/program_episodik_dff5fdf39b050783e08004c60723d97e/trans-tv-rumpi-guntur-triyoga-apris.jpg"
                            alt="Nyonya Boss" title="Aduh, Peliharaan Kesayangan Sakit">
                    </div>

                    <div class="vod-layer"></div>
                    <div class="vod-box">
                        <a href="program/episode/6613/aduh-peliharaan-kesayangan-sakit">
                            <div class="vod-title">
                                <h4>Nyonya Boss</h4>
                                <h2>Aduh, Peliharaan Kesayangan Sakit</h2>
                            </div>
                            <div class="vod-play">
                                <img src="layout/ttvnew/src/images/icon/play-icon-white-fix.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>


                <div class="vod vodhidden boxContent__box vodMain__gridTwo">
                    <div class="vod-thumb"><img width="100%"
                            src="https://www.transtv.co.id/b80f837c8e0e19dee436622f4ff6936f/program_episodik_6a7ad45482b980156a18da91480c45d7/trans-tv-katakan-putus-rasa-sahabat.jpg"
                            alt="Bioskop BETV" title="Last Hero in China">
                    </div>
                    <!--
                    
                    -->
                    <div class="vod-layer"></div>
                    <div class="vod-box">
                        <a href="program/episode/6611/last-hero-in-china">
                            <div class="vod-title">
                                <h4>Bioskop BETV</h4>
                                <h2>Last Hero in China</h2>
                            </div>
                            <div class="vod-play">
                                <img src="layout/ttvnew/src/images/icon/play-icon-white-fix.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
                <div class="vod vodhidden boxContent__box vodMain__gridTwo">
                    <div class="vod-thumb"><img width="100%"
                            src="https://www.transtv.co.id/b80f837c8e0e19dee436622f4ff6936f/program_episodik_27f432a4320c4bd81f6f5c5bd5ba8a29/trans-tv-sketsa-masker-kelamaan.jpg"
                            alt="Bioskop BETV" title="John Wick">
                    </div>
                    <!--
                    
                    -->
                    <div class="vod-layer"></div>
                    <div class="vod-box">
                        <a href="program/episode/5028/john-wick">
                            <div class="vod-title">
                                <h4>Bioskop BETV</h4>
                                <h2>John Wick</h2>
                            </div>
                            <div class="vod-play">
                                <img src="layout/ttvnew/src/images/icon/play-icon-white-fix.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
                <div class="vod vodhidden boxContent__box vodMain__gridTwo">
                    <div class="vod-thumb"><img width="100%"
                            src="https://www.transtv.co.id/b80f837c8e0e19dee436622f4ff6936f/program_episodik_7bc06cb3b33154a1f2a92a1a6d575597/trans-tv-supir-bajaj-berbagi-rezeki.jpg"
                            alt="Favorite TV Show" title="JOHN PANTAU: Pengemis Gadungan">
                    </div>
                    <!--
                    
                    -->
                    <div class="vod-layer"></div>
                    <div class="vod-box">
                        <a href="program/episode/6610/john-pantau-pengemis-gadungan">
                            <div class="vod-title">
                                <h4>Favorite TV Show</h4>
                                <h2>JOHN PANTAU: Pengemis Gadungan</h2>
                            </div>
                            <div class="vod-play">
                                <img src="layout/ttvnew/src/images/icon/play-icon-white-fix.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
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
