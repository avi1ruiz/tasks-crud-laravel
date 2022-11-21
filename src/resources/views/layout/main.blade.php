<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/litera/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-2">
        <div class="container-fluid">
            <a href="{{ route('main') }}" class="navbar-brand"><i class="fa-solid fa-book"></i> <i
                    class="fa-solid fa-c"></i></a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('tasks.index') }}" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tasks.create') }}" class="nav-link">Crear Tarea</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-4">
        @yield('content')
    </div>

    <div class="container mt-auto">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-muted"><i class="fa-solid fa-globe"></i>
                    2022 | Victor Ruiz
                </span>
            </div>
            <ul class="nav list-unstyled d-flex justify-contend-end">
                <li class="ms-3">
                    <a href="" class="text-muted"><i class="fa-solid fa-user"></i></a>
                </li>
                <li class="ms-3">
                    <a href="https://github.com/avi1ruiz" class="text-muted"><i class="fa-brands fa-github"></i></a>
                </li>
            </ul>
        </footer>
    </div>

</html>
