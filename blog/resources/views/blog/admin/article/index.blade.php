@extends('layouts.adminCommon')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">管理文章</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">管理文章</div>

                    <div class="panel-body">
                        <a href="{{ URL('article/create') }}" class="btn btn-lg btn-primary">新增</a>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr class="row">
                                <th class="col-lg-4">内容</th>
                                <th class="col-lg-2">标题</th>
                                <th class="col-lg-4">查看</th>
                                <th class="col-lg-1">编辑</th>
                                <th class="col-lg-1">删除</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($articles as $article)
                                <tr class="row">
                                    <td class="col-lg-6">
                                        {{ $article->description }}
                                    </td>
                                    <td class="col-lg-2">
                                        {{ $article->title }}
                                    </td>
                                    <td class="col-lg-4">
                                        <a href="{{ URL('article/show/'.$article->id) }}">
                                            {{ App\Article::find($article->id)->title }}
                                        </a>
                                    </td>
                                    <td class="col-lg-1">
                                        <a href="{{ URL('article/'.$article->id.'/edit') }}" class="btn btn-success">编辑</a>
                                    </td>
                                    <td class="col-lg-1">
                                        <form action="{{ URL('article/'.$article->id) }}" method="POST" style="display: inline;">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection