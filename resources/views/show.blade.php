<x-layout>
    <div class="mx-4 relative z-50">
        <div class="p-10 flex justify-center">
            <div class="flex flex-col items-center justify-center text-center w-full">
                <img class="w-48 mr-6 mb-6"
                    src="{{ $post->logo ? asset('storage/' . $post->logo) : asset('images/no-image.png') }}"
                    alt="" />

                <h3 class="text-2xl mb-2">{{ $post->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $post->company }}</div>

                {{-- Tags --}}
                <x-post-tags :tagsCsv="$post->tags" />

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $post->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>

                {{-- Job description --}}
                <section class="flex flex-col w-full">
                    <h3 class="text-3xl font-bold text-left mb-1">
                        Job Description
                    </h3>
                    <div class="bg-blue-500 w-20 h-1 rounded-sm mb-4"></div>

                    <div class="text-lg space-y-6 flex flex-col w-full items-center">
                        <p class="text-left text-base leading-8 mb-4 w-full">
                            {{ $post->description }}
                        </p>

                        <a href="mailto:{{ $post->email }}"
                            class="bg-gray-200 mt-6 py-2 transition-opacity rounded-xl hover:opacity-80 w-2/5">
                            <i class="fa-solid fa-envelope mr-2"></i>
                            Contact Employer</a>

                        <a href="{{ $post->website }}" target="_blank"
                            class="bg-blue-500 text-white py-2 rounded-xl hover:opacity-80 transition-opacity w-2/5">
                            <i class="fa-solid fa-globe mr-2"></i>
                            Visit Website</a>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- Edit and Delete button --}}
    @if ($post->user_id == auth()->user()->id)
        <div class="flex space-x-6 absolute top-6 right-6 z-50">
            <a href="/posts/{{ $post->id }}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i>
                    Delete
                </button>
            </form>
        </div>
    @endif

    <a href="/" class="absolute left-6 top-6 cursor-pointer z-50">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
</x-layout>
