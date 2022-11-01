<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylehome.css">
    <link rel="stylesheet" href="styleabout.css">
</head>
<body>

    @include('partials.navbar')

    <div class="section1">
        @yield('container')
    </div>

</body>


</html>
