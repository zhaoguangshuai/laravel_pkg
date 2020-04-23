<?php

namespace App\Listeners\Api\V1\Amway;

use App\Events\Api\V1\Amway\AmwayCreate;
use App\Models\Amway\Amway;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class DeleteAmway implements ShouldQueue
{

    public function handle(AmwayCreate $event)
    {
        $amway = $event->getAmway();
        $res = Amway::query()->where('id', $amway->id - 1)->delete();
        \Log::info('删除成功'.$res);
        Log::info('添加实诚');
    }
}
