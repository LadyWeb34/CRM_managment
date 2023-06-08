@seoTitle(__('Операции'))

<x-app-layout>
    <x-slot:header>
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Операции и работы') }}
            </h2>
            <Link href="{{ route('operation.create') }}" class="m-1 ml-0 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800">{{ __('Добавить') }}</Link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-operations shadow-xl sm:rounded-lg">
                <x-splade-table :for="$operations">
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
                </x-splade-table>
            </div>
        </div>
    </div>
</x-app-layout>