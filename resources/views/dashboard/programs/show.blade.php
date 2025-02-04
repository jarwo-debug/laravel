@extends('dashboard.layouts.main')

@section('container')
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/dashboard/programs" class="font-medium text-xs text-blue-600 hover:underline"> &laquo; Back to
                        all
                        programs</a>

                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $program->title }}</h1>


                    <img class="h-auto max-w-full mx-auto rounded-t-lg mt-4 " src="{{ asset('storage/' . $program->image) }}"
                        alt="{{ $program->kategori->nama }}">

                </header>
                <p>{!! $program->description !!}</p>
            </article>
        </div>
    </main>
@endsection
