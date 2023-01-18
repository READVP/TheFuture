<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>theFuture</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        background-color: #f8f9fa!important;
    }

    .banner {
        display: block;
        margin-top: 100px;
        margin-left: 50px;
        margin-right: auto;
        width: 50%;
    }

    .banner1 {
        width: 100vw;
    }

    .banner2 {
        display: block;
        margin-top: 100px;
        margin-bottom: 100px;
        margin-left: auto;
        margin-right: 50px;
        width: 50%;
    }

    .content1 {
        display: flex;
        flex-direction: row;
    }

    .content1p {
        font-size: 35px;
        text-align: center;
        display: block;
        margin: auto 20px;

    }

    .btext {
        text-align: center;
    }

    a {
        color: black;
        text-decoration: none;
        text-underline: none;
    }

    a:hover{
        color: black;
    }

    .navbar-brand {
        width: 40px;
    }

</style>
<body class="body1">
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> theFuture
    </a>
    <a class="AboutUs" href="#">
    </a>
    <a class="Contact" href="#">
    </a>
    <a href="{{ route('login') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
        </svg> Login
    </a>
</nav>

<div class="content2">
    <img src="../image/pexels-saad-alaiyadhi-13010769-2.jpg" class="banner1">
    <h1 class="btext">Life Below Water</h1>
</div>

<div class="content1">
    <img src="../image/pexels-brandon-morrison-990344.jpg" class="banner">
    <div class="content1p">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </div>
</div>

<div class="content1">
    <div class="content1p">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </div>
    <img src="../image/pexels-james-wheeler-3555988.jpg" class="banner2">
</div>

</div>
</body>
</html>
