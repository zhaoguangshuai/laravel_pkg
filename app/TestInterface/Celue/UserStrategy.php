<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/11
 * Time: 上午10:58
 */

namespace App\TestInterface\Celue;

/*
 * 声明策略文件的接口，约定策略包含的行为。
 */
interface UserStrategy
{
    function showAd();
    function showCategory();
}