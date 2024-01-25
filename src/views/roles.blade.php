@extends('phpcatcom/permission/gui::layouts.app')

@section('content')

    {{--    data: {{ $data }}--}}
    {{--    <Br/>    <Br/>--}}


    <table class="table w-full">
        <thead>
        <tr>
            <th>№№</th>
            <th>имя</th>
            <th style="width: 100px;">полный доступ</th>
            <th style="width: 100px;">действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $data as $d )
            <tr class="@if($d->id%2==0) bg-neutral-100 @else bg-neutral-200 @endif">
                <td class="p-2 w-[40px]">
                    {{ $d->id }}
                </td>
                <td class="p-2">
                    <b>{{ $d->name }}</b><br/>
                    {{ $d->description }}
                </td>
                <td class="p-2">
                    @include('phpcatcom/permission/gui::roles-access_full')
                </td>
                <td class="p-2">
                    <a href="">удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <br/>
    <br/>
    <br/>
    <h2 class="text-xl font-bold">Добавить роль</h2>
    <form action="{{ route('phpcatcom.permission.role.store') }}" method="post">
        @csrf
        <label>
            Название
            <br/>
            <input type="text" name="name"
                   class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
        </label>
        <label>
            ОПисание
            <br/>
            <textarea
                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    name="description"></textarea>
        </label>
        <br/>
        <button
                class="bg-green-300 px-2 py-1 rounded"
                type="submit">Добавить
        </button>
    </form>

@endsection
