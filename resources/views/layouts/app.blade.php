<!doctype html>
<html lang="ru">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="/libraries/font-awesome-4.7.0/css/font-awesome.min.css">
        
        <!-- Local CSS -->
        <link rel="stylesheet" type="text/css" href="/css/style.css">

        <title>@section('title')Selfmade - @show</title>
    </head>
    <body>

        <div class="container">

            <x-header-component></x-header-component>

            <div class="content container">
                <main role="main">
                    @yield('content')
                </main>
            </div>

            <x-footer-component></x-footer-component>

        </div>

        

        <!-- JavaScript -->
        <script type="text/javascript" src="/js/app.js"></script>
        @stack('js')
    </body>
</html>