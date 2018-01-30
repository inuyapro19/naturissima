<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Repositories\SliderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Image;


class SliderController extends AppBaseController
{
    /** @var  SliderRepository */
    private $sliderRepository;

    public function __construct(SliderRepository $sliderRepo)
    {
        $this->sliderRepository = $sliderRepo;
    }

    /**
     * Display a listing of the Slider.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sliderRepository->pushCriteria(new RequestCriteria($request));
        $sliders = $this->sliderRepository->orderBy('position','asc')->get();

        return view('sliders.index')
            ->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new Slider.
     *
     * @return Response
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created Slider in storage.
     *
     * @param CreateSliderRequest $request
     *
     * @return Response
     */
    public function store(CreateSliderRequest $request)
    {
         
         if($request->hasFile('imagen'))
         {
              //si la imagen no es vacia
             if (!file_exists('upload/maquinaria/')) {
                mkdir('upload/slider/', 777, true);
            }
             $imagen=Image::make($request->imagen->getRealPath())->resize(1500, null, function($x){
               $x->aspectRatio();
             })->save('upload/slider/'.$request->imagen->getClientOriginalName());
            //$reque

              $slider = $this->sliderRepository->create([
                'titulo' => $request->titulo,
                'subtitulo' => $request->subtitulo,
                'imagen' => $request->imagen->getClientOriginalName()
                ]);
             Flash::success('Slider Agregado Exitosamente'); 

            return redirect(route('sliders.index'));
         }
         else{
             $slider = $this->sliderRepository->create([
                'titulo' => $request->titulo,
                'subtitulo' => $request->subtitulo,
                //'imagen' => $request->imagen->getClientOriginalName()
                ]);
             Flash::success('Slider Agregado Exitosamente'); 

            return redirect(route('sliders.index'));
         }

       

        
    }

   
    public function show($id)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.show')->with('slider', $slider);
    }

    
    public function edit($id)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.edit')->with('slider', $slider);
    }

    /**
     * Update the specified Slider in storage.
     *
     * @param  int              $id
     * @param UpdateSliderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSliderRequest $request)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider)) {
            Flash::error('Slider no Encontrado');

            return redirect(route('sliders.index'));
        }


          if($request->hasFile('imagen'))
         {
              //si la imagen no es vacia
             if (!file_exists('upload/maquinaria/')) {
                mkdir('upload/slider/', 777, true);
            }
             $imagen=Image::make($request->imagen->getRealPath())->resize(1500, null, function($x){
               $x->aspectRatio();
             })->save('upload/slider/'.$request->imagen->getClientOriginalName());
            //$reque

              $slider = $this->sliderRepository->update([
                'titulo' => $request->titulo,
                'subtitulo' => $request->subtitulo,
                'imagen' => $request->imagen->getClientOriginalName()
                ],$id);
             Flash::success('Slider Agregado Exitosamente'); 

            return redirect(route('sliders.index'));
         }
         else{
             $slider = $this->sliderRepository->update([
                'titulo' => $request->titulo,
                'subtitulo' => $request->subtitulo,
                //'imagen' => $request->imagen->getClientOriginalName()
                ],$id);
             Flash::success('Slider Agregado Exitosamente'); 

            return redirect(route('sliders.index'));
         }
    }

    /**
     * Remove the specified Slider from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slider = $this->sliderRepository->findWithoutFail($id);

        if (empty($slider)) {
            Flash::error('Slider no Encontrado');

            return redirect(route('sliders.index'));
        }

        $this->sliderRepository->delete($id);

        Flash::success('Slider Eliminado Exitosamente');

        return redirect(route('sliders.index'));
    }
}
