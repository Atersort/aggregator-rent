<x-app-layout>
    <div>
        <h2 class="text-4xl text-orange-600 font-bold">Добавить объявление</h2>
    </div>

    <div>
        <form action="" method="post">
            <div>
                <label for="title">Заголовок</label>
                <input id="title" name="title" type="text" placeholder="Введите заголовок">
            </div>
            <div>
                <label for="description">Описание</label>
                <textarea id="description" name="description" placeholder="Добавьте описание"></textarea>
            </div>
            <div>
                <label for="address">Адрес</label>
                <input id="address" name="address" placeholder="Укажите адрес" type="text">
            </div>
            <div>
                <label for="price">Цена</label>
                <input id="price" name="price" type="number" step="100" placeholder="Укажите цену">
            </div>
            <input type="submit" value="Добавить">
        </form>
    </div>
</x-app-layout>
