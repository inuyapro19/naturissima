<?php

namespace App\Listeners;

use App\Events\EnvioFormularioEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarForm
{
    public function handle(EnvioFormularioEvent $event)
    {
        Mail::to('chico.otaku22@gmail.com')->queue(
            new SendMail($event->nombre , $event->apellido,$event->telefono,$event->email,$event->mensaje)
        );
    }
}
