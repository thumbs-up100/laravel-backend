
@isset($lists)
    @foreach($lists as $k => $v)
        <tr>
            <td>待开发。。。</td>

        </tr>
    @endforeach
@endisset
<!--分页待开发（使用的是静态分页）-->
<input id="allpagecount" type="hidden" value="{{$allpage}}">
<input id="count" type="hidden" value="{{$count}}">
