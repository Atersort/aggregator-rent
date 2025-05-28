<header>
    <div class="bg-white my-8 flex justify-between font-mono items-center">
        <div class="flex isolate items-center">
            <div class="text-4xl mr-4"><a href="">Арендыч</a></div>
            <nav class="">
                <ul class="flex gap-6">
                    <li><a href="1">1-комнатные</a></li>
                    <li><a href="2">2-комнатные</a></li>
                    <li><a href="3">3-комнатные</a></li>
                    <li><a href="4">Студии</a></li>
                </ul>
            </nav>
        </div>
        <div>
            @auth()
                <div>
                    <img src="" alt="">
                    <a href="{{ route('dashboard') }}">Профиль</a>
                </div>
                <div>
                    <a href="{{ route('logout') }}">Выход</a>
                </div>
            @endauth
        </div>
        <div>
            @guest()
                <div>
                    <a href="{{ route('login') }}">Логин</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                </div>
            @endguest
        </div>

    </div>

</header>
