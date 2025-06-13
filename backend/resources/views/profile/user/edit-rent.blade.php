<x-app-layout>
    <div><h1 class="text-base sm:text-base md:text-lg lg:text-4xl">Изменить объявление {{$rent['title']}}</h1></div>

    <div>
        <form action="{{ route('update', ['id' => $rent['id']]) }}" method="post">
            @csrf
            <div class="mt-4 p-4 bg-white rounded-lg shadow">
                <form class="mx-4" action="{{route('store')}}" method="post">
                    @csrf
                    <div class="space-y-4 max-w-[400px]">
                        <div class="flex justify-between">
                            <label for="title">Заголовок</label>
                            <input class="rounded-lg" id="title" value="{{ old('title', $rent['title']) }}" name="title" type="text" placeholder="Введите заголовок">
                        </div>
                        <div class="flex justify-between">
                            <label for="address">Адрес</label>
                            <input class="rounded-lg" id="address" name="address" value="{{ old('address', $rent['address']) }}" placeholder="Укажите адрес" type="text">
                        </div>
                        <div class="flex justify-between">
                            <label for="rooms">Количество комнат</label>
                            <select id="rooms" name="rooms" class=" min-w-[200px] rounded-lg">
                                <option {{old('1', $rent['rooms']) == '1' ? 'selected' : ''}} value="1" name="1">1</option>
                                <option {{old('2', $rent['rooms']) == '2' ? 'selected' : ''}} value="2" name="2">2</option>
                                <option {{old('3', $rent['rooms']) == '3' ? 'selected' : ''}} value="3" name="3">3</option>
                                <option {{old('0', $rent['rooms']) == '0' ? 'selected' : ''}} value="0" name="0">Студия</option>
                            </select>
                        </div>
                        <div class="flex justify-between">
                            <label for="price">Цена</label>
                            <input value="{{ old('price', $rent['price']) }}" class="rounded-lg" id="price" name="price" type="number" step="100" placeholder="Укажите цену">
                        </div>
                    </div>

                    <div>
                        <label class="flex justify-between" for="description">Описание</label>
                        <textarea class="min-w-[800px] rounded-lg" id="description" name="description" placeholder="Добавьте описание">{{ old('description', $rent['description']) }}</textarea>
                    </div>
                    <hr class="my-4">
                    <input class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80" type="submit" value="Добавить">
                </form>
            </div>
        </form>
    </div>

</x-app-layout>
