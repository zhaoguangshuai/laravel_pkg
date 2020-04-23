<?php

namespace App\Http\Controllers\Api\Amway;

use App\Http\Controllers\BaseController;
use App\Models\Amway\Amway;
use App\Repositories\Amway\AmwayRepository;
use Illuminate\Http\Request;

class AmwayController extends BaseController
{
    public function __construct(AmwayRepository $amway)
    {
        $this->repository = $amway;
    }

    public function index(Request $request)
    {
        return $this->repository->index($request);
    }

    public function addAmway(Request $request)
    {
        return $this->repository->addAmway($request);
    }

    public function updateAmway(Amway $amway)
    {
        return $this->repository->updateAmway($amway);
    }
}
