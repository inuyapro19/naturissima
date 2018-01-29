<?php

use Illuminate\Database\Seeder;
use App\Models\Slider;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$slider=new App\Models\Slider;
        $slider->titulo="titulo de prueba";
        $slider->subtitulo="subtitulo de prueba";
        $slider->imagen="imagen.jpg";
        $slider->save();

      
        $slider->titulo="titulo de prueba2";
        $slider->subtitulo="subtitulo de prueba2";
        $slider->imagen="imagen2.jpg";
        $slider->save();


        $slider->titulo="titulo de prueba3";
        $slider->subtitulo="subtitulo de prueba3";
        $slider->imagen="imagen3.jpg";
        $slider->save();

    }
}
