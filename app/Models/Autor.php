<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autor
 *
 * @property $id
 * @property $codigo,4,7
 * @property $nombre
 * @property $apellidos
 * @property $telefono,01800
 * @property $direccion,5a poniente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autor extends Model
{
    
    static $rules = [
		'codigo,4,7' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
		'telefono,01800' => 'required',
		'direccion,5a poniente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo,4,7','nombre','apellidos','telefono,01800','direccion,5a poniente'];



}
