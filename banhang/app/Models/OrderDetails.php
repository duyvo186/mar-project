<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    //dinh nghia lai khoa chinh
    protected $primaryKey = 'ma';
    //dinh nghia ten bang
    protected $table = 'chitietdonhang';
    //tat luon 2 thong so ngay tao ngay cap nhat tu dong cua model
    public $timestamps =false;
    public function order()
    {
        return $this->hasOne('App\Models\Order','ma','madonhang');
    }
    public function product()
    {
        return $this->hasOne('App\Models\Product','ma','masanpham');
    }
}
