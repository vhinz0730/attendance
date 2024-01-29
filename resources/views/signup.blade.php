<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-600 min-h-screen pt-10 px-2">
<main class="bg-gray-300 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <sectio>
            <h3 class="font-bold text-center text-3xl">Sign Up<h3>
            <p class="mt-2 text-md text-center"> Please sign in with your details. </p>
        </section>
        <section class="mt-10">
            <form action="/store" method="POST"  class="flex flex-col">
                @csrf              
                <div class="mb5 pt3 rounded bg-gray-300 mt-5">
                    <label for="name" class="font-bold font-sm">First Name</label>
                   <input type="text" name="first_name" class="bg-gray-300 p-3 rounded w-full focus:outline-none hover:bg-indigo-400 border-b-4 border-gray-500">
                </div>
                <div class="mb5 pt3 rounded bg-gray-300 mt-5">
                    <label for="name" class="font-bold font-sm">Last Name</label>
                   <input type="text" name="last_name" class="bg-gray-300 p-3 rounded w-full focus:outline-none hover:bg-indigo-400 border-b-4 border-gray-500">
                </div>
                <div class="mb5 pt3 rounded bg-gray-300 mt-5">
                    <label for="name" class="font-bold font-sm">Email</label>
                   <input type="email" name="email" class="bg-gray-300 p-3 rounded w-full focus:outline-none hover:bg-indigo-400 border-b-4 border-gray-500">
                </div>
                <div class="mb5 mt-5 pt3 rounded bg-gray-300">
                <label for="name" class="font-bold font-sm">Year Level: </label>
                    <select name="year_level" class="bg-gray-300 p-3 rounded w-full focus:outline-none hover:bg-indigo-400 border-b-4 border-gray-500">
                    <option value="">Select</option>
                    <option value="first year">First Year</option>
                    <option value="second year">Second Year</option>
                    <option value="third year">Third Year</option>
                    <option value="fourth year">Fourth Year</option>
                    </select>   
                </div>
                <div class="mb5 pt3 mt-5 rounded bg-gray-300">
                    <label for="section" class="font-bold font-sm">Section</label>
                   <input type="text" name="section" class="bg-gray-300 p-3 rounded w-full focus:outline-none hover:bg-indigo-400 border-b-4 border-gray-500">
                </div>
                <button class="bg-yellow-400 hover:bg-yellow-600 font-bold rounded shadow-3xl mt-3 h-8 w-24 ml-auto mr-auto" type="submit">Sign-up</button>
            </form>
        </sectio>
    </main>
</body>
</html>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>