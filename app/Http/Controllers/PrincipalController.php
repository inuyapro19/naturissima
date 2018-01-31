<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Events\EnvioFormularioEvent;
use Flash;
use App\Http\Requests\ContactoRequest;

class PrincipalController extends Controller
{
    public function index()
    {
        //consulta por los slider
        $slider=Slider::orderBy('position','asc')->limit(3)->get();
        //consulta por los productos

        //consulta por la informacion

       
    	return view('front.inicio',compact('slider'));
    }

    public function quienes_somos()
    {
      return view('front.quienes_somos');
    }

    public function producto_singles($slug)
    {
        return view('front.producto_singles');
    }

    public function contacto()
    {
        
        return view('front.contacto');

    }

    public function enviar_contacto(Request $request)
    {
    	$nombre=$request->nombre;
        $apellido=$request->apellido;
        $telefono=$request->telefono;
        $email=$request->email;
        //$persona=$request->persona;
        $mensaje=$request->mensaje;

        //envio de correo
        EnvioFormularioEvent::dispatch($nombre , $apellido,$telefono,$email,$mensaje);
        Flash::success('Formulario Enviado Correstamente');
        return redirect()->back();
    }
}
