@props(['post'])

<main class="flex w-full flex-col gap-y-4 border rounded-lg p-4">
    <div class="flex gap-x-5 items-center w-full">
        <img class="w-20 h-20 rounded-lg object-contain"
            src="{{ $post->logo ? asset('storage/' . $post->logo) : asset('images/no-image.png') }}" alt="img" />

        <div class="flex flex-col gap-y-2 flex-1">
            <p class="text-sm">{{ $post->company }}</p>
            <h2 class="text-md font-medium">{{ $post->title }}</h2>
            <x-post-tags :tagsCsv="$post->tags" />
        </div>

        {{-- Buttons --}}
        <a href="/posts/{{ $post->id }}"
            class="bg-gray-200 rounded-md px-4 py-2 text-md transition-colors hover:bg-blue-500 hover:text-white">View
            Job
        </a>
    </div>

    <p class="text-gray-500 text-sm line-clamp-3 leading-6">{{ $post->description }}</p>
</main>
