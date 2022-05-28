<nav class="flex justify-between items-center mb-4 bg-yellow-300 p-2">
    <a href="/">
        <span class="text-black-900 font-bold text-4xl">Giveaway</span>
    </a>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth
            <li>
                <span class="font-bold">Welcome, {{ auth()->user()->full_name }}</span>
            </li>
            <li>
                <a href="/item/create">Add item</a>
            </li>
            <li>
                <a href="/profile">
                    <i class="fa-solid fa-circle-user"></i> Profile
                </a>
            </li>
            <li>
                <form class="inline" action="/logout" method="POST">
                    @csrf
                    <button type="submit" class=""><i class="fa-solid fa-arrow-right-from-bracket"></i>
                        Logout</button>
                </form>
            </li>
        @else
            <li>
                <a href="/register"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        @endauth
    </ul>
</nav>
