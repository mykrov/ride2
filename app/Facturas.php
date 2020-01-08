<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $codigo
 * @property string $codigo_cliente
 * @property string $facturapdf
 * @property string $facturaxml
 * @property string $fecha
 * @property string $hora
 * @property string $codigodoc
 * @property string $fecha_emision
 * @property string $num_doc
 * @property string $empresa
 */
class Facturas extends Model
{
    public $timestamps = false;
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'codigo';

    /**
     * @var array
     */
    protected $fillable = ['codigo_cliente', 'facturapdf', 'facturaxml', 'fecha', 'hora', 'codigodoc', 'fecha_emision', 'num_doc','empresa'];

}
