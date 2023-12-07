<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title', 'Aleks Rutins')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="flex flex-row w-screen h-screen bg-white font-sans" x-data="{ sidebarOpen: false }">
    <x-sidebar/>
    <div class="flex-grow transition-[margin,filter] ml-[84px]" :class="{'pointer-events-none blur': sidebarOpen}">
        @yield('content')
    </div>
    @livewireScripts
</body>
</html>
