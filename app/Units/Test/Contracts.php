<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/9
 * Time: 下午4:31
 */

namespace App\Units\Test;


use App\Contracts\MyTest\IsTest;

class Contracts implements IsTest
{
    public function index()
    {
        // TODO: Implement index() method.
        return 'this is contracts';
    }
}