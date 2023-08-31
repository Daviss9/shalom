<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['cliente','ruc','direccion','email','personaContacto','cargoContacto','telefonoContacto','emailContacto'];

    public function contratos()
    {
        return $this->hasMany(contrato::class);
    }
}
