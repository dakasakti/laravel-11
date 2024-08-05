<x-layout title="Blogs | {{ config('app.name') }}" section-name="From the blog">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-8">
            @foreach ($blogs as $blog)
                <div class="mb-5">
                    <article class="flex bg-white transition hover:shadow-xl dark:bg-gray-900 dark:shadow-gray-800/25">
                        <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                            <time datetime="{{ $blog->published_at }}"
                                class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900 dark:text-white">
                                <span>{{ $blog->published_at->format('Y') }}</span>
                                <span class="w-px flex-1 bg-gray-900/10 dark:bg-white/10"></span>
                                <span>{{ $blog->published_at->format('M d') }}</span>
                            </time>
                        </div>

                        <div class="hidden sm:block sm:basis-56">
                            <img alt=""
                                src="{{ $blog->image ?? 'https://images.unsplash.com/photo-1609557927087-f9cf8e88de18?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80' }}"
                                class="aspect-square h-full w-full object-cover" />
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div
                                class="border-s border-gray-900/10 p-4 sm:!border-l-transparent sm:p-6 dark:border-white/10">
                                <a href="{{ route('blogs.show', $blog->slug) }}">
                                    <h3 class="font-bold uppercase text-gray-900 dark:text-white">
                                        {{ $blog->title }}
                                    </h3>
                                </a>

                                <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 dark:text-gray-200">
                                    {{ $blog->content }}
                                </p>
                            </div>

                            <div class="sm:flex sm:items-end sm:justify-end">
                                <a href="{{ route('blogs.show', $blog->slug) }}"
                                    class="block bg-yellow-400 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-500">
                                    Read Blog
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach

            {{ $blogs->links() }}
        </div>
        <div class="col-span-12 md:col-span-4">
            <h2 class="text-2xl font-bold leading-9 tracking-tight text-gray-900 border-b-2 border-sky-500">Popular Blog
            </h2>
            <div class="mt-3">
                <article
                    class="hover:animate-background rounded-xl bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 p-0.5 shadow-xl transition hover:bg-[length:400%_400%] hover:shadow-sm hover:[animation-duration:_4s] dark:shadow-gray-700/25">
                    <div class="rounded-[10px] bg-white p-2 sm:p-4 dark:bg-gray-900">
                        <time datetime="2022-10-10" class="block text-xs text-gray-500 dark:text-gray-400">
                            10th Oct 2022
                        </time>

                        <a href="#">
                            <h3
                                class="mt-0.5 text-lg font-medium text-gray-900 dark:text-white overflow-hidden text-ellipsis whitespace-nowrap">
                                How to center an element using JavaScript and jQuery
                            </h3>
                        </a>

                        <div class="mt-2 flex flex-wrap gap-1">
                            <span
                                class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-xs text-purple-600 dark:bg-purple-600 dark:text-purple-100">
                                Snippet
                            </span>

                            <span
                                class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-xs text-purple-600 dark:bg-purple-600 dark:text-purple-100">
                                JavaScript
                            </span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

</x-layout>
