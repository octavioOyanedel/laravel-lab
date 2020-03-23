<?php

namespace App\Listeners;

use App\Events\UsuarioCreado;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UsuarioCreadoListener
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
     * @param  UsuarioCreado  $event
     * @return void
     */
    public function handle(UsuarioCreado $event)
    {
        dd($event->usuario);
    }
}
