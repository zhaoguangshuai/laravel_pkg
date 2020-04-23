<?php

namespace App\Providers;

use App\Events\Api\V1\Amway\AmwayCreate;
use App\Listeners\APi\V1\Amway\AddListenerLog;
use App\Listeners\Api\V1\Amway\DeleteAmway;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        AmwayCreate::class => [
            DeleteAmway::class,
            AddListenerLog::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
