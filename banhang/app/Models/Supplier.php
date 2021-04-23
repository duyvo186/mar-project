<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
      //dinh nghia lai khoa chinh
      protected $primaryKey = 'ma';
      //dinh nghia ten bang
      protected $table = 'nhacungcap';
      //tat luon 2 thong so ngay tao ngay cap nhat tu dong cua model
      public $timestamps =false;
}
