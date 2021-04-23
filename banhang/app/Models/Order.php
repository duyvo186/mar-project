<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //dinh nghia lai khoa chinh
    protected $primaryKey = 'ma';
    //dinh nghia ten bang
    protected $table = 'donhang';
    //tat luon 2 thong so ngay tao ngay cap nhat tu dong cua model
    public $timestamps =false;
    public function details()
    {
        return $this->hasMany('App\Models\OrderDetails','madonhang','ma');
    }
}
