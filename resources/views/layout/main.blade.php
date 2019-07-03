<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

    <style>
        .active {
            color: blue;
            text-decoration: none;
        }
    </style>

</head>
<body>
    <!-- navbar -->
    @include('layout.nav')
    <!-- end navbar -->
    
    <main>
        @yield('content')
    </main>    

</body>
</html>