<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>About</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --secondary-color: #fdf0ec;
        --contrast-color: #EC4899;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        z-index: -10;
        background-color: var(--contrast-color);
    }

    .container {
        display: flex;
        height: 100vh;
        justify-content: space-around;
        align-items: center;
        color: #443737;
        animation: expand .8s ease forwards;
        background-color: var(--secondary-color);
        position: relative;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        transition: all .8s ease;
    }

    .container_content {
        width: 50%;
    }

    .container_content_inner {
        width: 80%;
        margin-left: 80px;
    }

    .container_outer_img {
        margin: 50px;
        width: 50%;
        overflow: hidden;
    }

    .container_img {
        width: 100%;
        animation: slideIn 1.5s ease-in-out forwards;
    }

    .par {
        height: auto;
        overflow: hidden;
    }

    p{
        line-height: 28px;
        transform: translateY(300px);
        animation: slideUp .8s ease-in-out forwards .8s;
    }

    .btns {
        height: 100%;
        position: relative;
        width: 150px;
        overflow: hidden;
    }

    .btns_more {
        background: transparent;
        border: 1px solid var(--contrast-color);
        border-radius: 50px;
        padding: 8px 12px;
        color: #ec4899;
        font-size: 16px;
        text-transform: uppercase;
        position: relative;
        margin-top: 15px;
        outline: none;
        transform: translateY(50px);
        animation: slideUp .8s ease-in-out  forwards 1s;
    }

    .title {
        overflow: hidden;
        height: auto;
    }

    h1 {
        font-size: 40px;
        color: var(--contrast-color);
        margin-bottom: 20px;
        transform: translateY(100px);
        animation: slideUp .8s ease forwards .5s;
    }

    @keyframes slideIn {
        0% {
            transform: translateX(500px) scale(.2);
        }
        100% {
            transform: translateX(0px) scale(1);
        }
    }

    @keyframes slideUp {
        0% {
            transform: translateY(300px);
        }
        100% {
            transform: translateY(0px);
        }
    }

    @keyframes expand {
        0% {
            transform: translateX(1400px);
        }
        100% {
            transform: translateX(0px);
        }
    }

</style>
<body>

    <nav class="flex items-center">
        <a href="/" class="hidden xl:block font-abhaya-libre uppercase text-gray-800 tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Home</a>
        <a href="/about" class="hidden xl:block font-abhaya-libre uppercase text-gray-800 tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">About</a>
        <a href="#" class="hidden xl:block font-abhaya-libre uppercase text-gray-800 tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Gallery</a>
        <a href="" class="hidden xl:block font-abhaya-libre uppercase text-gray-800 tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Logout</a>
    </nav>

<div class= 'container'>
    <div class="container_content">
        <div class="container_content_inner">
            <div class="title">
                <h1>Hello World</h1>
            </div>
            <div class="par">
                <p>
                    Cupiditate alias odio omnis minima veritatis saepe porro, repellendus natus vitae, sequi exercitationem ipsam, qui possimus sit eveniet laborum sapiente quisquam quae neque velit?
                </p>
            </div>
            <div class="btns">
                <button class='btns_more'> See more </button>
            </div>
        </div>
    </div>
    <div class="container_outer_img">
        <div class="img-inner">
            <img src='https://images.pexels.com/photos/4099322/pexels-photo-4099322.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'  alt="" class="container_img"/>
        </div>
    </div>
</div>
<div class="overlay"></div>
</body>
</html>
