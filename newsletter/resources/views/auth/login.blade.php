<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>

</head>
<body>
<!-- component -->

<div class="h-screen bg-pink-100 flex justify-center items-center">
    <div class="lg:w-2/5 md:w-1/2 w-2/3">
        <form method="post" action="{{route('login')}}" class="bg-white p-10 rounded-lg shadow-lg min-w-full" enctype="multipart/form-data">
@csrf
<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Login</h1>
<div>
    <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="email" name="email" id="email" placeholder="@email" />
</div>
<div>
    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="password" id="password" placeholder="password" />
</div>
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="remember" name="remember" class="text-blue-500">
                <label for="remember" class="text-gray-600 ml-2">Remember Me</label>
            </div>

<button type="submit" class="w-full mt-6 bg-pink-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Login</button>
<button type="submit" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">
    <a href="{{'register'}}">Register</a></button>
</form>
</div>
</div>
</body>
</html>

