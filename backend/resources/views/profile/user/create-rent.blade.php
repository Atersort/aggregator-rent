<x-app-layout>
    <div class="pt-8">
        <div class="p-4 bg-white rounded-lg shadow">
            <h2 class="text-4xl dark:text-[#242629] font-bold">Объявление о сдаче квартиры</h2>
        </div>

        <div class="mt-4 p-4 bg-white rounded-lg shadow">
            <form class="mx-4" action="{{route('store')}}" method="post">
                @csrf
                <div class="space-y-4 max-w-[400px]">
                    <div class="flex justify-between">
                        <label for="title">Заголовок</label>
                        <input class="rounded-lg" id="title" name="title" type="text" placeholder="Введите заголовок">
                    </div>
                    <div class="flex justify-between">
                        <label for="address">Адрес</label>
                        <input class="rounded-lg" id="address" name="address" placeholder="Укажите адрес" type="text">
                    </div>
                    <div class="flex justify-between">
                        <label for="price">Цена</label>
                        <input class="rounded-lg" id="price" name="price" type="number" step="100" placeholder="Укажите цену">
                    </div>
                </div>

                <div>
                    <label class="flex justify-between" for="description">Описание</label>
                    <textarea class="min-w-[800px] rounded-lg" id="description" name="description" placeholder="Добавьте описание"></textarea>
                </div>
                <hr class="my-4">
                <input class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80" type="submit" value="Добавить">
            </form>
        </div>
    </div>
</x-app-layout>
