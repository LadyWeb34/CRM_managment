@seoTitle(__('Добавить новый отдел'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавить новый отдел') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-xl bg-white overflow-hidden mx-auto shadow-xl sm:rounded-lg py-4 px-4">
                <x-splade-form action="{{ route('departaments.store') }}">
                    <x-splade-input name="title" label="Название отдела" placeholder="Технический отдел"/>
                    <x-splade-input name="company" :label="__('Наименование компании')" placeholder="ООО ЭнергоСветМаш"/>
                    <x-splade-input name="adress" :label="__('Фактический адрес')" placeholder="г.Волгоград, ул.Центральная, д.6"/>
                    <x-splade-input id="phone"  name="phone" :label="__('Мобильный телефон')" placeholder="88005553255" />
                    <x-splade-input type="tel" name="s_phone" :label="__('Внутренний телефон')" placeholder="55555" />
                    <x-splade-input name="people" :label="__('Ответственно лицо')" placeholder="Петров Иван Викторович" />
                    
                    <br>
                    <x-splade-submit label="Сохранить" />
                </x-splade-form>
            </div>
        </div>
    </div>
</x-app-layout>