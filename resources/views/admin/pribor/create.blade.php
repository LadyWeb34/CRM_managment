@seoTitle(__('Добавление нового прибора'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавление нового прибора') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-xl bg-white overflow-hidden mx-auto shadow-xl sm:rounded-lg py-4 px-4">
                <x-splade-form action="{{ route('pribor.store') }}">
                    @method('POST')
                    <x-splade-input name="title" :label="__('Наименование прибора СИ')" />
                    <x-splade-select name="type_id" :label="__('Тип прибора')" :options="$types" />
                    <x-splade-input name="number" :label="__('Инвертарный номер')" />
                    <x-splade-input name="date_realese" :label="__('Дата выпуска')" date />
                    <x-splade-input name="date_start" :label="__('Дата начала пользования')" date />
                    <x-splade-select name="deta_count" :label="__('Переодичность проверки')">
                        <option value="1">Каждые месяц</option>
                        <option value="2">Каждые 2 месяца</option>
                        <option value="3">Каждые 3 месяца</option>
                        <option value="4">Каждые 4 месяца</option>
                        <option value="5">Каждые 5 месяцев</option>
                        <option value="6">Каждые 6 месяцев</option>
                        <option value="7">Каждые 7 месяцев</option>
                        <option value="8">Каждые 8 месяцев</option>
                        <option value="9">Каждые 9 месяцев</option>
                        <option value="10">Каждые 10 месяцев</option>
                        <option value="11">Каждые 11 месяцев</option>
                        <option value="12">Каждые 12 месяцев</option>
                     </x-splade-select>
                    <x-splade-select name="departament_id " :label="__('Отдел')" :options="$departaments" />
                    <x-splade-textarea name="description" :label="__('Описание прибора')" autosize />
                    <x-splade-select name="status" :label="__('Статус прибора')">
                        <option value="0">Вывод с эксплуатации</option>
                        <option value="1">Используется</option>
                        <option value="2">Добавлен</option>
                        <option value="3">Проверка</option>
                        <option value="4">Не исправлен</option>
                     </x-splade-select>
                    <br>
                    <x-splade-submit label="Сохранить" />
                </x-splade-form>
            </div>
        </div>
    </div>
</x-app-layout>