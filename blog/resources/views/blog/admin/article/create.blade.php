@extends('layouts.adminCommon')

@section('content')
    {{--<link href="/css/blog/admin/article/app.css" rel="stylesheet">--}}
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


                            文章内容： <textarea name="description" rows="10" class="form-control"></textarea>
                            <br>
                            <button class="btn btn-lg btn-info">新增文章</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection