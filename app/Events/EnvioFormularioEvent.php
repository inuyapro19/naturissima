<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EnvioFormularioEvent
{
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;
    public $mensaje;

    public function __construct($nombre , $apellido,$telefono,$email,$mensaje)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->telefono=$telefono;
        $this->email=$email;
        $this->mensaje=$mensaje;
    }

}
