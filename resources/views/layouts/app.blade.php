<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STT Cipasung</title>
    @vite(['resources/css/style.css'])
</head>

<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>

</html>
