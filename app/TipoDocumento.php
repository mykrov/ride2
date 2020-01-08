<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $codigodoc
 * @property string $nombredoc
 */
class TipoDocumento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tipodocumento';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'codigodoc';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nombredoc'];

}
