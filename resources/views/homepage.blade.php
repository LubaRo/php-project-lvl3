<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/app.css">
        <title>Page analyzer</title>

    </head>
    <body class="antialiased">
    <nav>
        <ul>
            <li>Page analyzer</li>
            <li><a href="/urls">Sites</a></li>
        </ul>
    </nav>
    <main>
        <h1>Page analyzer</h1>
        <div>
            Check sites SEO for free
        </div>

        <form method="POST" action="/url">
            @csrf
            <input name="url[name]" type="text" placeholder="https://example.com">
            <button type="submit">Check</button>
        </form>
    </main>
    </body>
</html>
