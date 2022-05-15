<?php

namespace App\Listeners;

use App\Events\Consecionar;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AvisarContador
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
     * @param  \App\Events\Consecionar  $event
     * @return void
     */
    public function handle(Consecionar $event)
    {
        //
    }
}
