@seoTitle(__('Редактировать отдел'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Редактировать отдел') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-xl bg-white overflow-hidden mx-auto shadow-xl sm:rounded-lg py-4 px-4">
                <x-splade-form method="PUT" :default="$departament" action="{{ route('departaments.update', $departament->id) }}">
                    @method('PUT')
                    <x-splade-input name="title" label="Название отдела" />
                    <x-splade-input name="company" :label="__('Наименование компании')" />
                    <x-splade-input name="adress" :label="__('Фактический адрес')" />
                    <x-splade-input name="phone" :label="__('Мобильный телефон')" />
                    <x-splade-input name="s_phone" :label="__('Внутренний телефон')" />
                    <x-splade-input name="people" :label="__('Ответственно лицо')" />
                    <br>
                    <x-splade-submit label="Сохранить" />
                </x-splade-form>
            </div>
        </div>
    </div>
</x-app-layout>