<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contrato extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['nombreProceso','objetoProceso','tipoProceso','nroContrato',
    'ordenCompra','plazoEntrega','fechaContrato','fechaEntrega','moneda',
    'montoTotal','observacion','cliente_id'];

    public function clientes()
    {
            return $this->belongsTo(cliente::class);
    }
}
