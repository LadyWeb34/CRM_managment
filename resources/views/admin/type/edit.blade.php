@seoTitle(__('Редактировать тип СИ'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Редактировать тип СИ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-xl bg-white overflow-hidden mx-auto shadow-xl sm:rounded-lg py-4 px-4">
                <x-splade-form :default="$type" method="PUT" action="{{ route('type.update', $type->id) }}">
                    @method('PUT')
                    <x-splade-input name="title" :label="__('Наименование СИ')" />
                    <x-splade-input name="type" :label="__('Тип СИ')" />
                    <x-splade-input name="registry" :label="__('№ госреестра')" />
                    <x-splade-input name="class" :label="__('Класс точности')" />
                    <br>
                    <x-splade-submit label="Сохранить" />
                </x-splade-form>
            </div>
        </div>
    </div>
</x-app-layout>