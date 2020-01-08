<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nombre
 * @property string $logo_empresa
 */
class Empresa extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'empresa';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'logo_empresa'];

}
