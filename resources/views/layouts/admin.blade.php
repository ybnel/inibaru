{{-- resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cineplex') }} - Admin</title>

        <!-- Fonts & Scripts -->
    
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="relative flex size-full min-h-screen flex-col bg-[#1e2228] dark group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
                <div class="gap-1 px-6 flex flex-1 justify-center py-5">
                    
                    {{-- Include Sidebar --}}
                    @include('layouts.partials.admin-sidebar') {{-- Pastikan file ini ada --}}

                    {{-- Konten Utama --}}
                    <main class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        {{-- Ini adalah tempat di mana konten dari halaman anak akan dimasukkan --}}
                        @yield('content')
                    </main>

                </div>
            </div>
        </div>
    </body>
</html>