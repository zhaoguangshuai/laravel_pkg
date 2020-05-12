<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/11
 * Time: 下午6:44
 */

namespace App\Services\Test;


use App\Contracts\MyTest\IsTestContracts;
use Illuminate\Support\Facades\Log;

class TwoContractsServices implements IsTestContracts
{
    public function test()
    {
        // TODO: Implement test() method.
        Log::info('this is contracts', [
            'hehe' => 'haaaaaaaaaaa',
            'age'  => 666666666,
        ]);
        return 666666666;
    }
}