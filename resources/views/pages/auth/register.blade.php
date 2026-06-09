<x-layouts.guest>
    <x-commons.forms.auth-card>
        <x-slot name="logo">
            <x-commons.logo class="w-20 h-20" />
        </x-slot>

        <x-commons.errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-commons.forms.label for="name" :value="__('Name')" />
                <x-commons.forms.input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-commons.forms.label for="username" :value="__('Username')" />
                <x-commons.forms.input id="username" class="block mt-1 w-full" type="text" name="username"
                    :value="old('username')" />
                <p class="text-sm text-gray-500 mt-1">{{ __('Use letters, numbers, dashes or underscores.') }}</p>
            </div>

            <div class="mt-4">
                <x-commons.forms.label for="email" :value="__('Email')" />
                <x-commons.forms.input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-commons.forms.label for="password" :value="__('Password')" />
                <x-commons.forms.input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-commons.forms.label for="password_confirmation" :value="__('Confirm Password')" />
                <x-commons.forms.input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-commons.forms.button class="ml-4">
                    {{ __('Register') }}
                </x-commons.forms.button>
            </div>
        </form>
    </x-commons.forms.auth-card>
</x-layouts.guest>
