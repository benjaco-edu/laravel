<!DOCTYPE html>
<html>
    <head>
        <title>Todo app</title>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css', true) }}" type="text/css" />
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>