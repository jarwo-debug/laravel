<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <?php
    $videoURL = "$program->url_link";
    $convertedURL = str_replace('watch?v=', 'embed/', $videoURL);
    
    ?>


    <body>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <div
                class="w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">

                <iframe class="aspect-video w-full rounded-lg " src="{{ $convertedURL }}" frameborder="0" allowfullscreen
                    allow="autoplay"></iframe>


                <div class="p-5 vodDetail__wrapper">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $program->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $program->description }}</p>

                </div>
            </div>
        </div>



    </body>




</x-layout>
