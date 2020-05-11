<?php
namespace App\Repositories\Test;

use App\Contracts\MyTest\IsTest;
use App\Contracts\MyTest\IsTestContracts;
use App\Facade\FacadeServices;
use App\Facade\Test;
use App\Models\User\User;
use App\Repositories\BaseRepository;
use App\Services\Celue\Page\Page;
use App\Services\Celue\TypeCelue\FemaleUser;
use App\Services\Celue\TypeCelue\MaleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestRepository extends BaseRepository
{
    protected $page;
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function index(Request $request)
    {
        dd(Test::index());
        return $this->success(app('TestT')->index());
        return $this->success(User::query()->find(5));
    }

    public function testContracts(Request $request, IsTest $isTest, IsTestContracts $isTestContracts)
    {
//        $res = FacadeServices::index11();
//        return $this->success($res);
//        return $this->success($isTest->index());
        //return $this->success($isTestContracts->test());
        //运用到了设计模式的策略模式
        $page_type = $request->input('page_type');
        if ($page_type == 1) {
            $strategy = new MaleUser();
        } else {
            $strategy = new FemaleUser();
        }
        $this->page->setStrategy($strategy);
        $res = $this->page->index();
        return $this->success($res);
    }
}