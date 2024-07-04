<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Google Material Icon: Add --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        th {
            font-weight: 300;
            font-size: 20px;
            font-style: italic;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex align-items-center content-align-center" style="height:90vh">
            <div class="col-lg-1"></div>
            <div class="col-lg">
                <div class="card p-4 shadow-lg">
                    <div class="row">
                        <div class="col">
                            <h1 class="display-1">@yield('pageTitle')</h1>
                            <hr>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
    <!-- Common footer content -->
    <footer class="container border-2 border-secondary border-top pt-2">
        &copy; 2024 CRUD App v2
    </footer>
</body>

</html>
