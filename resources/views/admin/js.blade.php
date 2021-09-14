<script src="/vendor/layui-v2.4.5/layui.all.js"></script>
{{--<script src="/components/base/script.js"></script>--}}
{{--<script src="/admin/js/jquery.min.js?v=2.1.4"></script>--}}
{{--<script src="/admin/js/vue.js"></script>--}}
<script src="/admin/js/admin.js"></script>
<script src="/admin/js/laypage/laypage.js"></script>

@yield('js')
<script>
    // layer.load(0,{
    //     offset: (window.parent.parent.innerHeight / 2) + 'px'
    // });

    window.onload = function() {
        window.parent.scrollTo(0, -1);
        document.body.scrollTop = 0;
    }
</script>
