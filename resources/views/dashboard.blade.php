{{-- resources/views/dashboard.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Customer Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    {{ __("You're logged in as a Customer!") }}
                    <p class="mt-4">Welcome to Cineplex!</p>
                    {{-- Di sini nanti bisa ditambahkan daftar film, promosi, dll untuk customer --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>