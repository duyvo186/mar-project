<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
use Closure;

class myModel /* extends Model  */
{

    static  $i  =   0;


    public static function getSql($builder)
    {
        if ($builder != null) {

            $sql        =    $builder->toSql();

            foreach ($builder->getBindings() as $binding) {
                $value      =    is_numeric($binding) ? $binding : '"' . $binding . '"';

                $sql        =    preg_replace('/\?/', $value, $sql, 1);
            }

            return $sql;
        }
    }


    public static function getSql2($builder)
    {
        DB::enableQueryLog();

        // consolelog('myModel 35');

        ++self::$i;

        // consolelog_json2('39 - ' .self::$i  ,   DB::getQueryLog());
    }
}