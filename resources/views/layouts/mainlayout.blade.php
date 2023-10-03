<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Rental Buku | @yield('title')</title>
</head>
<style>
    .main{
        height: 100vh;
    }
    .sidebar{
        background-color: darkblue;
        color: white;
    }
    .sidebar a{
        color: white;
        text-decoration: none;
        display: block;
        padding: 20px 10px;
    }
    .sidebar a:hover{
        background: black;
    }
</style>
<body>
    <div class="main d-flex flex-column justify-content-between">
        @include('layouts.navbar')
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo02">
                        @if (Auth::user()->role_id == 1)
                            <a href="/dashboard">Dashboard</a> 
                            <a href="/users">Users</a> 
                            <a href="/books">Books</a> 
                            <a href="/categories">Categories</a> 
                            <a href="">Rent Logs</a> 
                            <a href="/logout">Logout</a> 
                        @else 
                            <a href="/profile">Profile</a> 
                            <a href="/logout">Logout</a> 
                        @endif        
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>

        
    </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>