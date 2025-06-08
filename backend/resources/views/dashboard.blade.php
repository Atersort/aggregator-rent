<x-app-layout>
    <div class="mt-8">
            <a class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80" href="{{ route('create') }}">Добавить</a>
    </div>
    <div class="text-base sm:text-base md:text-lg lg:text-xl"> <h1 class="">Ваши объявления</h1> </div>
    <div class="mt-5 grid grid-cols-3 gap-4">
        @foreach ( $all_rent as $rent)
            <div class="min-h-[300px] flex-col bg-white shadow rounded-lg">
                <div class="mt-6">
                    <img class="" src="" alt="">
                    <div><h2 class="text-2xl">{{ $rent['title'] }}</h2></div>
                    <div>{{ $rent['address'] }}</div>
                    <div>{{ $rent['price'] }} руб.</div>
                    @if ($rent['rooms'] === 0)
                        <div>Студия</div>
                 @else {
                    <div> {{ $rent['rooms']}} комнатая </div>
                    @endif
                    <div>{{$rent['description']}}</div>
                </div>
                <div class="mx-3">
                    <form action="#" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="mb-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600" type="submit">Удалить</button>
                    </form>
                    <a class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" href="{{ route('edit') }}/{{$rent['id']}}">Редактировать</a>
                </div>
            </div>

        @endforeach
    </div>
    <div class="mt-4"> {{ $all_rent->links() }}</div>
</x-app-layout>
