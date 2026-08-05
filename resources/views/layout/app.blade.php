<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'app')</title>

    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark min-vh-100" style="width: 280px;" bis_skin_checked="1"> 
        <a href="/" class="d-flex gap-4 align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-box-seam-fill" style="font-size: 50px"></i>
            <span class="fs-4">Inventroy <br> Management</span> 
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li> <a href="#" class="nav-link text-white">
                <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a> </li>
            <li> <a href="{{route('category.index')}}" class="nav-link text-white"> 
                <i class="bi bi-table"></i>
                    Manage Categories
                </a> </li>
            <li> <a href="{{route("product.index")}}" class="nav-link text-white">
                <i class="bi bi-grid"></i>
                    Manage Products
                </a> </li>
            <li> <a href="#" class="nav-link text-white">
                <i class="bi bi-person-add"></i>
                    Manage Users
                </a> </li>
        </ul>
        <hr>
        <div class="dropdown" bis_skin_checked="1"> <a href="#"
                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false"> <img src="https://github.com/mdo.png" alt=""
                    width="32" height="32" class="rounded-circle me-2"> <strong>Superman</strong> </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
    <main class="mx-4 w-100 mt-3">
        @yield('content')
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
