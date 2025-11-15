<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Livewire App' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body>
    @include('components.header')

    <main class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        {{ $slot }}
    </main>

    @include('components.footer')

    @livewireScripts
</body>
</html>
