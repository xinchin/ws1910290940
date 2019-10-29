<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | @yield('title', 'Main Page')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
        <hr>
        <h1>Footer</h1>
    @show
</body>
</html>
