<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <title>GiveAway Items</title>
    </head>
<body>
    <nav class="flex justify-between items-center mb-4 bg-yellow-300 p-2">
        <a href="/">
            <span class="text-black-900 font-bold text-4xl">Giveaway</span>
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <li>
                <span class="font-bold">Welcome, {{auth()->user()->full_name}}</span>
            </li>
            <li>
                <a href="/profile">
                    <i class="fa-solid fa-circle-user"></i> Profile
                </a>
            </li>
            <li>
                <form class="inline" action="/logout" method="POST">
                    @csrf
                    <button type="submit" class=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                </form>
            </li>

            @else
            <li>
                <a href="/register"
                    ><i class="fa-solid fa-user-plus"></i> Register</a
                >
            </li>
            <li>
                <a href="/login"
                    ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a
                >
            </li>
            @endauth
        </ul>
    </nav>

    <main class="max-w-5xl m-auto">
        {{ $slot }}
    </main>

    <footer
            class="w-full flex items-center justify-start font-bold bg-laravel bg-yellow-300 text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
            <a class="bg-red-900 ml-4 p-2" href="/item/create">Post Item</a>
        </footer>

    <x-flash-message />
</body>
</html>