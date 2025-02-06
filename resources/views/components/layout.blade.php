<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" href="css/styledashboard.css"> --}}
    <link rel="stylesheet" href="css/vod.min.css">
    {{-- <link rel="stylesheet" href="css/vod-v1.min.css"> --}}

    <link rel="stylesheet" href="css/swiper.min.css" />
    {{-- <link rel="stylesheet" href="css/styles.min.css" /> --}}

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/custom.min.js"></script>

    <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />



    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet"> --}}

</head>

<body class="h-full">



    <x-navbar>

    </x-navbar>

    {{-- <x-header>{{ $title }}</x-header> --}}

    <main>
        {{-- <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8"> --}}
        <div>
            {{ $slot }}
        </div>
    </main>
    </div>

</body>

<x-footer>

</x-footer>

</html>
