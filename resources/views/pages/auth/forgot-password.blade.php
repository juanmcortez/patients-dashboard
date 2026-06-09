<x-layouts.guest>
    <x-commons.forms.auth-card>
        <x-slot name="logo">
            <x-commons.logo class="w-20 h-20" />
        </x-slot>

        <x-commons.errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <x-commons.forms.label for="email" :value="__('Email')" />
                <x-commons.forms.input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Back to login') }}
                </a>

                <x-commons.forms.button class="ml-3">
                    {{ __('Email Password Reset Link') }}
                </x-commons.forms.button>
            </div>
        </form>
    </x-commons.forms.auth-card>
</x-layouts.guest>
