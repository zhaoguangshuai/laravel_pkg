<?php

namespace App\Jobs\Api\V1\Amway;

use App\Models\Amway\Amway;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class AddAmway implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $amway;

    public function __construct(Amway $amway, $delay)
    {
        $this->amway = $amway;
        $this->delay($delay);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //测试延迟任务，添加一个安利强
        Amway::query()->create([
            'game_id'   => 100,
            'user_id'   => 123,
            'type'      => 'pending',
            'content'   => $this->amway->id,
            'remark'    => 'cs延迟任务',
            'check_at'  => '2010-12-12 12:34:23',
        ]);
        Log::info('测试延迟任务');

    }
}
