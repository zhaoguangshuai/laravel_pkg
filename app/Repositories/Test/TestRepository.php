<?php
namespace App\Repositories\Test;

use App\Contracts\MyTest\IsTest;
use App\Contracts\MyTest\IsTestContracts;
use App\Facade\FacadeServices;
use App\Facade\Test;
use App\Models\Amway\AdminStoreAppoints;
use App\Models\Amway\Pictures;
use App\Models\User\User;
use App\Repositories\BaseRepository;
use App\Services\Celue\Page\Page;
use App\Services\Celue\TypeCelue\FemaleUser;
use App\Services\Celue\TypeCelue\MaleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
//        $data = Pictures::query()->select(DB::raw('max(id) as id'))
//            ->groupBy('pic_group')->get();
//        return $this->success($data);
//        $data = Pictures::query()->whereIn('id', function($query){
//            $query->select(DB::raw('max(id) as id'))
//                ->from('pictures')
//                ->groupBy('pic_group');
//        })->get();
//        $data->each(function (Pictures $pictures) {
//           $pictures->num = Pictures::query()->where('pic_group', $pictures->pic_group)->count();
//        });

        $data = AdminStoreAppoints::query()->whereIn('appoint_at', function ($query) {
            $query->select('appoint_at')
                ->from('admin_store_appoints')
                ->where('admin_store_id', 6)
                ->groupBy('appoint_at');
        });

        return $this->success($data);

        //dd(Test::index());
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