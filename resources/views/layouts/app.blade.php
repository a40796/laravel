<html>
    <head>
        <title>
            @php    
                echo 'title'
            @endphp
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        @include('layouts.css')
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        @include('layouts.nav')
        <div style="height: 90vh;">
            @yield('content')
        </div>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>