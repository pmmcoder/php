@extends('layouts.adminCommon')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">显示文章</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">显示文章</div>

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


                        <input name="_method" type="hidden" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        文章标题：{{ $article->title }}
                        <br>

                        <br>

                        <br>
                        文章内容：
                            <div id="show-markdown">
                                <textarea class="description-markdown" name="description" style="display:none;">{{ $article->description }}</textarea>
                            </div>
                        <br>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/markdown.editor/lib/marked.min.js"></script>
    <script src="/js/markdown.editor/lib/prettify.min.js"></script>
    <script src="/js/markdown.editor/lib/underscore.min.js"></script>
    <script src="/js/markdown.editor/lib/flowchart.min.js"></script>
    <script src="/js/markdown.editor/lib/jquery.flowchart.min.js"></script>
    <script src="/js/markdown.editor/lib/raphael.min.js"></script>
    <script src="/js/markdown.editor/lib/sequence-diagram.min.js"></script>
    <script src="/js/markdown.editor/editormd.min.js"></script>
    <script>
        $(function() {
            tex: true, // 默认false
                testEditorView = editormd.markdownToHTML('show-markdown', {
//            markdown: markdown,
                // htmlDecode: true // 开启html标签解析,为了安全性,默认不开启
                    path : "/js/markdown.editor/lib/",
                    htmlDecode: "style,script,iframe",
                taskList: true,
                flowChart: true, // 默认false
                sequenceDiagram: true, // 默认false
            })
        })
    </script>
@endsection