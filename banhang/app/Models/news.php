<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    //dinh nghia lai khoa chinh
    protected $primaryKey = 'ma';
    //dinh nghia ten bang
    protected $table = 'tintuc';
    //tat luon 2 thong so ngay tao ngay cap nhat tu dong cua model
    public $timestamps = false;

    //tao them thuoc tinh theo y muon va du lieu tuy ý

}