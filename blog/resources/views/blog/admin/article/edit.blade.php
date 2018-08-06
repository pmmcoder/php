@extends('layouts.adminCommon')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">编辑文章</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑文章</div>

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

                        <form action="{{ URL('article/'.$article->id) }}" enctype="multipart/form-data" method="POST">
                            <input name="_method" type="hidden" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            文章标题：<input type="text" name="title" class="form-control" required="required" value="{{ $article->title }}">
                            <br>

                            <br>

                            <br>
                            文章内容：<textarea name="description" rows="10" class="form-control" required="required">{{ $article->description }}</textarea>
                            <br>
                            <button class="btn btn-lg btn-info">编辑文章</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection