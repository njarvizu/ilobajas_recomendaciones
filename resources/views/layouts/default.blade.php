<!DOCTYPE html>
<html lang="en">
<head>
    @section('htmlHeader')
        @include('elements.html_header')
    @show
</head>
<body>
<div class="container">
    <div class="separator"></div>

    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
    </ul>

    <div class="separator"></div>

    @yield('main-content')
</div>
</body>
</html>