@seoTitle(__('Поверка оборудования СИ'))

<x-app-layout>
    <x-slot:header>
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Близжайшие поверки') }}
            </h2>
            <Link href="{{ route('pribor.create') }}" class="m-1 ml-0 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800">{{ __('Добавить') }}</Link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-splade-table :for="$pribor">
                    {{-- @cell('status', $staff)
                        @if($staff->status == 0)
                            <span class="text-orange-500 font-semibod">Вывод с эксплуатации</span>
                        @elseif ($staff->status == 1)
                            <span class="text-green-500 font-semibod">Используется</span>
                        @elseif ($staff->status == 2)
                            <span class="text-blue-500 font-semibod">Добавлен</span>
                        @elseif ($staff->status == 3)
                            <span class="text-gray-900 font-semibod">Перенаправляется</span>
                        @elseif ($staff->status == 4)
                            <span class="text-red-500 font-semibod">Проверка</span>
                        @endif
                    @endcell
                    @cell('date_start', $pribor)
                        {{ $pribor->date_start }}
                    @endcell
                    @cell('date_realese', $pribor)
                        {{ $pribor->date_realese }}
                    @endcell
                    
                    @cell('action', $pribor)
                    <Link class="text-green-500"  href="{{ route('pribor.show', $pribor->id) }}">{{ __('Подробнее') }}</Link>
                    <Link class="ml-2 text-blue-500"  href="{{ route('pribor.edit', $pribor->id) }}">{{ __('Редактировать') }}</Link>
                    <Link method="DELETE" class="ml-2 text-red-700 transition duration-150 ease-in-out hover:text-red-500 focus:text-red-600 active:text-red-500" confirm="Внимание! Запись будет удалена" confirm-text="Вы хотите продолжить?" confirm-button="Да, удалить" cancel-button="Отмена" href="{{ route('pribor.destroy', $pribor->id) }}">
                        {{ __('Удалить') }}
                     </Link> 
                    @endcell --}}
                </x-splade-table>
            </div>
        </div>
    </div>
</x-app-layout>