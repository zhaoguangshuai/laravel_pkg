<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/11
 * Time: 上午10:08
 */

namespace App\Services\Test;


use App\Contracts\MyTest\IsTestContracts;
use Illuminate\Support\Facades\Log;

class ContractsServices implements IsTestContracts
{
    public function test()
    {
        // TODO: Implement test() method.
        Log::info('this is contracts', [
            'hehe' => 'haha',
            'age'  => 23,
        ]);
        return 123445;
    }
}