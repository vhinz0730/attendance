<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studen Time In</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<?php
$mytime = Carbon\Carbon::now()->addDays(1)->addHours(8);
?>
<div class="flex justify-end mr-5 text-white hover:text-gray-800">
<a href="/login" class="text-gray-900 font-bold hover:text-white">Admin Login</a>
</div>
<body class="bg-gray-600 min-h-screen pt-10 px-2">

    <header class="max-w-lg mx-auto">
      <h1 class="flex justify-center font-bold font-large text-5xl">Attendance<h1>
    </header>

    <main class="bg-gray-500 max-w-lg p-10 rounded-lg mt-10 mx-auto rounded-lg shadow-3xl">
      <section>
        <h1 class="font-bold "><?php
        echo $mytime->toDateTimeString();
        ?> </h1>
      </section>
      <section>  
        <form action="/log" method="GET" class="flex flex-col">
          @csrf
            <h2 class="font-bold mt-10 mb-5">
              Email Address : <input type="email" name="email" placeholder="Email Address" class="bg-white rounded-lg focus:bg-gray-400 outline-none">
              <button type="submit"  class="bg-blue-600 mt-5 w-20 shadow-lg rounded-lg font-bold hover:bg-blue-900 ">Time In</button>
            </h2>
        </form>
      </section> 
      <span class="text-sm text-red-600">No Email Address yet? </span><a href="/signup" class="text-sm text-red-600 hover:text-white">Click Here!</a>
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