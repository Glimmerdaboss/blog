<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Admin Area</title>
        <link rel="stylesheet" href="http://localhost:8079/blog/public/assets/css/admin.css">
                   
        @yield('styles')
       

    </head>

    <body>
        	@include('includes.admin-header')
        	
        	@yield('content')

            <script type="text/javascript">
                var baseUrl = "{{ URL::to('/') }}";
            </script>
            
            @yield('scripts')
        	
    </body>
</html>