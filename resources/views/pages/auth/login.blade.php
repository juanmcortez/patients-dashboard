<x-layouts.guest>
    <x-commons.forms.auth-card>
        <x-slot name="logo">
            <x-commons.logo class="w-20 h-20" />
        </x-slot>

        <x-commons.errors class="mb-4" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Login: username or email -->
            <div>
                <x-commons.forms.label for="username" :value="__('Username or Email')" />
                <x-commons.forms.input id="username" class="block mt-1 w-full" type="text" name="username"
                    :value="old('username')" required autofocus />
            </div>

            <div class="mt-4">
                <x-commons.forms.label for="password" :value="__('Password')" />
                <x-commons.forms.input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember" class="inline-flex items-center">
                    <input id="remember" type="checkbox" name="remember" class="rounded">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>

                <x-commons.forms.button class="ml-3">
                    {{ __('Log in') }}
                </x-commons.forms.button>
            </div>
        </form>
    </x-commons.forms.auth-card>
</x-layouts.guest>
