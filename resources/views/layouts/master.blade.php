<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title')</title>
        <link rel="stylesheet" href="http://localhost:8079/blog/public/assets/css/main.css">
                   
        @yield('styles')
       

    </head>

    <body>
        	@include('includes.header')
        	
        	<div class="main">@yield('content')</div>

        	@include('includes.footer')
    </body>
</html>