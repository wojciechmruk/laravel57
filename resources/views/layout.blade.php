<!DOCTYPE html>

<html>

<head>
    <title>@yield('title', 'Laravel')</title>
    <body>
     @yield('content')

        <ul>
        	<li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>            
        </ul>
    </body>
</html>