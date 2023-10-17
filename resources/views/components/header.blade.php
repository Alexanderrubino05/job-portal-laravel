<header class="bg-blue-500 h-[60vh] w-full flex justify-center items-center">
    <div class="px-4 md:px-0 md:w-1/2 flex flex-col items-center justify-center gap-y-6">

        <h1 class="text-white text-4xl font-semibold text-center">Find your dream developer job</h1>
        <p class="text-gray-300 text-md font-light text-center">
            Are you looking for the perfect job or the ideal candidate? Apply or post a developer job, to
            attract candidates.
        </p>

        <form action="/" class="w-full bg-white rounded-lg p-2 flex gap-x-2 items-center text-sm">
            {{-- Search Icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="14px" height="14px" fill="#9CA3AF">
                <path
                    d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z" />
            </svg>

            <input name="search" type="text" placeholder="Job title" class="flex-1 outline-none"
                value="{{ request('search') ?? '' }}" />
            <button type="submit"
                class="bg-blue-500 text-white rounded-md h-full px-4 py-2 transition-opacity hover:opacity-90">Search</button>
        </form>
    </div>
</header>
