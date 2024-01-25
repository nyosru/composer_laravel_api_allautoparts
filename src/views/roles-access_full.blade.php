<form action="{{ route('phpcatcom.permission.setAccessFull',['role'=> $d->id ]) }}" method="post">
    @csrf
    <div class="inline-flex rounded-md shadow-sm" role="group">
        {{--        <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">--}}
        {{--            ПД--}}
        {{--        </button>--}}
        <button type="submit"
                name="new_status" value="1"
                class="px-2 py-1 text-sm font-medium text-gray-900
                {{ $d->access_full ? 'bg-green-600' : 'bg-green-200' }} border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            Да
        </button>
        <button type="submit"
                name="new_status" value="0"
                class="px-2 py-1 text-sm font-medium text-gray-900
                {{ !$d->access_full ? 'bg-red-600' : 'bg-red-200' }} border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            Нет
        </button>

    </div>
</form>
