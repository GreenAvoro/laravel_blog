<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel Blog Practice</title>
</head>
<body>
    <header class="p-6">
        <h1 class="underline text-3xl">This is the header for the blog</h1>
    </header>
    {{ $content }}
    <footer>
        <p>This is the footer</p>
    </footer>
</body>
</html>
