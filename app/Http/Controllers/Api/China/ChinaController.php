<?php

namespace App\Http\Controllers\Api\China;

use App\Http\Controllers\BaseController;
use App\Repositories\China\ChinaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChinaController extends BaseController
{
    public $repository;

    public function __construct(ChinaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function ssqInfo()
    {
        return $this->repository->ssqInfo();
    }

    public function newChinaInfo()
    {
        return $this->repository->newChinaInfo();
    }
}
