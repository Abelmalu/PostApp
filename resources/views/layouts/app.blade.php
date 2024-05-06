<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostApp</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul class=" flex">
            <li><a href=""class="p-3">home</a></li>
            <li><a href=""class="p-3">dashboard</a></li>
            <li><a href=""class="p-3">post</a></li>
        </ul>

        <ul class=" flex">
            <li><a href=""class="p-3">Ablemalu</a></li>
            <li><a href=""class="p-3">Login</a></li>
            <li><a href=""class="p-3">Register</a></li>
            <li><a href=""class="p-3">logout</a></li>
        </ul>
</nav>
    @yield('content')
    
</body>
</html>
