<x-layout>
    <div class="p-8 flex items-center justify-center h-screen">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded-lg w-1/2">
            <header class="text-center">
                <h2 class="text-2xl font-semibold mb-6">
                    Login
                </h2>
            </header>

            <form action="/login" class="flex flex-col gap-y-6 text-lg" method="POST">
                @csrf
                <div>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                        placeholder="Email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                        placeholder="Password" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="bg-laravel text-white rounded py-2 px-4 bg-blue-500 w-full transition-opacity hover:opacity-80">
                        Login
                    </button>
                </div>

                <div class="mt-2">
                    <p>
                        Don't have an account?
                        <a href="/register" class="text-laravel text-blue-500">Sign up</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout>
