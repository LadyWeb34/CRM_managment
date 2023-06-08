@seoTitle(__('Сотрудники'))

<x-app-layout>
    <x-slot:header>
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Сотрудники') }}
            </h2>
            <Link href="{{ route('staff.create') }}" class="m-1 ml-0 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800">{{ __('Добавить') }}</Link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-splade-table :for="$staffs">
                    @cell('action', $staff)
                    <Link  href="{{ route('staff.edit', $staff->id) }}">{{ __('Редактировать') }}</Link>
                    <Link method="DELETE" class="ml-2 text-red-700 transition duration-150 ease-in-out hover:text-red-500 focus:text-red-600 active:text-red-500" confirm="Внимание! Запись будет удалена" confirm-text="Вы хотите продолжить?" confirm-button="Да, удалить" cancel-button="Отмена" href="{{ route('staff.destroy', $staff->id) }}">
                        {{ __('Удалить') }}
                     </Link> 
                    @endcell
                </x-splade-table>
            </div>
        </div>
    </div>
</x-app-layout>