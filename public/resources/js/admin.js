var $ = layui.$;
layer = layui.layer;
csrf_token = $('meta[name=csrf-token]').eq(0).attr('content');

errorLayer = (resp, stat, text) => {
    customLayerCloseAll();

    $('#formAjaxSubmit').prop('disabled', false);

    if (resp.status === 422) {
        var parse = $.parseJSON(resp.responseText);
        if (parse) {
            customLayerMsg(parse.msg, {shift: 6,  skin: 'alert-secondary alert-lighter'});
        }
        return false;
    } else if (resp.status === 404) {
        customLayerMsg('资源不存在', {icon: 5, skin: 'alert-secondary alert-lighter'});
        return false;
    } else if (resp.status === 401) {
        customLayerMsg('请先登录', {shift: 6, skin: 'alert-secondary alert-lighter'}, function () {
            location.reload();
        });
        return false;
    } else if (resp.status === 429) {
        customLayerMsg('访问过于频繁，请稍后再试', {shift: 6, offset: '300px', skin: 'alert-secondary alert-lighter'});
        return false;
    } else if (resp.status === 419) {
        customLayerMsg('非法请求。请刷新页面后重试。', {shift: 6, skin: 'alert-secondary alert-lighter'});
        return false;
    } else if (resp.status === 500) {
        customLayerMsg('内部错误，请联系管理员', {shift: 6, skin: 'alert-secondary alert-lighter'});
        return false;
    } else {
        var parse = $.parseJSON(resp.responseText);
        // if (parse && parse.err) {
        if (parse) {
            customLayerMsg(parse.msg, {skin: 'alert-secondary alert-lighter'});
        }
        return false;
    }
};

var ajax_options = {
    headers: {'X-CSRF-Token': csrf_token},
    type: 'post',
    dataType: 'json',
    error: errorLayer
};
$.ajaxSetup(ajax_options);

var token = $("input[name='_token']").val();

deleteRequest = (url) => {
    $.ajax({
        url: url,
        type: "DELETE",   //请求方式
        headers: {'X-CSRF-Token': token},
        success: function (result) {
            if (result.status !== 1) {
                customLayerMsg(result.msg, {shift: 6, skin: 'alert-secondary alert-lighter'});
                return false;
            }
            customLayerMsg(result.msg, {shift: 0}, function () {
                location.reload();
            });
        },
        error: errorLayer
    });
}

postRequest = (url, data) => {
    $.ajax({
        url: url,
        data: data,
        type: "POST",   //请求方式
        headers: {'X-CSRF-Token': token},
        success: function (result) {
            if (result.status !== 1) {
                customLayerMsg(result.msg, {shift: 6, skin: 'alert-secondary alert-lighter'});
                return false;
            }
            customLayerMsg(result.msg, {shift: 1}, function () {
                location.reload();
            });
        },
        error: errorLayer
    });
}

postRequestSingle = (url, data) => {
    $.ajax({
        url: url,
        data: data,
        type: "POST",   //请求方式
        headers: {'X-CSRF-Token': token},
        success: function (result) {
            customLayerMsg(result.msg);
        },
        error: errorLayer
    });
}

removeImage = (_elem) => {
    $(_elem).parents('.dz-preview').remove();
};

$(function () {
    $('#formAjaxSubmit,#formAjaxSubmit2').click(function () {
        customLayerLoad();

        // window.parent.$("body").animate({scrollTop: 0}, 'slow');
        let submit = $(this);
        submit.attr('disabled', true);
        let form = $(this).parents('form');
        // 批量上传图片
        $("input[name='image[]']").each((i, item) => {
            form.append('<input type="hidden" name="images[]" value="' + $(item).val() + '">');
        });
        form.ajaxSubmit({
            success: function (result) {
                customLayerCloseAll();
                if (result.status !== 1) {
                    submit.attr('disabled', false);
                    customLayerMsg(result.msg, {shift: 6, skin: 'alert-secondary alert-lighter'});
                    return false;
                }
                let href = document.referrer;
                if (result.data.redirect) {
                    href = result.data.redirect;
                }
                customLayerMsg(result.msg, {shift: 1}, function () {
                    window.location.href = href;
                });
            },
            error: errorLayer
        });
    })
});

var parentWidth = window.parent.parent.innerWidth;
var thisWidth = $(this).width();
var left = (parentWidth / 2) + 45 + 'px';
// 自定义弹出框
customLayerLoad = () => {
    parent.layer.load(0, {
        offset: [(window.parent.parent.innerHeight / 2) + 'px', left]
    });
}
// 关闭全部弹窗
customLayerCloseAll = () => {
    parent.layer.closeAll();
}
// 自定义弹出消息
customLayerMsg = (msg, obj = {}, callback = {}) => {
    let customObj = {
        offset: [(window.parent.parent.innerHeight / 2) + 'px', left]
    }
    if (!$.isEmptyObject(obj)) {
        $.each(obj, (i, item) => {
            customObj[i] = item;
        });
    }
    parent.layer.msg(msg, customObj, callback);
}
