<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-xs text-blue-600 hover:underline"> &laquo; Back to all
                        posts</a>

                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>

                    <small class="text-muted">By<a href="/posts?author={{ $post->author->username }}"
                            class=" text-primary-600 dark:text-primary-500 hover:underline text-sm">{{ $post->author->name }}</a>
                        in
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none text-primary-600 dark:text-primary-500 hover:underline
                                    text-sm">{{ $post->category->name }}</a>
                        {{ $post->created_at->diffForHumans() }}
                    </small>
                    <img class="h-auto max-w-full mx-auto rounded-t-lg mt-4 "
                        src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                </header>
                <p>{!! $post->body !!}</p>
            </article>
        </div>
    </main>

</x-layout>
