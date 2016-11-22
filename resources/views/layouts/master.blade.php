<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title')</title>
        <link rel="stylesheet" href="http://localhost:8078/blog/resources/assets/sass/app.scss">
        
        <style type="text/css" media="screen">@yield('styles')</style>
        <link rel="author" href="humans.txt">

    </head>

    <body>
        	@include('includes.header')
        	
        	<div>@yield('content')</div>

        	@include('includes.footer')
    </body>
</html>