<x-layout>
    <main class="flex justify-center items-center my-20 z-20 relative">
        <div class="border bg-gray-50 p-10 rounded w-1/2 shadow-xl">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-8">
                    Create a job post
                </h2>
            </header>

            <form method="POST" action="/post-job" enctype="multipart/form-data" class="flex flex-col gap-y-6 text-lg">
                @csrf
                <div>
                    <label for="company" class="inline-block mb-2">Company Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                        value="{{ old('company') }}" placeholder="e.g. Nova Nordisk" />

                    @error('company')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="title" class="inline-block mb-2">Job Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        placeholder="e.g. Senior Laravel Developer" value="{{ old('title') }}" />
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="location" class="inline-block mb-2">Job Location</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                        placeholder="e.g. Copenhagen, Denmark" value="{{ old('location') }}" />
                    @error('location')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="inline-block mb-2">Contact Email</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value="{{ old('email') }}" placeholder="e.g. brian@gmail.com" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="website" class="inline-block mb-2">
                        Website/Application URL
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                        value="{{ old('website') }}" placeholder="e.g. http://test.com" />
                    @error('website')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="tags" class="inline-block mb-2">
                        Tags (Comma Separated)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('tags') }}" />
                    @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="logo" class="inline-block mb-2">
                        Company Logo
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                </div>

                <div>
                    <label for="description" class="inline-block mb-2">
                        Job Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                        placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center gap-x-4 text-lg">
                    <button
                        class="bg-laravel text-white rounded-lg py-3 px-4 hover:opacity-80 transition-opacity bg-blue-500 flex-1">
                        Create Gig
                    </button>

                    <a href="/" class="text-black"> Back </a>
                </div>
            </form>
        </div>
    </main>

    {{-- Background --}}
    <div class="bg-blue-500 absolute top-0 left-0  right-0 h-[60vh] z-0"></div>
</x-layout>
