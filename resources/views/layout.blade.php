<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deverest</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/icons/web-development.png" type="image/x-icon">
    <meta name="description" content="">

    @include ('partials.styles')
</head>
<body>

    @yield('content')

    @include ('partials.scripts')
    @include ('partials.livereload')
</body>
</html>
