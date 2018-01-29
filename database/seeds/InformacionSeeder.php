<?php

use Illuminate\Database\Seeder;
use App\Models\Informacion;

class InformacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inf= new App\Models\Informacion;

        $inf->nombre_empresa='Naturissima <br> Come bien, vive mejor';
        $inf->email='contacto@naturissima.cl'; 
        $inf->direccion='Los Maitenes 608-B, La Serena';
        $inf->telefono1='7797 3030';
        $inf->telefono2='9450 7267';
        $inf->nombre_facebook='Naturissima - Come bien, vive mejor';
        $inf->url_facebook='url del facebook';
       
        $inf->mapa='aqui va el ubicación';
        $inf->texto_footer='texto en el pie de pagina';
        $inf->quienes_somos='texto quienes somos';
        $inf->imagen_quienes_somos='imagen.jpg';   

        $inf->save();
    }
}
