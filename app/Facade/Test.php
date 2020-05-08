<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/8
 * Time: 下午6:58
 */

namespace App\Facade;


use Illuminate\Support\Facades\Facade;

class Test extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'TestT';
    }
}