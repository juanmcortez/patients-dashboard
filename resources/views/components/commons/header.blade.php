@props(['sidebarOpen' => true])

<header class="fixed top-0 left-0 right-0 h-16 bg-white border-b border-gray-200 z-30">
    <div class="flex items-center justify-between h-full px-4 lg:px-6">
        <div class="flex items-center gap-4">
            <button @click="sidebarOpen = !sidebarOpen" class="p-2 text-gray-500 hover:text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" type="button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            <a href="{{ route('dashboard') }}" class="text-lg font-semibold text-gray-900">
                {{ config('app.name', 'Patients Dashboard') }}
            </a>
        </div>
    </div>
</header>
