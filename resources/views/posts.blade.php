<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">

            <form>
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="search"
                            class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>

                        </div>
                        <input
                            class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search for article" type="search" id="search" name="search"
                            autocomplete="off">
                    </div>
                    <div>
                        <button type="submit"
                            class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                    </div>
                </div>

            </form>
        </div>
    </div>



    <div class=" mx-auto max-w-screen-xl lg:py-0 lg:px-0">


        @if ($posts->count())

            <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                @if ($posts[0]->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <a href="/posts/{{ $posts[0]->slug }}">
                            <img class="h-auto max-w-full mx-auto rounded-t-lg mt-4 "
                                src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
                        </a>
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400{{ $posts[0]->category->name }}"
                        alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">
                @endif
                <div class="p-0">
                    <a href="/posts/{{ $posts[0]->slug }}">
                        <h5 class="mb-3 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $posts[0]->title }}</h5>
                    </a>
                    <p class="text-center px-5">
                        <small class="text-muted">By <a href="/posts?author={{ $posts[0]->author->username }}"
                                class=" text-primary-600 dark:text-primary-500 hover:underline text-sm">{{ $posts[0]->author->name }}</a>
                            in
                            <a href="/posts?category={{ $posts[0]->category->slug }}"
                                class="text-decoration-none text-primary-600 dark:text-primary-500 hover:underline
                                text-sm">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="mb-3 text-center font-normal text-gray-700 dark:text-gray-400">
                        {{ $posts[0]->excerpt }}
                    </p>
                    <p class="text-center">
                        <a href="/posts/{{ $posts[0]->slug }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                        </a>
                    </p>
                </div>
            </div>
        @else
            <div>
                <p class="font-semibold text-xl my-4">Article not found!</p>
                <a href="/posts"class="block text-blue-600 hover:underline">&laquo; Back to all posts</a>
            </div>
        @endif



        <div class="my-4 py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
            <article>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($posts->skip(1) as $post)
                        <div
                            class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700"">
                            <a href="/posts?category={{ $post->category->slug }}">
                                <span
                                    class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 ">

                                    {{ $post->category->name }}
                                </span>
                            </a>
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $post->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By. <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none text-primary-600 dark:text-primary-500 hover:underline text-sm">{{ $posts[0]->author->name }}</a>
                                        {{ $posts[0]->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </article>

        </div>

        <div class="my-4 py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
            {{ $posts->links() }}
        </div>




</x-layout>
