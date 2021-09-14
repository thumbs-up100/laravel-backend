@include('admin.header')
<div class="page">

    <div class="col-md-10 col-lg-12">
        <div class="panel">
            <div class="panel-header">
                @include('admin.breadcrumb')
            </div>

            <div class="panel-body">
                <form
                    enctype="multipart/form-data"
                    action=""
                    method="post" id="form">
                    <input type="hidden" name="id" value="{{ $info['id'] ?? '' }}"/>
                    <input type="hidden" name="app_id" value="{{ $info['app_id'] ?? request()->app_id }}"/>
                    @if(isset($info['id'])) {{ method_field('PUT') }} @else {{ method_field('POST') }} @endif
                   @csrf
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="standardInput">上传应用</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group form-group">
                                <div class="tower-file">
                                    <input class="tower-file-input" name="file" id="image" type="file">
                                    <label class="btn btn-success" for="image">@if($info) {{ $info['filename'] }} @else Select File @endif</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="version-input">版本号</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group form-group required">
                                <input class="form-control" type="text" maxlength="64" name="version"
                                       aria-describedby="icon-addon1" id="version-input" data-spinner
                                       value="{{ $info['version'] ?? ''  }}">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-1 text-sm-right">
                            <label class="col-form-label" for="input-note">版本说明</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group form-group required">
                                <textarea name="note" id="input-note" rows="3" class="form-control">{{ $info['note'] ?? ''  }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row row-10 align-items-center">
                        <div class="col-sm-12 text-sm-center">
                            <button class="btn btn-primary" type="submit" lay-submit lay-filter="formAdminUser"
                                    id="formAjaxSubmit">保存
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.js')
    <script type="text/javascript">
        let changeCategoryLanguages = (_elem) => {
            $('.category-language-group').hide();
            let languages = $(_elem).val();
            $.each(languages, function (i, item) {
                $('#categoryLanguage-' + item).show();
            })
        };
    </script>
</div>
</body>
</html>
