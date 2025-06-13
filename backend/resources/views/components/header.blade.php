<header class="w-full mx-auto">
        <div class="bg-white my-5 px-8 flex justify-between font-mono items-center">
            <div class="flex isolate items-center">
                <div class="text-lg text-4xl mr-4"><a href="/">Арендыч</a></div>
                <nav class="hidden md:flex">

                    <ul class="hidden md:flex gap-4">
                        <li><a class="text-xs sm:text-base underline" href="1">1-комнатные</a></li>
                        <li><a class="text-base sm:text-base underline" href="2">2-комнатные</a></li>
                        <li><a class="sm:text-base underline" href="3">3-комнатные</a></li>
                        <li><a class="sm:text-base underline" href="4">Студии</a></li>
                    </ul>
                </nav>

                <div class="flex flex-col gap-2 md:hidden" x-data="{ open: false }">
                    <!-- Главный пункт -->
                    <button
                        @click="open = !open"
                        class="flex items-center gap-1 text-gray-700 hover:text-blue-600"
                        aria-haspopup="true"
                        :aria-expanded="open">
                        Квартиры
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Выпадающее меню -->
                    <div
                        x-show="open"
                        @click.away="open = false"
                        class="absolute mt-2 bg-white shadow-lg rounded w-48 z-10"
                    >
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">1-комнатные</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">2-комнатные</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">3-комнатные</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Студии</a>
                    </div>
                </div>
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
