<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'article';
    //�Ƿ��Լ�����create_at��update_at�ֶ�
//    protected $timestamps = true;
    //����\���������µ��ֶ�
//    protected $fillable = ['title'];
//    protected $guarded = ['title'];
    //�ض���ʱ�����ʽ
//    protected function getDateFormat()
//    {
//    }
}
