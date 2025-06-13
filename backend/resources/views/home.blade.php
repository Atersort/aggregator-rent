<x-app-layout>
    <h1 class="py-4 text-base sm:text-base md:text-lg lg:text-4xl">Главная страница</h1>

    <p class="text-sm text-gray-500">Всего карточек на странице: {{ $all_rent->count() }}</p>
    <div class="mt-4  flex-col gap-4">
        @foreach ( $all_rent as $rent)
            <div class="min-h-120px w-120px p-4 mt-4 flex-col bg-white shadow rounded-lg">
                <div class="flex justify-between gap-8">
                    <div><img src="http://dummyimage.com/200/c0c0c0" alt=""></div>
                    <div class="ml-12">
                        <img class="" src="" alt="">
                        <div><h2 class="text-2xl">{{ $rent['title'] }}</h2></div>
                        <div>{{ $rent['address'] }}</div>
                        <div>{{ $rent['price'] }} ₽/мес.</div>
                        @if ($rent['rooms'] === 0)
                            <div>Студия</div>
                        @else
                            <div> {{ $rent['rooms'] ?? 'NULL' }} комнатная</div>
                        @endif
                        <div>{{$rent['description']}}</div>
                    </div>
                    <div class="border-l pl-4">
                        <div class="flex-col">
                            <a class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600"
                               href="{{ route('view', ['id' => $rent['id']]) }}">Просмотреть</a>

                            <a class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                               href="{{ route('edit', ['id' => $rent['id']]) }}">Редактировать</a>

                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
        <div class="my-4"> {{ $all_rent->links() }}</div>
</x-app-layout>
