<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //dinh nghia lai khoa chinh
    protected $primaryKey = 'ma';
    //dinh nghia ten bang
    protected $table = 'sanpham';
    //tat luon 2 thong so ngay tao ngay cap nhat tu dong cua model
    public $timestamps =false;
    public function category()
    {
        return $this->hasOne('App\Models\Category','ma','maloai');
    }
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier','ma','manhacungcap');
    }
    //tao them thuoc tinh theo y muon va du lieu tuy ý
    public function getCatNameAttribute()
    {
        return $this->category->ten??'KXĐ';
    }
    public function getSupNameAttribute()
    {
        return $this->supplier->ten??'KXĐ';
    }
}
