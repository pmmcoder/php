<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'article';
    //是否自己管理create_at，update_at字段
//    protected $timestamps = true;
    //不可\可批量更新的字段
//    protected $fillable = ['title'];
//    protected $guarded = ['title'];
    //重定义时间戳格式
//    protected function getDateFormat()
//    {
//    }
}
