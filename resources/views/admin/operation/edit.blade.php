@seoTitle(__('Редактирование операции'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Редактирование операции') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-xl bg-white overflow-hidden mx-auto shadow-xl sm:rounded-lg py-4 px-4">
                <x-splade-form :default="$operation" method="PUT" action="{{ route('operation.update',$operation->id) }}">
                    @method('PUT')
                    <x-splade-select name="pribor_id" :label="__('Наименование прибора')" :options="$pribors" />
                    <x-splade-select name="staff_id" :label="__('исполнитель')" :options="$staffs" />
                    <x-splade-input name="execute" :label="__('Дата выполнения')" />
                    <x-splade-textarea name="comment" :label="__('Комментарий')" autosize />
                    <x-splade-select name="status" :label="__('Статус прибора')">
                        <option value="0">В процессе</option>
                        <option value="1">Завершен</option>
                     </x-splade-select>
                    <br>
                    <x-splade-submit label="Сохранить" />
                </x-splade-form>
            </div>
        </div>
    </div>
</x-app-layout>