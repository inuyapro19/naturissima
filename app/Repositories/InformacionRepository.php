<?php

namespace App\Repositories;

use App\Models\Informacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InformacionRepository
 * @package App\Repositories
 * @version January 29, 2018, 4:00 pm -03
 *
 * @method Informacion findWithoutFail($id, $columns = ['*'])
 * @method Informacion find($id, $columns = ['*'])
 * @method Informacion first($columns = ['*'])
*/
class InformacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_empresa',
        'email',
        'telefono1',
        'telefono2',
        'nombre_facebook',
        'url_facebook',
        'direccion',
        'mapa',
        'texto_footer',
        'quienes_somos',
        'imagen_quienes_somos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Informacion::class;
    }
}
