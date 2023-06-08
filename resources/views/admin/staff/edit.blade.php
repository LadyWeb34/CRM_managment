@seoTitle(__('Изменение информации о сотруднике'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменение информации о сотруднике') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-xl bg-white overflow-hidden mx-auto shadow-xl sm:rounded-lg py-4 px-4">
                <x-splade-form method="PUT" :default="$staff" action="{{ route('staff.update',$staff->id) }}">
                    @method('PUT')
                    <x-splade-input name="surname" :label="__('Фамилия сотрудника')" />
                    <x-splade-input name="name" :label="__('Имя сотрудника')" />
                    <x-splade-input name="phone" :label="__('Контактный телефон')" />
                    <x-splade-select name="position" :label="__('Должность сотрудника')">
                        <option value="Инженер">Инженер</option>
                        <option value="Слесарь">Слесарь</option>
                        <option value="Диагностик">Диагностик</option>
                        <option value="Электрик">Электрик</option>
                     </x-splade-select>
                    <br>
                    <x-splade-submit label="Сохранить" />
                </x-splade-form>
            </div>
        </div>
    </div>
</x-app-layout>