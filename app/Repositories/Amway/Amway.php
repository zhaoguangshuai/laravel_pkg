<?php
namespace App\Repositories\Amway;

use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class Amway extends BaseRepository
{
    public function index(Request $request)
    {
        $info = $request->user()->amway()->get();
        return $this->success($info);
    }
}