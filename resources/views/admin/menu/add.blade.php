@include('admin.header')
<div class="page">

    <div class="col-md-10 col-lg-12">
        <div class="panel">
            <div class="panel-header">
                <h4 class="panel-title">
                    @if(isset($id))
                        {{trans('menu.editMenu')}}
                    @else
                        {{trans('menu.createMenu')}}
                    @endif
                </h4>
            </div>


            <div class="panel-body">
                <form
                    action="@if(isset($id)){{ route('admin::menu.update', ['id' => $id]) }}@else{{ route('admin::menu.save') }}@endif"
                    method="post" id="form">
                    @if(isset($id)) {{ method_field('PUT') }} @endif
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">{{trans('menu.name')}}</label>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group form-group">
                                <input class="form-control" type="text" name="name" aria-describedby="icon-addon1"
                                       value="{{ $model->name ?? ''  }}">
                            </div>
                        </div>

                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">{{trans('menu.lockName')}}</label>
                        </div>
                        <div class="col-sm-5">
                            <div style="padding-top:10px;" class="custom-control custom-switch custom-switch-info">
                                <input class="custom-control-input" type="checkbox" id="abcde" name="is_lock_name"
                                       value="1"
                                       @if(isset($model) && $model->is_lock_name == App\Models\Admin\Menu::LOCK_NAME) checked @endif />
                                <label class="custom-control-label" for="abcde"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">{{trans('menu.parentName')}}</label>
                        </div>
                        <div class="col-sm-11">
                            <select class="form-control" id="standardSelect" name="pid">
                                <option value="0">{{trans('menu.topName')}}</option>
                                @foreach(App\Repository\Admin\MenuRepository::getTree() as $v)
                                    @include('admin.menu', $v)
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">{{trans('menu.route')}}</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="input-group form-group">
                                <input class="form-control" type="text" name="route" aria-describedby="icon-addon1"
                                       value="{{ $model->route ?? ''  }}">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">{{trans('menu.url')}}</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="input-group form-group">
                                <input class="form-control" type="text" name="url" aria-describedby="icon-addon1"
                                       value="{{ $model->url ?? ''  }}">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">{{trans('menu.group')}}</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="input-group form-group">
                                <input class="form-control" type="text" name="group" aria-describedby="icon-addon1"
                                       value="{{ $model->group ?? ''  }}">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">{{trans('menu.remark')}}</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="input-group form-group">
                                <textarea class="form-control" id="standardRemark" rows="3"
                                          name="remark"> {{ $model->remark ?? ''  }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">{{trans('general.order')}}</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="input-group form-group">
                                <input class="form-control" type="text" name="order" aria-describedby="icon-addon1"
                                       value="{{ $model->order ?? ''  }}">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">{{trans('general.isEnabled')}}</label>
                        </div>
                        <div class="col-sm-11">
                            <div style="padding-top:10px;" class="custom-control custom-switch custom-switch-info">
                                <input class="custom-control-input" type="checkbox" id="gbflvjkj" name="status"
                                       value="1"
                                       @if(isset($model) && $model->status == App\Models\Admin\Menu::STATUS_ENABLE) checked @endif />
                                <label class="custom-control-label" for="gbflvjkj"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row row-10 align-items-center">
                        @if(isset($id))
                            <div class="col-sm-12 text-sm-center">
                                <button class="btn btn-primary" type="submit" lay-submit lay-filter="formAdminUser"
                                        id="submitBtn">{{trans('menu.editMenu')}}</button>
                                <div style="display:inline;float:right;">
                                    <button type="button" class="btn btn-warning"
                                            onclick="history.go(-1);">{{trans('general.return')}}</button>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-12 text-sm-center">
                                <button class="btn btn-primary" type="submit" lay-submit lay-filter="formAdminUser"
                                        id="submitBtn">{{trans('menu.createMenu')}}</button>
                                <div style="display:inline;float:right;">
                                    <button type="reset" class="btn btn-secondary">{{trans('general.reset')}}</button>
                                    <button type="button" class="btn btn-warning"
                                            onclick="history.go(-1);">{{trans('general.return')}}</button>
                                </div>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

    @extends('admin.js')
    @section('js')
        <script>
            var id = '<?php echo isset($id) ? $id : 0; ?>';

            //监听提交
            $('#form').submit(function () {
                window.form_submit = $('#form').find('[type=submit]');
                form_submit.prop('disabled', true);
                if (id == 0) {
                    var method = $("#form").attr("method");
                } else {
                    var method = "PUT";
                }
                var action = $('#form').attr("action");
                $.ajax({
                    type: method,
                    url: action,
                    data: $('#form').serializeArray(),
//                data: data.field,
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
        </script>
    @endsection
</div>
</body>
</html>
