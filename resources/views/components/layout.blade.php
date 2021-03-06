<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ea81400e39.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Laravel Blog Practice</title>
</head>
<body class="bg-teal-900 text-white">
    <header class="p-2 pl-4 fixed h-16 top-0 left-0 right-0 bg-teal-900/50 backdrop-blur border-b border-teal-800 flex items-center justify-between">
        <a href="/">
            <div class="flex items-center">
                <img src="{{asset('assets/logo.png')}}" alt="Crewboard" class="h-9"><i>2.0</i>
            </div>
        </a>
        <div class="mr-2">
            
            <a href="/" class="bg-teal-500 text-teal-900 py-1 px-6 rounded">Login</a>
        </div>
    </header>
    <div class="h-16"></div>
    <div class="flex">
        <nav class="fixed w-[22%] border-r border-teal-800 top-16 bottom-0 p-6 text-xl">
            <form action="/" class="text-current">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search"
                    class="
                        rounded 
                        px-2 
                        pb-1
                        border 
                        border-teal-700 
                        bg-transparent
                        text-white
                        placeholder-white
                        w-full
                        font-light" 
                    value={{ request('search') }}>
            </form>
            <a href="/"><p class="mb-2"><i class="fa-solid fa-newspaper mr-2"></i>News</p></a>
            <a href="/schedule"><p><i class="fa-solid fa-calendar mr-2"></i>Schedule</p></a>
        </nav>
        <div class="ml-[22%] w-full p-6">
            {{ $content }}
        </div>
    </div>
    <footer>
        <p>This is the footer</p>
    </footer>
</body>
</html>
