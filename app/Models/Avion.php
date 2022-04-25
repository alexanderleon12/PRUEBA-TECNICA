<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Avion
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Avion extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio'];



}
