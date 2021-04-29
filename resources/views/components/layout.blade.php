<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/app.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

   <title>{{ $title ?? 'Page analyzer' }}</title>

</head>
<body class="d-flex h-100 text-center">
    <div class="d-flex w-100 h-100 p-0 mx-auto flex-column">
        <header class="mb-auto">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
                <div class="container justify-content-start">
                    <a class="navbar-brand" href="/">Page analyzer</a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/urls">Sites</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="container">
            {{ $slot }}
        </main>

        <footer class="border-top py-3 mt-5 flex-shrink-0 mt-auto">
            <div class="container text-center">
                <a href="https://github.com/LubaRo">&#169; lubaro</a>
            </div>
        </footer>
    </div>
</body>
</html>
