<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/milligram.min.css">
    <link rel="stylesheet" href="/css/style.css">
    @yield('styles')
</head>
<body>
    <nav class="navigation">
        <section class="container">
            <a href="/" class="navigation-title">
                <h1 class="title">Screener App</h1>
            </a>
            <ul class="navigation-list float-right">
                <li><a class="navigation-link" href="/cv/">View</a></li>
                <li><a class="navigation-link" href="/cv/create">Upload</a></li>
            </ul>
        </section>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>