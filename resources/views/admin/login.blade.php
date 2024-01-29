<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div class="flex justify-start ml-5 mt-3">
<a href="/" class="font-bold text-gray-500 hover:text-white">Student Time In</a>
</div>
<body class="bg-gray-800">
<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <sectio>
            <h3 class="font-bold text-center text-3xl">Welcome!<h3>
            <p class="mt-2 text-md text-center"> Please sign in with your details. </p>
        </section>
        <section class="mt-10">
            <form action="/login/process"  method="post" class="flex flex-col">
                @csrf
                <div class="mb5 pt3 rounded bg-gray-300">
                    <label for="email" class="font-bold font-sm">Email</label>
                   <input type="email" name="email" class="bg-gray-300 p-3 rounded w-full focus:outline-none hover:bg-indigo-400 border-b-4 border-gray-500">
                </div>
                <div class="mb5 pt3 rounded bg-gray-300">
                    <label for="password" class="font-bold font-sm">Password</label>
                   <input type="password" name="password" class="bg-gray-300 p-3 rounded w-full focus:outline-none hover:bg-indigo-400 border-b-4 border-gray-500">
                </div>
                <button class="bg-yellow-400 hover:bg-yellow-600 font-bold rounded shadow-3xl mt-3 h-8 w-24 ml-auto mr-auto" type="submit">Login</button>
            </form>
        </sectio>
    </main>

</body>
</html>