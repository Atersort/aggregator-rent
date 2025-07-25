<x-app-layout>
    <div class="my-4">
        <div class="my-4 p-4 bg-white md:flex items-center rounded-lg shadow">
            <div>
                <div id="default-carousel" class="relative w-full md:max-w-[400px]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg min-w-[300px] md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://dummyimage.com/400x400/bab1ba/ffffff"
                                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                 alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://dummyimage.com/400x400/bab1ba/ffffff"
                                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                     alt="...">
                            </div>
                        </div>

                    </div>

                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                                data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                                data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                                data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                                data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
                    </button>
                    <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
                    </button>
                </div>

            </div>

            <div class="md:ml-8">
                <h1 class="text-xl md:text-6xl">{{ $rent->title }}</h1>
                <div class="mt-2">
                    <p><strong>Адрес:</strong> {{ $rent->address }}</p>
                    <p><strong>Цена:</strong> {{ $rent->price }} ₽/мес.</p>
                    <p><strong>Комнат:</strong> {{ $rent->rooms === 0 ? 'Студия' : $rent->rooms . ' комнатная' }}</p>
                    <p><strong>Описание:</strong> {{ $rent->description }}</p>
                </div>
            </div>
            <div>
                <form action="delete" method="get">
                    @csrf
                    <input type="button" value="Удалить">
                </form>

            </div>
        </div>

    </div>
</x-app-layout>
