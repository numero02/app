<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>users</title>

</head>
<body class="dark:bg-slate-800">
    <h1 class="text-6xl font-mono dark:text-white">list of users:</h1>
    @foreach ($users as $user)
        <h1 class="dark:text-white text-3xl">{{$user->name}}</h1>
        <p class="dark:text-white text-xl">{{$user->email}}</p>
    @endforeach
</body>
</html>