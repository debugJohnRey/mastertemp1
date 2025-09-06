<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
            <title>@yield('title', 'Uep Landing Page')</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar" style="background-color: white"; data-bs-theme="light">
            <div class="container">
                <a class="navbar-brand" href="/">Landing Page</a>
                <div>
                    <a class="nav-link d-inline" href="/child">Home</a>
                        <a class="nav-link d-inline" href="/about">About</a>
                        <a class="nav-link d-inline" href="/login">Login</a>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <footer class="bg-light text-center p-3 mt-3">
            <p>&copy; {{date('M, d, Y')}} My website</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </body>