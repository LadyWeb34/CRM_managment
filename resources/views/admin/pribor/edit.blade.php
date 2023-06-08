@seoTitle(__('Редактирование прибора'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавление Редактирование прибора') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-xl bg-white overflow-hidden mx-auto shadow-xl sm:rounded-lg py-4 px-4">
                <x-splade-form method="PUT" :default="$pribor" action="{{ route('pribor.update',$pribor->id) }}">
                    @method('PUT')
                    <x-splade-input name="title" :label="__('Наименование прибора СИ')" />
                    <x-splade-select name="type_id" :label="__('Тип прибора')" :options="$types" />
                    <x-splade-input name="number" :label="__('Инвертарный номер')" />
                    <x-splade-input name="date_realese" :label="__('Дата выпуска')" />
                    <x-splade-input name="date_start" :label="__('Дата начала пользования')" />
                    <x-splade-input name="date_end" :label="__('Дата окончания пользования')" />
                    <x-splade-select name="departament_id " :label="__('Отдел')" :options="$departaments" />
                    <x-splade-textarea name="description" :label="__('Описание прибора')" autosize />
                    <x-splade-select name="status" :label="__('Статус прибора')">
                        <option value="0">Не используется</option>
                        <option value="1">Используется</option>
                        <option value="2">Добавлен</option>
                        <option value="3">Перераспределяется</option>
                        <option value="4">Не исправлен</option>
                     </x-splade-select>
                    <br>
                    <x-splade-submit label="Сохранить" />
                </x-splade-form>
            </div>
        </div>
    </div>
</x-app-layout>