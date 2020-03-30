<?php
namespace App\Repositories\Test;

use App\Models\User\User;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class TestRepository extends BaseRepository
{
    public function index(Request $request)
    {
        return $this->success(User::query()->find(5));
    }
}