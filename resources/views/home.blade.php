<x-layout>
    <main class="w-full flex flex-col items-center">
        {{-- Header --}}
        <x-header />

        <section class="bg-white flex flex-col rounded-xl md:w-3/4 gap-y-6 -mt-10 p-4 shadow-lg mx-6 md:mx-0 mb-6">
            {{-- Jobs view --}}
            <div class="flex justify-between w-full">
                <div class="flex gap-x-2">
                    <h1 class="text-xl font-medium">Latest Jobs</h1>
                    @if (request('tag'))
                        <a href="/"
                            class="flex items-center bg-gray-200 rounded-lg py-1 pl-1 pr-3 mr-2 text-xs hover:bg-blue-500 transition-colors hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-x" viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            {{ request('tag') }}
                        </a>
                    @endif
                </div>
                <p>{{ count($posts) }} results found</p>
            </div>

            @unless (count($posts) == 0)
                @foreach ($posts as $post)
                    <x-job-card :post="$post" />
                @endforeach
            @else
                <h1>No posts</h1>
            @endunless

        </section>

        {{-- Buttons in top right corner --}}
        <div class="absolute top-4 right-4 flex gap-x-2">

            <form action="/logout" method="POST">
                @csrf
                <button
                    class="text-white underline underline-offset-2 rounded-md h-full px-4 py-2 text-md">Logout</button>
            </form>

            <a href="/create-job"
                class="bg-white text-blue-500 rounded-md h-full px-4 py-2 text-md transition-opacity hover:opacity-80">Post
                a Job</a>
        </div>
    </main>
</x-layout>
