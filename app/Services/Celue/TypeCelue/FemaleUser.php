<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/11
 * Time: 上午10:42
 */

namespace App\Services\Celue\TypeCelue;


use App\TestInterface\Celue\UserStrategy;

class FemaleUser implements UserStrategy
{
    public function showAd(){
        echo "2016冬季女装";
    }
    public function showCategory(){
        echo "女装";
    }
}