<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Informacion
 * @package App\Models
 * @version January 29, 2018, 4:00 pm -03
 *
 * @property string nombre_empresa
 * @property string email
 * @property string telefono1
 * @property string telefono2
 * @property string nombre_facebook
 * @property string url_facebook
 * @property string direccion
 * @property string mapa
 * @property string texto_footer
 * @property string quienes_somos
 * @property string imagen_quienes_somos
 */
class Informacion extends Model
{
    use SoftDeletes;

    public $table = 'informacions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre_empresa' => 'string',
        'email' => 'string',
        'telefono1' => 'string',
        'telefono2' => 'string',
        'nombre_facebook' => 'string',
        'url_facebook' => 'string',
        'direccion' => 'string',
        'mapa' => 'string',
        'texto_footer' => 'string',
        'quienes_somos' => 'string',
        'imagen_quienes_somos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_empresa' => 'required',
        'email' => 'required',
        'telefono1' => 'required',
        'telefono2' => 'required',
        'nombre_facebook' => 'required',
        'direccion' => 'required',
        //'imagen_quienes_somos'=>'image:*'
    ];

    
}
