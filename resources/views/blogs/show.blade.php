<x-layout title="Blog | {{ config('app.name') }}" section-name="{{ $blog['title'] }}">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-8">
            <article class="block rounded-lg p-4 shadow-sm shadow-indigo-100">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-4">
                        <img alt=""
                            src="https://images.unsplash.com/photo-1614644147724-2d4785d69962?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80"
                            class="size-16 rounded-full object-cover" />

                        <div>
                            <h3 class="text-lg font-medium">{{ $blog->user->name }}</h3>

                            <span
                                class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-xs text-purple-600 dark:bg-purple-600 dark:text-purple-100">
                                {{ $blog->category->name }}
                            </span>
                        </div>
                    </div>
                    <a class="inline-block rounded border border-gray-600 bg-gray-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-gray-600 focus:outline-none focus:ring active:text-gray-500"
                        href="{{ route('blogs.index') }}">
                        Back
                    </a>
                </div>
                <img alt=""
                    src="{{ $blog->image ?? 'https://images.unsplash.com/photo-1613545325278-f24b0cae1224?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80' }}"
                    class="h-56 w-full rounded-md object-cover" />

                <div class="mt-2">
                    <p class="text-pretty text-sm text-gray-500">
                        {{ $blog['content'] }}
                    </p>
                </div>
            </article>
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
