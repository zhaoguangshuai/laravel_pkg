<?php

namespace App\Events\Api\V1\Amway;

use App\Models\Amway\Amway;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class AmwayCreate
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $amway;

    public function __construct(Amway $amway)
    {
        $this->amway = $amway;
    }

    public function getAmway()
    {
        return $this->amway;
    }
}
