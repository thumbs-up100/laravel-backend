@include('admin.header')
<div class="page">
    {{--@include('admin.breadcrumb')--}}

    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-header">
                <div class="d-flex flex-wrap align-items-center justify-content-between group-5">
                    <h4 class="panel-title">
                        <span class="panel-icon fa-tasks"></span>
                        <span>{{trans('menu.menuList')}}</span>
                    </h4>
                    <div class="form-group">
                        <a href="{{ route('admin::menu.create') }}">
                            <button class="btn btn-primary" type="button"
                                    id="submitBtn">{{trans('menu.createMenu')}}</button>
                        </a>
                    </div>
                </div>

                <div style="margin-top: 20px;">
                    <form name="admin_list_sea" class="form-search" method="get"
                          action="{{ route('admin::menu.index') }}">
                        {{ csrf_field() }}
                        <div class="row row-15">
                            <div class="col-sm-2">
                                <div class="input-group">
                                    <input class="form-control" id="text" type="text"
                                           placeholder="{{ trans('menu.name') }}" name="name">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control" name="status">
                                    <option value="">{{ trans('general.select') }}</option>
                                    <option value="0">{{ trans('general.hide') }}</option>
                                    <option value="1">{{ trans('general.show') }}</option>
                                </select>
                            </div>

                            <div class="col-sm-2">
                                <button class="btn btn-success" type="submit" lay-submit lay-filter="formAdminUser"
                                        id="submitBtn">{{trans('general.search')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" style="padding-bottom: 20px;">
                        <thead class="border-bottom">
                        <tr class="long-tr">
                            <th>{{trans('menu.id')}}</th>
                            <th>{{trans('menu.name')}}</th>
                            <th>{{trans('menu.group')}}</th>
                            <th>{{trans('menu.parentName')}}</th>
                            {{--<th>{{trans('menu.route')}}</th>--}}
                            <th>{{trans('menu.url')}}</th>
                            <th>{{trans('menu.order')}}</th>
                            <th>{{trans('menu.status')}}</th>
                            <th>{{trans('menu.create')}}</th>
                            {{--<th>{{trans('menu.update')}}</th>--}}
                            <th>{{trans('menu.action')}}</th>
                        </tr>
                        </thead>
                        <tbody id="list-content">
                        @isset($lists)
                            @foreach($lists as $k => $v)
                                <tr>
                                    <td>{{ $v['id'] }}</td>
                                    <td>
                                        <a href="{{ route('admin::menu.index', ['pid' => $v['id']]) }}">{{ $v['name'] }}</a>
                                    </td>
                                    <td>{{ $v['group'] }}</td>
                                    <td>{{ $v['parentName'] }}</td>
                                    {{--<td>{{ $v['route'] }}</td>--}}
                                    <td>{{ $v['url'] }}</td>
                                    <td>{{ $v['order'] }}</td>
                                    <td @if($v['status'] == 1) class="text-success" @else class="text-danger"
                                        @endif>
                                        @if($v['status'] == 1)
                                            {{trans('general.show')}}
                                        @else
                                            {{trans('general.hide')}}
                                        @endif
                                    </td>
                                    <td>{{ $v['created_at'] }}</td>
                                    {{--<td>{{ $v['updated_at'] }}</td>--}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle btn-info btn-sm" data-toggle="dropdown">
                                                <span>Active</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                   href="{{ route('admin::menu.edit', ['id' => $v['id']]) }}">{{trans('general.edit')}}</a>
                                                <a class="dropdown-item" href="javascript:;"
                                                   data-modal-trigger='{"target":"#modal-sample"}'>{{trans('general.delete')}}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <div class="modal fade" id="modal-sample">
                                    <div class="modal-dialog">
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
                                                <button class="btn btn-primary"
                                                        onclick="deleteMenu('{{ route('admin::menu.delete', ['id' => $v['id']]) }}')">{{trans('general.confirm')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>

                @include('admin.pagination', ['paginator' => $lists])
            </div>
        </div>
    </div>

    @extends('admin.js')
    @section('js')
        <script>
            var token = $("input[name='_token']").val();

            function deleteMenu(url) {
                $.ajax({
                    url: url,
                    type: "DELETE",   //请求方式
                    headers: {'X-CSRF-Token': token},
                    success: function (result) {
                        if (result.code !== 0) {
                            layer.msg(result.msg, {shift: 6, skin: 'alert-secondary alert-lighter'});
                            return false;
                        }
                        layer.msg(result.msg, {shift: 1}, function () {
                            if (result.reload) {
                                location.reload();
                            }
                            if (result.redirect) {
                                location.href = '{!! url()->current() !!}';
                            }
                        });
                    },
                    error: function (resp, stat, text) {
                        if (window.form_submit) {
                            form_submit.prop('disabled', false);
                        }
                        if (resp.status === 422) {
                            var parse = $.parseJSON(resp.responseText);
                            if (parse) {
                                layer.msg(parse.msg, {shift: 6, skin: 'alert-secondary alert-lighter'});
                            }
                            return false;
                        } else if (resp.status === 404) {
                            layer.msg('资源不存在', {icon: 5, skin: 'alert-secondary alert-lighter'});
                            return false;
                        } else if (resp.status === 401) {
                            layer.msg('请先登录', {shift: 6, skin: 'alert-secondary alert-lighter'});
                            return false;
                        } else if (resp.status === 429) {
                            layer.msg('访问过于频繁，请稍后再试', {shift: 6, skin: 'alert-secondary alert-lighter'});
                            return false;
                        } else if (resp.status === 419) {
                            layer.msg('非法请求。请刷新页面后重试。', {shift: 6, skin: 'alert-secondary alert-lighter'});
                            return false;
                        } else if (resp.status === 500) {
                            layer.msg('内部错误，请联系管理员', {shift: 6, skin: 'alert-secondary alert-lighter'});
                            return false;
                        } else {
                            var parse = $.parseJSON(resp.responseText);
                            // if (parse && parse.err) {
                            if (parse) {
                                layer.alert(parse.msg);
                            }
                            return false;
                        }
                    }
                });
            }
        </script>
    @endsection
</div>
</body>
</html>
