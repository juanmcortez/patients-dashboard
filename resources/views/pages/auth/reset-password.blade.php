<x-layouts.guest>
    <x-commons.forms.auth-card>
        <x-slot name="logo">
            <x-commons.logo class="w-20 h-20" />
        </x-slot>

        <x-commons.errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div>
                <x-commons.forms.label for="email" :value="__('Email')" />
                <x-commons.forms.input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-commons.forms.label for="password" :value="__('Password')" />
                <x-commons.forms.input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <div class="mt-4">
                <x-commons.forms.label for="password_confirmation" :value="__('Confirm Password')" />
                <x-commons.forms.input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-commons.forms.button>
                    {{ __('Reset Password') }}
                </x-commons.forms.button>
            </div>
        </form>
    </x-commons.forms.auth-card>
</x-layouts.guest>
