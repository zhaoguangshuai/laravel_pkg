<?php
namespace App\Repositories\Amway;

use App\Events\Api\V1\Amway\AmwayCreate;
use App\Jobs\Api\V1\Amway\AddAmway;
use App\Jobs\Api\V1\Amway\AddAmwayLog;
use App\Listeners\APi\V1\Amway\AddListenerLog;
use App\Models\Amway\Amway;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class AmwayRepository extends BaseRepository
{
    public function index(Request $request)
    {
        $info = $request->user()->amway()->get();
        return $this->success($info);
    }

    public function addAmway(Request $request)
    {
        $content = $request->input('content');
        $remark = $request->input('remark');
        $check_at = $request->input('check_at');
        $res = Amway::query()->create([
            'game_id'   => 64,
            'user_id'   => 123,
            'type'      => 'pending',
            'content'   => $content,
            'remark'    => $remark,
            'check_at'  => $check_at,
        ]);

        //事件监听
        event(new AmwayCreate($res));

        return $this->success('添加成功');
    }

    public function updateAmway(Amway $amway)
    {
//        $amway->update([
//            'type'   => 'passed',
//            'content'  => 'csxg',
//        ]);

        $amway->type = 'failed';
        $amway->content = 'new_csxg';
        $amway->save();

        //添加一个延迟任务
        dispatch(new AddAmway($amway, 60));
        //添加一个任务
        dispatch((new AddAmwayLog($amway)));


        return $this->success('修改成功');
    }
}