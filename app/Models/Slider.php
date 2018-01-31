<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slider
 * @package App\Models
 * @version January 22, 2018, 4:59 pm -03
 *
 * @property string titulo
 * @property string subtitulo
 * @property string imagen
 */
class Slider extends Model
{
    use SoftDeletes;
    use \Rutorika\Sortable\SortableTrait;
    
    public $table = 'sliders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'subtitulo',
        'imagen'
    ];
     protected static $sortableField = 'position';
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'titulo' => 'string',
        'subtitulo' => 'string',
        'imagen' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'subtitulo' => 'required',
        'imagen' => 'required|image:*'
    ];

    
}
