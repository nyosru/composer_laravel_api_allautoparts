@extends('phpcatcom/permission/gui::layouts.app')

@section('content')

    <div class="grid grid-cols-4 gap-4">
        <div>
            <a class="px-2 py-1 bg-blue-300 block" href="{{ route('phpcatcom.permission.places.refresh') }}">Добавить
                недостающих роутов</a>
            <br/>
            <small>(будут добавлены те роуты которых не хватает в списке)</small>
        </div>
        <div>
            <a class="px-2 py-1 bg-blue-300 block" href="{{ route('phpcatcom.permission.places.fresh') }}">Удалить все и
                Добавить роуты</a>
        </div>
    </div>

    {{--Data: {{$data}}--}}

    <table class="table-auto">

        <thead style="position: sticky; top: 0px;">
        <tr class="bg-white">
            <th class="p-2 bg-gray-300">Имя роута</th>
            <th class="p-2 bg-gray-200">куда он ведёт</th>
            {{--            <th>метод</th>--}}
            <th class="p-2  bg-gray-300">домен</th>
            @foreach($data_roles as $dr )
                <th class="p-2 @if($loop->index%2==0) bg-gray-200 @endif ">
                    {{$dr->name}}

{{--                    @include('phpcatcom/permission/gui::places-access_full')--}}

                </th>
            @endforeach
        </tr>
        </thead>

        <tbody>
        @foreach($data as $p)
            @include('phpcatcom/permission/gui::places-item')
        @endforeach
        </tbody>
    </table>

    {{--    place: {{ $places }}--}}

@endsection
