<?php

namespace App\Observers\Admin;

use Illuminate\Support\Facades\Log;

class AmwayObserver
{
    public function creating()
    {
        $type = request()->input('type');
        Log::info('监听创建该模型操作'.$type);
    }

    public function updating()
    {
        $type = request()->input('type');
        Log::info('监听更新该模型操作'.$type);
    }

    public function deleting()
    {
        $type = request()->input('type');
        Log::info('监听删除该模型操作'.$type);
    }
}
