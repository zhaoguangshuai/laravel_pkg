<?php

namespace App\Http\Controllers\Api\Amway;

use App\Http\Controllers\BaseController;
use App\Repositories\Amway\Amway;
use Illuminate\Http\Request;

class AmwayController extends BaseController
{
    public function __construct(Amway $amway)
    {
        $this->repository = $amway;
    }

    public function index(Request $request)
    {
        return $this->repository->index($request);
    }
}
