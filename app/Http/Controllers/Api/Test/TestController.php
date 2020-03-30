<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/3/27
 * Time: 下午4:04
 */

namespace App\Http\Controllers\Api\Test;


use App\Http\Controllers\BaseController;
use App\Models\User\User;
use Illuminate\Support\Facades\Request;

class TestController extends BaseController
{
    public function index(Request $request)
    {
        dd(User::query()->find(5));
    }

}