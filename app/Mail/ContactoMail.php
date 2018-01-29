<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $apellido;
    public $telefono;
    public $email;
    public $mensaje;

    public function __construct($nombre,$apellido,$telefono,$email,$mensaje)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->telefono=$telefono;
        $this->email=$email;
        $this->mensaje=$mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->markdown('mail.contacto_form',compact($this->nombre,$this->telefono,$this->apellido,$this->email,$this->mensaje))->from('pedroaraya@fizz.cl','Contacto')->subject('Formulario de Contacto Naturissima');
    }
}
