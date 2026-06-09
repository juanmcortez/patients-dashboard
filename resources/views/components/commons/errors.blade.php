@if ($errors->any())
    <div class="mb-4 rounded-md bg-red-50 border border-red-100 p-3 text-sm text-red-700">
        <div class="font-medium">{{ __('Whoops! Something went wrong.') }}</div>
        <ul class="mt-2 list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
