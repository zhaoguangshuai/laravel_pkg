<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/11
 * Time: 上午10:37
 */

namespace App\Services\Celue\Page;


use App\TestInterface\Celue\UserStrategy;

class Page
{
    protected $strategy;

    public function index()
    {
        echo "AD";
        $this->strategy->showAd();
        echo "<br>";
        echo "Category";
        $this->strategy->showCategory();
        echo "<br>";
        return 1234;
    }

    public function setStrategy(UserStrategy $userStrategy)
    {
        $this->strategy = $userStrategy;
    }
}