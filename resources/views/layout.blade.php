<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <style>
        .completed-task{
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/note">Notes</a></li>
    </ul>
    @yield('content')
</body>
</html>