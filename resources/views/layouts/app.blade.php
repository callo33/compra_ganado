<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            <div class="container">

                <div class="grid md:grid-cols-4">

                    <!-- <div class="md:col-span-1 lg:col-span-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam optio amet sapiente nesciunt enim deleniti quas eum aliquam magni expedita. Laboriosam, neque eos! Repudiandae, suscipit quis aspernatur incidunt libero fugiat.</div>
                    <div class="md:col-span-2 lg:col-span-2">

                        {{ $slot }}
                    </div> -->
                    <div class="md:col-span-1">1</div>
                    <div class="md:col-span-1">2</div>
                    <div class="md:col-span-1">3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>

                </div>
            </div>
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>