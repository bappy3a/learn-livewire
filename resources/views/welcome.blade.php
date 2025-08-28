<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Livewire Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <h1 class="text-3xl font-bold text-blue-600 text-center mt-8 mb-2.5">Welcome to livewire project </h1>


    <form class="mx-auto columns-3 p-20">
        @livewire('division-select')
        @livewire('district-select')
        @livewire('upazila-select')
    </form>



    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>