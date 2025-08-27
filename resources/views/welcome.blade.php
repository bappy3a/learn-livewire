<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Livewire Project</title>
    
    @livewireStyles
</head>
<body>
    <h1>Welcome to livewire project </h1>
    
    @livewire('post', ['name' => 'Sunno Bappy'])

    {{-- <livewire:post/> --}}
    @livewireScripts
</body>
</html>