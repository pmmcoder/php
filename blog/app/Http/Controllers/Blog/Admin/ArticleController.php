<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * 添加文章
     */
    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->input('title');
        $article->introduce = $request->input('introduce');
        $article->description = base64_encode(htmlspecialchars($request->input('description1')));
        if ($article->save()) {
            return redirect('article');
        } else {
            return back()->withInput()->withErrors('保存失败');
        }
    }


    /**
     * 更新文章
     */
    public function update(Request $request,$id)
    {
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->introduce = $request->input('introduce');
        $article->description = base64_encode($request->input('description'));

        if ($article->save()) {
            return redirect('article');
        } else {
            return back()->withInput()->withErrors('保存失败');
        }
    }

    /**
    文章添加展示页
     **/
    public function create()
    {
        return view('blog/admin/article.create');
    }

    //文章更新展示页
    public function edit($id)
    {
        $article=Article::find($id);
        $article->description = base64_decode($article->description);
        return view('blog/admin/article.edit',compact('article'));
    }

    //文章删除
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('article');
    }

    //文章列表
    public function index()
    {
        $articles = Article::all();
        foreach ($articles as $k=>$v){
            $articles[$k]->description = base64_decode($v->description);
        }
        return view('blog/admin/article.index',compact('articles'));
    }

    //文章显示
    public function show($id)
    {
        $article=Article::find($id);
        $article->description = base64_decode($article->description);
        return view('blog/admin/article.show',compact('article'));
    }
    public function fileUpload(Request $request){
        $message='';
        if (!Storage::disk('local')->exists('/article')) {
            $message = "article 文件夹不存在,请先创建";
        }else{
            $pathDir=date('Ymd');
            if(!Storage::disk('local')->exists('/article/'.$pathDir)){
                Storage::disk('local')->makeDirectory('/article/'.$pathDir);
            }
        }

        if($request->file('editormd-image-file')){
            $path="uploads/article/".$pathDir;
            $pic = $request->file('editormd-image-file');
            if($pic->isValid()){
                $newName=md5(time() . rand(0, 10000)).".".$pic->getClientOriginalExtension();
                if(Storage::disk('local')->exists($path.'/'.$newName)){
                    $message = "文件名已存在或文件已存在";
                }else{
                    if($pic->move($path,$newName)){
                        $url = asset($path.'/'.$newName);
                    }else{
                        $message="系统异常，文件保存失败";
                    }
                }
            }else{
                $message = "文件无效";
            }
        }else{
            $message="Not File";
        }

        $data = array(
            'success' => empty($message) ? 1 : 0,  //1：上传成功  0：上传失败
            'message' => $message,
            'url' => !empty($url) ? $url : ''
        );

        header('Content-Type:application/json;charset=utf8');
        exit(json_encode($data));
    }
}
