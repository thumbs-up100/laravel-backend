@include('admin.header')
<style type="text/css">
    .jqthumb {
        border-radius: 5px;
    }
</style>
<div class="page">
    <section class="section-sm">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-header">
                    <div class="d-flex flex-wrap align-items-center justify-content-between group-5">
                        @include('admin.breadcrumb')
                        <div class="form-group">
                            <a href="{{ route('admin::versions.create', ['app_id' => request()->id]) }}">
                                <button class="btn btn-primary" type="button"
                                        id="submitBtn">添加新版本
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @csrf
                    <div class="table-responsive scroller scroller-horizontal">
                        <table class="table" style="padding-bottom: 20px;">
                            <thead class="border-bottom">
                            <tr class="long-tr">
                                <th>版本</th>
                                <th>备注</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody id="list-content">
                            @isset($lists)
                                @foreach($lists as $k => $v)
                                    <tr>
                                        <td>{{ $v['version'] }}</td>
                                        <td>{{ $v['note'] }}</td>
                                        <td>
                                            @if($v['status'] == 1)
                                                上架
                                            @else
                                                下架
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle btn-info btn-sm"
                                                        data-toggle="dropdown">
                                                    <span>操作</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                       href="{{ route('admin::versions.create', ['id' => $v['id']]) }}">编辑</a>
                                                    <a class="dropdown-item"
                                                       data-id="{{ $v['id'] }}"
                                                       href="javascript:;"
                                                       onclick="changeStatus(this)">
                                                        @if($v['status'])
                                                            下架
                                                        @else
                                                            上架
                                                        @endif
                                                    </a>
                                                    <a class="dropdown-item item-delete"
                                                       data-url="{{ route('admin::versions.delete', ['id' => $v['id']]) }}"
                                                       data-toggle="modal"
                                                       data-target="#modal"
                                                       href="javascript:;">删除</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                            </tbody>
                        </table>
                    </div>

                    @include('admin.pagination', ['paginator' => $lists])

                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="modal" style="position: fixed; top: 0;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{trans('general.message')}}</h5>
                <button class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <p>{{trans('general.deleteSure')}}</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary"
                        data-dismiss="modal">{{trans('general.cancel')}}</button>
                <button class="btn btn-primary" id="confirm-delete"
                        onclick="">{{trans('general.confirm')}}</button>
            </div>
        </div>
    </div>
</div>

@extends('admin.js')
@section('js')
    <script src="/admin/js/jqthumb.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.images-thumb').jqthumb({
                width: 50,
                height: 50
            });

            $('.item-delete').click(function () {
                let url = $(this).attr('data-url');
                $('#confirm-delete').attr('onclick', "deleteRequest('" + url + "')");
            });
        });
        let changeStatus = (_elem) => {
            let id = $(_elem).attr('data-id');
            postRequest('{{ route("admin::versions.status") }}', {
                id: id
            });
        }
    </script>
    @endsection
    </body>
    </html>

