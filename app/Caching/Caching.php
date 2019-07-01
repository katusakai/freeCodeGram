<?php


namespace App\Caching;


use Illuminate\Support\Facades\Cache;

class Caching
{
    public static function remember($param, $key, $returnValue, $time = 30)
    {
        return Cache::remember($key,
            $time,
            function () use ($param, $returnValue) {
                return $returnValue;
            }
        );
    }
}