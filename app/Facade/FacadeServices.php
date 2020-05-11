<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/11
 * Time: 上午9:49
 */

namespace App\Facade;


use Illuminate\Support\Facades\Facade;

class FacadeServices extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'TestService';
    }
}