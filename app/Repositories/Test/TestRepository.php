<?php
namespace App\Repositories\Test;

use App\Facade\Test;
use App\Models\User\User;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class TestRepository extends BaseRepository
{
    public function index(Request $request)
    {
        Log::info(132412431232);
        dd(Test::index());
        return $this->success(app('TestT')->index());
        return $this->success(User::query()->find(5));
    }
}