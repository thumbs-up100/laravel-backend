@include('admin.header')
<div class="page">
    @php
        $user = \Auth::guard('admin')->user();
        $isSuperAdmin = in_array($user->id, config('light.superAdmin'));
    @endphp
    <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar">
                @include('admin.top')
                @include('admin.menus')
            </nav>
        </div>
    </header>
    <!-- 内容主体区域 -->
    <!-- 第一种自适应，不包含js -->
    {{--<iframe class="section-sm" name="iframeMain" id="iframeMain"  src="/admin/aggregation"  onload="this.height=iframeMain.document.body.scrollHeight" scrolling="no" frameborder="0" width="100%">--}}
    {{--该浏览器不支持iframe，请使用其他浏览器！--}}
    {{--</iframe>--}}
<!-- 第二种自适应，包含js（iframeAutoHeight） -->
    {{--<iframe style='height:100%; width:100%;' frameborder=0 onload='iframeAutoHeight(this)' scrolling='no'--}}
    {{--src="/admin/aggregation" name="iframeMain" id="iframeMain">--}}
    {{--</iframe>--}}
<!-- 第三种自适应，包含js（reinitIframe） -->
    {{--    <iframe src="/admin/aggregation" frameborder="0" scrolling="no" onload="this.height=100" width="100%"--}}
    {{--            name="iframeMain" id="iframeMain"></iframe>--}}

    <section class="section-sm" >
        <iframe src="/admin/aggregation" frameborder="0" scrolling="no" onload="this.height=100" width="100%"
                name="iframeMain" id="iframeMain"></iframe>
    </section>

    @include('admin.footer')
</div>

@extends('admin.js')
{{--@yield('js')--}}
<script>
    window.onload = function () {
        window.parent.scrollTo(0, -1);
        document.body.scrollTop = 0;
    };

    function reinitIframe() {
        var iframe = document.getElementById("iframeMain");
        try {
            var bHeight = iframe.contentWindow.document.body.scrollHeight;
            var dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
            iframe.height = Math.max(bHeight, dHeight);
        } catch (ex) {
        }
    }

    window.setInterval("reinitIframe()", 200);

    // iframe高度自适应
    // function iframeAutoHeight(el) {
    //     // el.style.height = el.contentWindow.document.body.offsetHeight + 'px'
    //     var agent = navigator.userAgent.toLowerCase();
    //     console.log($(el).height());
    //     if (agent.indexOf("chrome") > -1) { //chrome
    //         $(el).height($(el).parent().height());
    //     }
    // }

    // 左侧菜单选择状态
    function Ajaxcontent(url, obj) {
        $("#iframeMain").attr("src", url);
        $(obj).parent().addClass('active');
        $(obj).parent().siblings('li').removeClass('active');

        var node = $(obj).parent().parent().parent();
        node.siblings('li').removeClass('active');
        node.addClass('active');
    }
</script>
</body>
</html>
