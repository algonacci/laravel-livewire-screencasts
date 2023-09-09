<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Livewire Screencasts</title>
    @livewireStyles
</head>

<body>
    @livewire('say-hi', ['name' => 'test'])

    <a href="{{ url('/') }}">Home</a>

    @livewireScripts
</body>

</html>
