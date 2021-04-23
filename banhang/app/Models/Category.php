<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
      //dinh nghia lai khoa chinh
      protected $primaryKey = 'ma';
      //dinh nghia ten bang
      protected $table = 'loaisanpham';
      //tat luon 2 thong so ngay tao ngay cap nhat tu dong cua model
      public $timestamps =false;
      public static function options()
      {
          return self::where('trangthai',1)->select(['ma','ten'])->get();
      }
}
