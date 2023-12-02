<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="dark:bg-slate-800">
    <h1  class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">Upload images</h1>

    <img class="h-auto max-w-xl rounded-lg shadow-xl dark:shadow-gray-800 h-auto max-w-lg mx-auto" src="{{ URL::to('/') }}/images/store.jpg" alt="image description">
</body>
</html>