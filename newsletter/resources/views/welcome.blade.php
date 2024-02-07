<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<style>
    .newsletter-subscribe {
        color: #313437;
        background-color: #ffffff;
        padding: 55px 74px;
    }

    .newsletter-subscribe p {
        color: #7d8285;
        line-height: 1.5;
    }

    .newsletter-subscribe h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 25px;
        line-height: 1.5;
        padding-top: 0;
        margin-top: 0;
        color: inherit;
    }

    .newsletter-subscribe .intro {
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto 25px;
    }

    .newsletter-subscribe .intro p {
        margin-bottom: 35px;
    }

    .newsletter-subscribe form {
        justify-content: center;
    }

    .newsletter-subscribe form .form-control {
        background: #eff1f4;
        border: none;
        border-radius: 3px;
        box-shadow: none;
        outline: none;
        color: inherit;
        text-indent: 9px;
        height: 45px;
        margin-right: 10px;
        min-width: 250px;
    }

    .newsletter-subscribe form .btn {
        padding: 16px 32px;
        border: none;
        background: none;
        box-shadow: none;
        text-shadow: none;
        opacity: 0.9;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 13px;
        letter-spacing: 0.4px;
        line-height: 1;
    }

    .newsletter-subscribe form .btn:hover {
        opacity: 1;
    }

    .newsletter-subscribe form .btn:active {
        transform: translateY(1px);
    }

    .newsletter-subscribe form .btn-primary {
        background-color: #055ada !important;
        color: #fff;
        outline: none !important;
    }

    body {
        background: #eee;
    }

    .newsletter {
        color: #0062cc !important;
    }
</style>
<!-- component -->
<header class="header sticky top-0 bg-white shadow-md flex items-center justify-between px-8 py-02">
    <!-- logo -->
    <h1 class="w-3/12">
        Newsletter
    </h1>

    <!-- navigation -->
    <nav class="nav font-semibold text-lg">
        <ul class="flex items-center">
            <li class="p-4 border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer active">
                <a href="">Accueil</a>
            </li>
            <li class="p-4 border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer">
                <a href="">Produits</a>
            </li>
            <li class="p-4 border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer">
                <a href="">Collections</a>
            </li>
            <li class="p-4 border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer">
                <a href="{{route('register')}}">Register</a>
            </li>
        </ul>
    </nav>

    <!-- buttons --->
    <div class="w-3/12 flex justify-end">
    </div>
</header>

<div class="newsletter-subscribe mt-5 container">
    <div class="container">
        <div class="intro">
            <h2 class="text-center newsletter">Subscribe to our Newsletter</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam blanditiis
                dignissimos eaque eius impedit in laudantium, nisi quidem sequi, similique tempore velit veniam,
                voluptate? Aliquid atque minus natus officia vel!</p>
        </div>
        <form class="form-inline" method="post">
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
