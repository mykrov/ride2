<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $codigo
 * @property string $nombre
 */
class Sucursales extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'codigo';

    /**
     * @var array
     */
    protected $fillable = ['nombre'];

}
