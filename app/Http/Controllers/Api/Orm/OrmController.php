<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/9/18
 * Time: 2:01 PM
 */

namespace App\Http\Controllers\Api\Orm;


use App\Http\Controllers\BaseController;
use App\Repositories\Orm\OrmRepository;

class OrmController extends BaseController
{
    public $repository;

    public function __construct(OrmRepository $ormRepository)
    {
        $this->repository = $ormRepository;
    }

    public function testOne()
    {
        return $this->repository->testOne();
    }

}