<?php

namespace App\Listeners\APi\V1\Amway;

use App\Events\Api\V1\Amway\AmwayCreate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class AddListenerLog implements ShouldQueue
{

    public function handle(AmwayCreate $event)
    {
        $amway = $event->getAmway();
        Log::info('安利强ID'.$amway->id.'安利强内容'.$amway->content);
    }
}
