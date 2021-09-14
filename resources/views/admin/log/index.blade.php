@include('admin.header')
<div class="page">
    {{--@include('admin.breadcrumb')--}}

    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-header">
                <div class="d-flex flex-wrap align-items-center justify-content-between group-5">
                    <h4 class="panel-title">
                        <span class="panel-icon fa-tasks"></span>
                        <span>{{trans('log.logList')}}</span>
                    </h4>
                </div>

                <div style="margin-top: 20px;">
                    <form name="admin_list_sea" class="form-search" method="get"
                          action="{{ route('admin::log.index') }}">
                        {{--{{ csrf_field() }}--}}
                        <div class="row row-15">
                            <div class="col-sm-2">
                                <div class="input-group">
                                    <input class="form-control" id="text" type="text"
                                           placeholder="{{trans('log.name')}}"
                                           name="name">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="input-group">
                                    <input class="form-control" id="text" type="text" placeholder="url" name="url">
                                </div>
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
                            <th>{{trans('log.id')}}</th>
                            <th>{{trans('log.name')}}</th>
                            <th>{{trans('log.url')}}</th>
                            {{--<th>{{trans('log.data')}}</th>--}}
                            <th>{{trans('log.ip')}}</th>
                            <th>{{trans('log.useragent')}}</th>
                            <th>{{trans('log.create')}}</th>
                        </tr>
                        </thead>
                        <tbody id="list-content">
                        @isset($lists)
                            @foreach($lists as $k => $v)
                                <tr>
                                    <td>{{ $v['id'] }}</td>
                                    <td>{{ $v['user_name'] }}</td>
                                    <td>{{ $v['url'] }}</td>
                                    {{--<td>{{ $v['data'] }}</td>--}}
                                    <td>{{ $v['ip'] }}</td>
                                    <td>{{ $v['ua'] }}</td>
                                    <td>{{ $v['updated_at'] }}</td>
                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
                <div id="pages" style="margin-top: 30px;">
                    {{ $lists->links() }}
                </div>
            </div>
        </div>
    </div>

    @extends('admin.js')
    @section('js')
        <script>
        </script>
    @endsection
</div>
</body>
</html>
