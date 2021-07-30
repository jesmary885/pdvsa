<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SISCONF') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        {{-- datetimepicker --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('datetimepicker/build/jquery.datetimepicker.css')}}"> --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
         {{-- datetimepicker --}}
        {{-- <script src="{{asset('datetimepicker/build/jquery.datetimepicker.full.min.js')}}"></script> --}}
        <script src="https://unpkg.com/moment"></script>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
        {{--JQuery--}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
      

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @livewireScripts

        @stack('script')
        
    </body>
</html>
