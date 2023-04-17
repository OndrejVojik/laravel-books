<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Laravel Books</title>
    @vite("resources/css/admin.scss",)
</head>
<body>
    @include('admin.left-menu')

    <main class="admin-main">

        @include('admin.common.alerts')

        @yield('content')  
        
    </main>


    
</body>
</html>