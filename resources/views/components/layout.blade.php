<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : 'e-commerce Platform' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-blue-900 text-white p-4 capitalize font-bold">
        <div class="container mx-auto flex flex-row justify-between align-middle">
            <div>
                <h1 class="text-2xl font-bold">Job Tracker</h1>
            </div>
            <x-nav />
        </div>
    </nav>
    <main class="container mx-auto p-4">
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
