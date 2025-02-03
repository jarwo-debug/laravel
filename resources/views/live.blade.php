<x-layout>

    <body>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <video id="video" width='100%' height='100%' controls autoplay
                src="https://live.betvbeken.com/hls/betv.m3u8">
            </video>
        </div>
        <script src="//cdn.jsdelivr.net/npm/hls.js@1"></script>
        <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                var video = document.getElementById('video');

            })
        </script>
        <script>
            if (Hls.isSupported()) {
                var video = document.getElementById('video');
                var hls = new Hls();
                hls.loadSource(video.src);
                hls.attachMedia(video);
            } else {
                alert("Cannot stream HLS, use another video source");
            }
        </script>

        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">LIVE STREAMING BENGKULU
                EKSPRES
                TELEVISI</h2>
            <p class="mb-4">Live Streaming BETV di website ini kami sediakan bagi Anda pemirsa setia
                siaran stasiun tv BETV, kapanpun dan dimana saja berada tanpa dipungut biaya berlangganan.
                Pastikan kuota dan koneksi internet anda terhubung dengan baik untuk bisa menikmati nonton tv online
                melalui live streaming tv. </p>
            <p>Mohon bagi para orang tua untuk bisa memperhatikan dengan baik ketentuan batas usia tayangan untuk anak
                dan remaja. Saran dan kritik senantiasa kami nantikan untuk bisa menjadikan BETV sebagai stasiun tv
                lokal yang terpercaya dan terdepan bagi seluruh keluarga Indonesia.

            </p>
            <p>
                BETV menghadirkan ragam dan jenis tayangan inovatif, informatif, edukatif sekaligus menghibur.
                BETV hadir di tengah masyarakat Bengkulu sebagai salah satu sumbangsih terhadap perkembangan
                potensi wilayah lokal dari sisi pendidikan, pariwisata, olahraga, seni, budaya serta nilai nilai
                tradisional dan religi yang memiliki nilai kebanggaan tersendiri dan diharapkan dapat diterima
                dihati masyarakat.
            </p>
        </div>
    </body>

</x-layout>
