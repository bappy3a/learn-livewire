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
    <h1 style="text-align: center;">Welcome to livewire project </h1>
    
    {{-- @livewire('post', ['name' => 'Sunno Bappy']) --}}

    {{-- @livewire('category')
    <br>
    @livewire('category-list') --}}
    {{-- <livewire:post/> --}}



    @livewire('category-select')
    <livewire:sub-category-select />
    

    @livewireScripts
</body>
</html>