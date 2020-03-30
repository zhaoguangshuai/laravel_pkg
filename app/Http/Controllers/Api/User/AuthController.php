<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\BaseController;
use App\Repositories\User\AuthRepository;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function passLogin(Request $request)
    {
        return $this->repository->passLogin($request);
    }

}
