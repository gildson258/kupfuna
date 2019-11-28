<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserEventSubscriber
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected $subscriber = [
        'App\Listeners\UserEventSubscriber',
    ];


    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
    }

    public function subscribe($event)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
        'App\Listeners\UserEventSubscriber@onUserLogin'
        );
    }

    public function onUserLogin($event)
    {

        $tokenAccess = bcrypt(date('YmdHms'));
        $user->token_access = $token_access;
        $user->save();
    }
}
