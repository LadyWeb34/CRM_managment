@seoTitle(__('Паспорт прибора'))

<x-app-layout>
    <x-slot:header>
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Паспорт прибора') }} - {{ $pribor->title }} №{{ $pribor->number }}
            </h2>
            <Link href="{{ route('pribor.index') }}" class="m-1 ml-0 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800">{{ __('На главную') }}</Link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-operations shadow-xl sm:rounded-lg">
                
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white">
                            {{ __('Подробное описание') }}
                        </caption>
                        <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Наименование прибора') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->title }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Инвертарный номер') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->number }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Наименование типа прибора') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->type->title }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Тип прибора') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->type->type }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Номер госреестра') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    №{{ $pribor->type->registry }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Класс точности') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->type->class }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Дата выпуска') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->date_realese }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Наименование организации') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->departament->company }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Наименование отдела организации') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->departament->title }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Ответственное лицо') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->departament->people }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Контактный телефон') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->departament->phone }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Фактический адрес') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->departament->adress }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Дата начала пользования') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->date_start }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Дата окончания пользования') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    {{ $pribor->date_end }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                    {{ __('Дата статус прибора') }}
                                </th>
                                <td class="px-6 py-4  text-gray-900">
                                    @if($pribor->status == 0)
                                        Не используется
                                    @elseif ($pribor->status == 1)
                                        Используется
                                    @elseif ($pribor->status == 2)
                                        Добавлен
                                    @elseif ($pribor->status == 3)
                                        Перенаправляется
                                    @elseif ($pribor->status == 4)
                                        Не исправлен
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- <x-splade-table :for="$operations">
                    @cell('pribor_id', $pribors)
                        {{ $pribors->pribor->title }}
                    @endcell
                    @cell('staff_id', $staffs)
                        {{ $staffs->staff->name }} {{ $staffs->staff->surname }}
                    @endcell
                    @cell('created_at', $created)
                        {{ $created->created_at->format('d.m.y') }}
                    @endcell
                    @cell('status', $operation)
                    @if($operation->status == 0)
                        <span class="text-orange-500 font-semibod">В процессе</span>
                    @elseif ($operation->status == 1)
                        <span class="text-green-500 font-semibod">Завершен</span>
                    @endif
                @endcell
                    @cell('action', $operation)
                    <Link href="{{ route('operation.edit', $operation->id) }}">{{ __('Редактировать') }}</Link>
                    <Link method="DELETE" class="ml-2 text-red-700 transition duration-150 ease-in-out hover:text-red-500 focus:text-red-600 active:text-red-500" confirm="Внимание! Запись будет удалена" confirm-text="Вы хотите продолжить?" confirm-button="Да, удалить" cancel-button="Отмена" href="{{ route('operation.destroy', $operation->id) }}">
                        {{ __('Удалить') }}
                     </Link> 
                    @endcell
                </x-splade-table> --}}
            </div>
        </div>
    </div>
</x-app-layout>