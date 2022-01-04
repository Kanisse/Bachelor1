<?php

namespace App\Listeners;
use Illuminate\Auth\Events\Login as UserLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Login
{
    /**
     * Create the event listener.
     *
     * @return void
     */
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
    public function handle(UserLogin $event)
    {
        view ('home')->with('success',$event->user->name . " s'est connecté.");
        
    }
}
