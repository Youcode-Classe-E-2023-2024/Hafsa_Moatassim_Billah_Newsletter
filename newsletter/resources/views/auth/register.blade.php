
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>

</head>
<body>

<div class="h-screen bg-green-100 flex justify-center items-center">
    <div class="lg:w-2/5 md:w-1/2 w-2/3">
        <form method="post" action="{{route('register')}}" class="bg-white p-10 rounded-lg shadow-lg min-w-full" enctype="multipart/form-data">
@csrf
<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Form register</h1>
<div>
    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Username</label>
    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="name" id="name" placeholder="username" />
</div>
<div>
    <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="email" name="email" id="email" placeholder="@email" />
</div>
<div>
    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="password" id="password" placeholder="password" />
</div>
<div>
    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm password</label>
    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="password_confirmation" id="password_confirmation" placeholder="confirm password" />
</div>

<button type="submit" class="w-full mt-6 bg-green-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
<button type="submit" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">
    <a href="{{'login'}}">Login</a></button>
</form>
</div>
</div>
</body>
</html>
