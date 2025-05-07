<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        @include('admin.includes.style')
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    @include('admin.includes.navbar')   
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            @include('admin.includes.sidebar')  
            </div>
            <div id="layoutSidenav_content">
                <main>
                @yield('content')   
                </main>
              @include('admin.includes.footer') 
            </div>
        </div>
       @include('admin.includes.scripts') 
    </body>
</html>
