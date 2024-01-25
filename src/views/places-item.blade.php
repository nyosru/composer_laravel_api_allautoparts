<tr class="@if($loop->index%2==0) bg-neutral-100 @else bg-neutral-200 @endif">
    <td class="p-2">
{{--        {{str_replace('.',' .', $p['name'])}}--}}
        {{$p['name']}}
    </td>
    <td class="p-2">{{ str_replace(['\\','@'],[' \\',' @'], $p['action'] ) }}</td>
    {{--                        <td class="p-2">{{$p['method']}}</td>--}}
    <td class="p-2">{{$p['domain']}}</td>
    @foreach($data_roles as $dr )
        <td class="pr-6">

{{--            {{$dr->id}}--}}

            <form action="{{ route('phpcatcom.permission.setter.store') }}" method="post">
                @csrf

{{-- {{ in_array(['id'=>$dr->id], (array) $p->roles) ? '111' : '222' }}--}}
{{-- 11-{{ role_in_permission($p->roles,$dr->id) }}--}}
{{--{{ print_r($data2[$p->id]) }}--}}
                <nobr>
                <button type="submit"
                        class="px-1 pb-1  rounded
                        bg-green-100 hover:bg-green-300
                        {{ isset($data2[$p->id][$dr->id]) ? 'border-2 border-green-500' : '' }}
                        "
                        name="action" value="on">есть
                </button>
                <button type="submit"
                        class="px-1 pb-1 rounded
                        bg-red-100 hover:bg-red-300
{{--                        {{ !isset($data2[$p->id][$dr->id]) ? 'bg-red-600 hover:bg-red-700' : 'bg-red-200 hover:bg-red-400' }}--}}
                                                {{ !isset($data2[$p->id][$dr->id]) ? 'border-2 border-red-500' : '' }}

                        "
                        name="action" value="off">нет
                </button>
                </nobr>
                <input type="hidden" name="permission_id" value="{{ $p->id }}"/>
                <input type="hidden" name="role_id" value="{{ $dr->id }}"/>
                <input type="hidden" name="return" value="back"/>
                {{--                                    ['permission_id' => , 'role_id' => $dr->id ]--}}
            </form>
            {{--                                <button href="{{ route('phpcatcom.permission.setter.store',['permission_id' => $p->id, 'role_id' => $dr->id ]) }}" >есть</button>--}}
            {{--                                <a href="{{ route('phpcatcom.permission.setter.store',['permission_id' => $p->id, 'role_id' => $dr->id , 'action' => 'off' ]) }}" >нет</a>--}}

        </td>
    @endforeach
</tr>
{{--<tr>--}}
{{--    <td colspan="4">--}}
{{--        {{ $p  }}--}}
{{--    </td>--}}
{{--</tr>--}}
