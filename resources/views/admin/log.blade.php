
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-500 min-h-screen">
    <nav class="bg-gray-600 px-2 sm:px-4 py-2.5">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <span class="font-bold text-3xl text-white">Admin Page</span>
            <a href="/login" class="block py-2 pr-4 pl-3 flex justify-end hover:text-white"> Logout</a>
        </div>

    </nav>
        <div class="container flex flex-wrap justify-center mt-10 items-center mx-auto bg-gray-700 rounded-lg">
            <span class="font-bold text-3xl text-white">Attendance Records</span>
        </div>   
        <div class="container mx-auto flex flex-start mt-5 items-center bg-gray-700 rounded-lg">  
        </div>  
      
        
    <main class="bg-gray-600  mr-4 ml-4 p-10 rounded-lg mt-10 rounded-lg shadow-3xl">
      <section>
      <div class="overflow-x-auto relative">
            <ul class="text-gray-700 text-lg text-5xl font-bold">
                <li>
                    <span class="hover:text-white"><a href="/index">Student List</a></span>
                </li>
                <li>
                    <span class="hover:text-white"><a href="#">Student Logs</a></span>
                </li>
            </ul>

            <table class="mx-auto text-sm text-center text-white">
                <thead class="text-lg text-3xl text-gray-900 bg-gray-300">
                    <tr>              
                        <th scope="col" class="py-3 px-6">First Name</th>                   
                        <th scope="col" class="py-3 px-6">Last Name</th>
                        <th scope="col" class="py-3 px-6">Year</th>                  
                        <th scope="col" class="py-3 px-6">Section</th>
                        <th scope="col" class="py-3 px-6">Time-in</th> 
                    </tr>
                </thead>

                <tbody>
                    <?php
                     
                      use Illuminate\Support\Str;
                      $string = Str::upper($students);
                    ?>
                    @foreach ($students as $student) 
                    <tr>
                        <td class="text-lg text-2xl text-uppercase" > {{$string = Str::upper($student->first_name)}}</td>
                        <td class="text-lg text-2xl text-uppercase" >{{$string = Str::upper($student->last_name)}}</td>
                        <td class="text-lg text-2xl text-uppercase" >{{$string = Str::upper($student->year_level)}}</td>
                        <td class="text-lg text-2xl text-uppercase" >{{$string = Str::upper($student->section)}}</td>
                        <td class="text-lg text-2xl text-uppercase" >{{$string = Str::upper($student->created_at)}}</td>
                    </tr>
                @endforeach
                </tbody>    
            </table>
        </div>
      </section>
    </main>
</body>
</html>