<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label class="w-full form-control">
                <x-input-label for="email" value="Email" required/>
                <x-text-input
                    id="email"
                    class="block mt-1 w-full text-black dark:text-gray-400"
                    type="email"
                    name="email"
                    :value="old('email')"
                    {{-- required --}}
                    autofocus
                    autocomplete="off"
                    placeholder="Email"
                />
              </label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label class="w-full form-control">
                <x-input-label for="password" value="Password" required/>
                <x-text-input
                    id="password"
                    class="block mt-1 w-full text-black dark:text-gray-400"
                    type="password"
                    name="password"
                    {{-- required --}}
                    autocomplete="current-password"
                    placeholder="********"
                />
              </label>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end items-center mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm link dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif

            <x-button class="px-6 ms-3" type="submit">
                Log in
            </x-button>
        </div>
    </form>
</x-guest-layout>
