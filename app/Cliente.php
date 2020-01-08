<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod
 * @property string $codigo
 * @property string $nombre
 * @property string $direccion
 * @property string $clave
 * @property string $estado
 * @property int $sucursal
 */
class Cliente extends Model
{
    protected $guard = 'cliente';
    
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cliente';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod';

    /**
     * @var array
     */
    protected $fillable = ['codigo', 'nombre', 'direccion', 'clave', 'estado', 'sucursal','empresa'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['clave','sucursal','empresa'];

}
