<?php

namespace App\Jobs\Api\V1\Amway;

use App\Models\Amway\Amway;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class AddAmwayLog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $amway;

    public function __construct(Amway $amway)
    {
        $this->amway = $amway;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('测试任务id'.$this->amway->id.'内容'.$this->amway->content);
    }
}
