<header class="w-full mx-auto">
        <div class="bg-white my-5 px-8 flex justify-between font-mono items-center">
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
            <div class="flex items-center gap-4">
                @auth
                    <a href="{{ route('dashboard') }}">Профиль</a>
                    <a href="{{ route('logout') }}">Выход</a>
                @endauth

                @guest
                    <a href="{{ route('login') }}">Логин</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                @endguest
            </div>

        </div>
</header>
