@extends('phpcatcom/permission/gui::layouts.app')

@section('content')
    {{--    data: {{ $data }}--}}
    {{--    <Br/>    <Br/>--}}

{{--    @if(Session::has('message'))--}}
{{--        <p class="alert alert-info">{{ Session::get('message') }}</p>--}}
{{--    @endif--}}

{{--    @if ( $attributes->has('status') )--}}
{{--        <div class="alert alert-success">--}}
{{--            {{ $attributes->get('status') }}--}}
{{--        </div>--}}
{{--    @endif--}}

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <table class="table w-full">
        <thead>
        <tr>
{{--            <th>№№</th>--}}
            <th>имя</th>
            <th>почта</th>
            <th>текущая роль</th>
            <th>действия</th>
            <th>полный доступ</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $data as $d )
            @include('phpcatcom/permission/gui::users-item')
        @endforeach
        </tbody>
    </table>

    @if(1==2)
        <Br/>
        <Br/>

        <form action="">
            @csrf
            <label>
                НАзвание
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
            <br/>
            <button
                    class="bg-green-300 px-2 py-1 rounded"
                    type="submit">Добавить
            </button>
        </form>
    @endif
@endsection
