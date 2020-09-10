<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/3/27
 * Time: 下午4:04
 */

namespace App\Http\Controllers\Api\Test;


use App\Contracts\MyTest\IsTest;
use App\Contracts\MyTest\IsTestContracts;
use App\Http\Controllers\BaseController;
use App\Repositories\Test\TestRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TestController extends BaseController
{
    public function __construct(TestRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        //网页转pdf//
//        $pdf = App::make('snappy.pdf.wrapper');
//        return $pdf
//            //->loadHtml('<h1>你好123</h1>')
//            ->loadFile('http://yjww.laravzgsel.com/')
//            //->loadView('welcome')
//            ->setPaper('a4')
//            ->setOrientation('landscape')
//            ->setOption('margin-bottom', 0)
//            ->setOption('enable-forms', true)
//            //->setOption('grayscale', true)
//            //->setOption('debug-javascript', true)
//            //->setOption('page-offset', 8)
//            ->setOption('encoding', 'utf-8')
//            //->setOption('header-font-name', 'msyh')
//            //->setOption('enable-external-links', true)
//            ->inline();  // $data 为传递的参数
//        //return $pdf->inline(); // 显示
        return $this->repository->index($request);
    }

    public function testContracts(Request $request, IsTest $isTest, IsTestContracts $isTestContracts)
    {
        return $this->repository->testContracts($request, $isTest, $isTestContracts);
    }

}