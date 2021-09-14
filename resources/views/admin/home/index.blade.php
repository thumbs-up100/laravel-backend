@extends('admin.base')

@section('title', '首页')

@extends('admin.js')
@section('js')
    <script>
        window.onload = function() {
            window.parent.scrollTo(0, -1);
            document.body.scrollTop = 0;
        };
    </script>
@endsection