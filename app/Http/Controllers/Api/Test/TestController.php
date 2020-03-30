<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/3/27
 * Time: 下午4:04
 */

namespace App\Http\Controllers\Api\Test;


use App\Http\Controllers\BaseController;
use App\Repositories\Test\TestRepository;
use Illuminate\Http\Request;

class TestController extends BaseController
{
    public function __construct(TestRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        return $this->repository->index($request);
    }

}