<!DOCTYPE html>
<html class="rd-navbar-sidebar-active" lang="en">
<head>
    <title>登陆 - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Template Monster Admin Template">
    <meta property="og:description" content="brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/components/base/base.css">
    <script src="/components/base/script.js"></script>
</head>
<body>
<div class="page">
    <section class="section-md section-transparent">
        <div class="container-fluid">
            <div class="panel p-0">
                <div class="panel-body section-one-screen section-lg">
                    <canvas class="js-waves"></canvas>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-xl-5">
                                <h3 class="text-center">Welcome</h3>
                                <div class="mt-3 text-center"><img class="rounded-circle" src="/images/users/user-09-247x247.jpg" width="100" height="100" alt=""></div>
                                <form class="mt-3" method="post" id="form">
                                    <div class="row row-30 justify-content-center">
                                        <div class="col-12 col-md-10">
                                            <div class="form-group">
                                                <label for="user">{{trans('adminUser.name')}}</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text fa-user"></span></div>
                                                    <input class="form-control" id="user" type="text" name="name" placeholder="Enter username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pass">{{trans('adminUser.password')}}</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text fa-lock"></span></div>
                                                    <input class="form-control" id="pass" type="password" name="password" placeholder="Enter password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pass">{{trans('adminUser.captcha')}}</label>
                                                <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text fa-lock"></span></div>
                                                        <input class="form-control" type="text" name="captcha" id="login-vercode"  placeholder="图形验证码">
                                                        <div style="margin-left: 10px;height: 50px;">
                                                            <img src="{{ captcha_src() }}" id="get-vercode" title="点击刷新验证码" onclick="$(this).prop('src', $(this).prop('src').split('?')[0] + '?' + Math.random())"  style="height: 49px;">
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-10">
                                            <div class="row row-10 align-items-center">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-switch custom-switch-info">
                                                        <input class="custom-control-input" type="checkbox" id="gbflvjkj" name="remember" />
                                                        <label class="custom-control-label" for="gbflvjkj">Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-sm-right">
                                                    <button class="btn btn-primary" type="submit">{{trans('general.submit')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer footer-small">
        <div class="container-fluid">
            {{--<p><span class="d-inline-block pr-2">PART</span>© 2019. Design by Zemez</p>--}}
        </div>
    </footer>
</div>
<script src="/vendor/layui-v2.4.5/layui.all.js"></script>
<script src="/admin/js/admin.js"></script>
<script>
    if(window !=top){
        top.location.href=location.href;
    }

    $('#form').submit(function () {
        window.form_submit = $('#form').find('[type=submit]');
        form_submit.prop('disabled', true);
        $.ajax({
            url: '{{ route('admin::login') }}',
            data: $('#form').serializeArray(),
            success: function (result) {
                if (result.code !== 0) {
                    form_submit.prop('disabled', false);
                     layer.msg(result.msg, {shift: 6, skin:'alert-secondary alert-lighter'});
                    return false;
                }
                layer.msg(result.msg, {shift: 1}, function () {
                    if (result.reload) {
                        location.reload();
                    }
                    if (result.redirect) {
                        location.href = '{{ route('admin::index') }}';
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
                        layer.msg(parse.msg, {shift: 6, skin:'alert-secondary alert-lighter'});
                    }
                    return false;
                } else if (resp.status === 404) {
                     layer.msg('资源不存在', {icon: 5, skin:'alert-secondary alert-lighter'});
                    return false;
                } else if (resp.status === 401) {
                     layer.msg('请先登录', {shift: 6, skin:'alert-secondary alert-lighter'});
                    return false;
                } else if (resp.status === 429) {
                     layer.msg('访问过于频繁，请稍后再试', {shift: 6, skin:'alert-secondary alert-lighter'});
                    return false;
                } else if (resp.status === 419) {
                     layer.msg('非法请求。请刷新页面后重试。', {shift: 6, skin:'alert-secondary alert-lighter'});
                    return false;
                } else if (resp.status === 500) {
                     layer.msg('内部错误，请联系管理员', {shift: 6, skin:'alert-secondary alert-lighter'});
                    return false;
                } else {
                    var parse = $.parseJSON(resp.responseText);
                    // if (parse && parse.err) {
                    if (parse) {
                         layer.alert(parse.msg);
                    }
                    return false;
                }
            },
            complete: function (d) {
                if (d.responseText.indexOf('"errors"') >= 0) {
                    $('#get-vercode').click();
                }
            }
        });
        return false;
    });
</script>
</body>
</html>
