<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/11
 * Time: 上午9:44
 */

namespace App\Services\Test;


use Illuminate\Support\Facades\Log;

class FacadeServices
{
    public function index11()
    {
        Log::info('test', [
            'sex' => 'nan',
            'age' => 23,
        ]);
        return 123456;
    }
}