<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/9/18
 * Time: 2:00 PM
 */

namespace App\Repositories\Orm;


use App\Models\GYP\AuctionGoods;
use App\Models\GYP\AuctionPlays;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Builder;

class OrmRepository extends BaseRepository
{
    public function testOne()
    {
//        $query->leftJoin([
//
//            'hxqc_benchmark_positions'=>'pos'
//        ], '__TABLE__.jobcode = pos.jobcode')
//            ->leftJoin([
//                'hxqc_benchmark_dep'=>'dep'
//            ], 'pos.dept_id = dep.id')
//            ->field([
//                '__TABLE__.*',
//                'pos.jobname',
//                'dep.deptname'
//            ])
//            ->whereIn('pos.dr', [0,2])
//            ->where('dep.dr', 0)
//            ->where('dep.canceled', 'N');
////        halt($query->fetchSql()->select());die;
//        !empty($data['deptname']) && $query->whereLike('dep.deptname', "%{$data['deptname']}%");
//        !empty($data['jobname']) && $query->whereLike('pos.jobname', "%{$data['jobname']}%");

        //$data = ['title1' => 5, 'title2' => 1];

//        $builder = AuctionPlays::query()
//            ->with([
//            'auctionGoods' => function ($query1) use ($data) {
//                $builder_one = $query1->select('title', 'sort', 'play_id', 'id', 'art_org_id')
//                    ->whereIn('art_org_id', [1, 5])
//                    ->with([
//                        'auctionHistories' => function ($query2) use ($data) {
//                            $builder_two = $query2->select('user_name', 'user_img', 'auction_good_id')
//                                ->where('auction_good_id', 1);
//
//                            !empty($data['title2']) && $builder_two->where('auction_good_id', 'like', '%'.$data['title2'].'%');
//                        }
//                    ]);
//
//                !empty($data['title1']) && $builder_one->where('art_org_id', 'like', '%'.$data['title1'].'%');
//
//            }
//        ]);

//        $data = ['title1' => 5, 'title2' => 2];
//        $builder = AuctionPlays::query()
//            ->with([
//                'auctionGoods' => function ($query1) {
//                    $query1->select('title', 'sort', 'play_id', 'id', 'art_org_id')
//                        ->whereIn('art_org_id', [1, 5])
//                        ->with([
//                            'auctionHistories' => function ($query2) {
//                                $query2->select('user_name', 'user_img', 'auction_good_id')
//                                    ->where('auction_good_id', 1);
//
//                                //!empty($data['title2']) && $builder_two->where('auction_good_id', 'like', '%'.$data['title2'].'%');
//                            }
//                        ]);
//
//                    //!empty($data['title1']) && $builder_one->where('art_org_id', 'like', '%'.$data['title1'].'%');
//
//                }
//            ]);
//
//        $builder->whereHas('auctionGoods', function ($query1) use ($data) {
//            if (!empty($data['title1'])) {
//                $query1->where('art_org_id', 'like', '%'.$data['title1'].'%');
//            }
//
//            $query1->whereHas('auctionHistories', function ($query2) use ($data) {
//                if (!empty($data['title2'])) {
//                    $query2->where('auction_good_id', 'like', '%'.$data['title2'].'%');
//                }
//            });
//
//        });
//
//
//        $data = $builder->limit(10)->get();
//
//        return $this->success($data);


        AuctionPlays::query()->chunk(200, function ($query) {
           foreach ($query as $value) {
               var_dump($value->id);
           }
        });

//        $res = AuctionPlays::query()
//            ->addSelect(['last_goods_id' =>
//            AuctionGoods::query()
//                ->select('id')
//                ->whereColumn('play_id', 'auction_plays.id')
//                ->orderBy('id', 'desc')->first()->toArray()
//            ])
//            ->limit(10)
//            ->get();
//
//        return $this->success($res);
    }


}