@include('admin.header')
<div class="page">

    <div class="col-md-10 col-lg-12">
        <div class="panel">
            <div class="panel-header">
                <h4 class="panel-title">{{trans('role.current')}}:{{ $role->name }}</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin::role.permission.update', ['id' => $id]) }}" method="post" id="form">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="tab-content">
                        <div class="row row-15">
                            <div class="col-12">
                                <div class="group-10">
                                    @foreach(App\Repository\Admin\MenuRepository::group() as $k => $v)
                                        <div class="layui-form-item" style="margin-top: 30px">
                                            <div class="d-inline-block">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox"
                                                           id="lmibpdpv{{ $loop->iteration }}"
                                                           value="{{ $loop->iteration }}" lay-filter="group"
                                                           lay-skin="primary"/>
                                                    <label class="custom-control-label"
                                                           for="lmibpdpv{{ $loop->iteration }}">{{ $k ? $k : '未分组' }}</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layui-form-item" style="margin-left: 50px"
                                             data-group="{{ $loop->iteration }}">
                                            @foreach($v as $menu)
                                                <div class="d-inline-block" style="margin-top: 30px;">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox"
                                                               id="child{{ $menu->id }}"
                                                               name="permission[{{ $menu->id }}]"
                                                               value="{{ $menu->name }}"
                                                               @if($rolePermissions->pluck('id')->contains($menu->id)) checked @endif />
                                                        <label class="custom-control-label"
                                                               for="child{{ $menu->id }}">{{ $menu->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach

                                    <div class="row row-10 align-items-center"
                                         style="margin-top: 40px;margin-bottom: -20px;">
                                        <div class="col-sm-12 text-sm-center">
                                            <button class="btn btn-primary" type="submit" lay-submit
                                                    lay-filter="formAdminUser"
                                                    id="submitBtn">{{trans('role.privileges')}}</button>
                                            <div style="display:inline;float:right;">
                                                <button type="button" class="btn btn-warning"
                                                        onclick="history.go(-1);">{{trans('general.return')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @extends('admin.js')
    @section('js')
        <script>
            //监听提交
            $('#form').submit(function () {
                window.form_submit = $('#form').find('[type=submit]');
                form_submit.prop('disabled', true);
                var action = $('#form').attr("action");
                $.ajax({
                    type: "PUT",
                    url: action,
                    data: $('#form').serializeArray(),
                    success: function (result) {
                        if (result.code !== 0) {
                            form_submit.prop('disabled', false);
                            layer.msg(result.msg, {shift: 6, skin: 'alert-secondary alert-lighter'});
                            return false;
                        }
                        layer.msg(result.msg, {shift: 1}, function () {
                            if (result.reload) {
                                location.reload();
                            }
                            if (result.redirect) {
                                location.href = '{!! url()->previous() !!}';
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

                return false;
            });

            form.on('checkbox(group)', function (data) {
                console.log('aaa');
                var checked = data.elem.checked;
                $("div[data-group=" + data.value + "]").find('input[type=checkbox]').each(function (i, obj) {
                    obj.checked = checked;
                });
                form.render('checkbox');
            });

        </script>
    @endsection
</div>
</body>
</html>
