<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Support\Facades\DB;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogRecords = Blog::paginate(5);   //orm分页函数
//        $blogRecord = DB::select('select * from article');   //facade
//        echo '<pre>';
//        var_dump($blogRecord);die;
//        $blogRecord = DB::table('article')->get();     //构造查询器
//        $blogRecord = DB::table('article')->paginate(15);     //构造查询器分页函数
//        dd($blogRecord);die;
        foreach ($blogRecords as $v){
            $v->created_at_format = $v->created_at->format('dS M');
        }
        return view('blog.archive', ['blogRecords' => $blogRecords]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*
     * extends function
     * ----start----
     * */
    public function blogRecord(){
//        $blogRecord = Blog::all();   //orm
        $blogRecord = Blog::paginate(5);   //orm分页函数
//        $blogRecord = DB::select('select * from article');   //facade
//        echo '<pre>';
//        var_dump($blogRecord);die;
//        $blogRecord = DB::table('article')->get();     //构造查询器
//        $blogRecord = DB::table('article')->paginate(15);     //构造查询器分页函数
//        dd($blogRecord);die;
        foreach ($blogRecord as $v){
            $v->created_at_format = $v->created_at->format('dS M');
        }
        return response()->json($blogRecord);
    }
    /*
     * extends function
     * ----end----
     * */
}
