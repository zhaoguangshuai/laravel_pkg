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

        //where型子查询
//        $data = AdminStoreAppoints::query()->whereIn('appoint_at', function ($query) {
//            $query->select('appoint_at')
//                ->from('admin_store_appoints')
//                ->where('admin_store_id', 6)
//                ->groupBy('appoint_at');
//        });
//
//        return $this->success($data);

        //from型子查询
        /*$subQuery = DB::table('auction_histories')
            ->select('auction_goods.play_id', 'auction_goods.id', DB::raw('max(auction_histories.user_price) as max_user_price'))
            ->join('auction_goods', 'auction_histories.auction_good_id', '=', 'auction_goods.id')
            ->groupBy('auction_goods.play_id', 'auction_goods.id');
            //->get();

        $subQueryOne = DB::table(DB::raw("({$subQuery->toSql()}) as sub_one"))
            ->select('play_id', DB::raw('sum( max_user_price ) AS sum_user_price '))
            ->groupBy('play_id');

        $query = DB::table(DB::raw("({$subQueryOne->toSql()}) as sub"))
            ->select('auction_plays.id', 'auction_plays.title', 'sub.sum_user_price')
            ->join('auction_plays', 'sub.play_id', '=', 'auction_plays.id');

        $query->mergeBindings($subQueryOne);

        $info = $query->get();

        return $this->success($info);*/



        //dd(Test::index());
        return $this->success(app('TestT')->index());
        //return $this->success(User::query()->find(5));
    }

    public function testContracts(Request $request, IsTest $isTest, IsTestContracts $isTestContracts)
    {
        //测试服务提供者绑定服务
        //$res = FacadeServices::index11();
        //$res = app('TestService')->index11();
        //return $this->success($res);

        //测试调用契约
        //return $this->success($isTest->index());
        return $this->success($isTestContracts->test());


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