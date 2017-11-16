<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.head')
</head>

<body class="bg-dark" id="page-top">
    <!-- Navigation -->
    @include('inc.nav')
    
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('inc.message')
            @yield('content')
        </div>
        <!--FOOTER-->
        @include('inc.footer') 
    </div>
    @include('inc.scripts') 
    <!--CUSTOM JS-->
    @yield('customjs')
</body>

</html>
