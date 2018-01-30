<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInformacionRequest;
use App\Http\Requests\UpdateInformacionRequest;
use App\Repositories\InformacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Image;
class InformacionController extends AppBaseController
{
    /** @var  InformacionRepository */
    private $informacionRepository;

    public function __construct(InformacionRepository $informacionRepo)
    {
        $this->informacionRepository = $informacionRepo;
    }

    /**
     * Display a listing of the Informacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->informacionRepository->pushCriteria(new RequestCriteria($request));
        $informacions = $this->informacionRepository->all();

        return view('informacions.index')
            ->with('informacions', $informacions);
    }

    /**
     * Show the form for creating a new Informacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('informacions.create');
    }

    /**
     * Store a newly created Informacion in storage.
     *
     * @param CreateInformacionRequest $request
     *
     * @return Response
     */
    public function store(CreateInformacionRequest $request)
    {
        $input = $request->all();

        $informacion = $this->informacionRepository->create($input);

        Flash::success('Informacion saved successfully.');

        return redirect(route('informacions.index'));
    }

    /**
     * Display the specified Informacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $informacion = $this->informacionRepository->findWithoutFail($id);

        if (empty($informacion)) {
            Flash::error('Informacion not found');

            return redirect(route('informacions.index'));
        }

        return view('informacions.show')->with('informacion', $informacion);
    }

    /**
     * Show the form for editing the specified Informacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $informacion = $this->informacionRepository->findWithoutFail($id);

        if (empty($informacion)) {
            Flash::error('Informacion not found');

            return redirect(route('informacions.index'));
        }

        return view('informacions.edit')->with('informacion', $informacion);
    }

    /**
     * Update the specified Informacion in storage.
     *
     * @param  int              $id
     * @param UpdateInformacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInformacionRequest $request)
    {
        $informacion = $this->informacionRepository->findWithoutFail($id);

        if (empty($informacion)) {
            Flash::error('Información No Encontrada');

            return redirect(route('informacions.edit',$id));
        }

        if($request->hasFile('imagen_quienes_somos'))
        {
            if (!file_exists('upload/informacion/')) {
                mkdir('upload/informacion/', 777, true);
            }
             $imagen=Image::make($request->imagen_quienes_somos->getRealPath())->resize(1000, null, function($x){
               $x->aspectRatio();
             })->save('upload/informacion/'.$request->imagen_quienes_somos->getClientOriginalName());

            $informacion = $this->informacionRepository->update([
                'nombre_empresa'=>$request->nombre_empresa,
                'email'=>$request->email,
                'direccion'=>$request->direccion,
                'telefono1'=>$request->telefono1,
                'telefono2'=>$request->telefono2,
                'nombre_facebook'=>$request->nombre_facebook,
                'url_facebook'=>$request->url_facebook,                
                'mapa'=>$request->mapa,
                'texto_footer'=>$request->texto_footer,
                'quienes_somos'=>$request->quienes_somos,
                'imagen_quienes_somos'=>$request->imagen_quienes_somos->getClientOriginalName()
            ], $id);

            Flash::success('Información Editada exitosamente.');

            return redirect(route('informacions.edit',$id));
        }   
        else{
              $informacion = $this->informacionRepository->update([
                'nombre_empresa'=>$request->nombre_empresa,
                'email'=>$request->email,
                'direccion'=>$request->direccion,
                'telefono1'=>$request->telefono1,
                'telefono2'=>$request->telefono2,
                'nombre_facebook'=>$request->nombre_facebook,
                'url_facebook'=>$request->url_facebook,                
                'mapa'=>$request->mapa,
                'texto_footer'=>$request->texto_footer,
                'quienes_somos'=>$request->quienes_somos,
                //'imagen_quienes_somos'=>$request->imagen_quienes_somos->getClientOriginalName()
            ], $id);

            Flash::success('Información Editada exitosamente.');

            return redirect(route('informacions.edit',$id));
        } 

       
    }

    /**
     * Remove the specified Informacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $informacion = $this->informacionRepository->findWithoutFail($id);

        if (empty($informacion)) {
            Flash::error('Informacion not found');

            return redirect(route('informacions.index'));
        }

        $this->informacionRepository->delete($id);

        Flash::success('Informacion deleted successfully.');

        return redirect(route('informacions.index'));
    }
}
