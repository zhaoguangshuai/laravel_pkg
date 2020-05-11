<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/11
 * Time: 上午10:44
 */

namespace App\Services\Celue\TypeCelue;


use App\TestInterface\Celue\UserStrategy;

class MaleUser implements UserStrategy
{
    public function showAd(){
        echo "IPhone6s";
    }
    public function showCategory(){
        echo "电子产品";
    }
}