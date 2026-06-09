@props(['user'])

<aside
    x-show="sidebarOpen"
    class="fixed top-0 left-0 bottom-0 w-64 bg-white border-r border-gray-200 z-20 flex flex-col transition-all duration-300"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
>
    <nav class="flex-1 overflow-y-auto pt-20 px-3 space-y-1">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-indigo-700 bg-indigo-50 rounded-lg">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            <span>{{ __('Dashboard') }}</span>
        </a>
    </nav>

    <div class="border-t border-gray-200 p-3 space-y-1">
        <a href="{{ route('profile') }}" class="flex items-center gap-3 w-full px-3 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
            <div class="w-8 h-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-sm font-medium shrink-0">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div class="min-w-0 flex-1">
                <p class="text-sm font-medium text-gray-900 truncate">{{ $user->name }}</p>
                <p class="text-xs text-gray-500 truncate">{{ $user->email }}</p>
            </div>
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center gap-3 w-full px-3 py-2.5 text-sm font-medium text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>{{ __('Log out') }}</span>
            </button>
        </form>
    </div>
</aside>
