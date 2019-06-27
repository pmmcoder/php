@extends('layouts.adminCommon')

@section('content')
    {{--<link href="/css/blog/admin/article/app.css" rel="stylesheet">--}}
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="/js/markdown.editor/css/editormd.min.css" />
    <style>
        .editormd-fullscreen{
            z-index: 1000;
        }
    </style>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">新增文章</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">新增文章</div>

                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ URL('article') }}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            文章标题：<input type="text" name="title" class="form-control" required="required">
                            <br>

                            <br>

                            文章简介：
                            <textarea class="description-simple form-control" name="introduce" rows="4"></textarea>
                            <br>

                            <br>
                            文章内容：
                            <div class="custom-editor" style="height: 500px;">
                                <div id="editor">
                                    <textarea class="description-markdown" name="description" style="display:none;">### Hello Editor.md !</textarea>
                                    <textarea class="description-markdown1" name="description1" style="display:none;"></textarea>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-lg btn-info">新增文章</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <script src="/js/markdown.editor/editormd.min.js"></script>
        <script type="text/javascript">
            $(function() {
                var editor = editormd("editor", {
//                     width: "100%",
                    // height: "100%",
                    // markdown: "xxxx",     // dynamic set Markdown text
                    saveHTMLToTextarea: true,
//                    emoji :true,
                    path : "/js/markdown.editor/lib/",  // Autoload modules mode, codemirror, marked... dependents libs path
                    /**上传图片处理*/
                    imageUpload : true,
                    imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                    imageUploadURL : "{{ URL('article/fileUpload') }}",
                    /**设置主题颜色*/
                    editorTheme: "pastel-on-dark",
                    theme: "dark",
                    previewTheme: "dark",
                    onchange: function () {
                        tranferToHtml();
                    },
                    onload:function () {
                        tranferToHtml();
                    }
                });
                function tranferToHtml() {
                    var content = editor.getMarkdown();
                    $(".description-markdown1").val(HTMLDeCode(content));
                }
                function HTMLDeCode(str){
                    var s = "";
                    if (str.length == 0)  return  "";
                    s = str.replace(/\&amp\;/g, "&");
                    s = s.replace(/\&lt\;/g,  " <");
                    s = s.replace(/\&gt\;/g, ">");
                    s = s.replace(/\&nbsp\;/g, " ");
                    s = s.replace(/\'/g, "\'");
                    s = s.replace(/\&quot\;/g, "\"");
                    s = s.replace(/<br>/g, "\n");
                    return s;
                }
            });
        </script>
    </div>
@endsection