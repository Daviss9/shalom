<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class persona extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = 
    ['paterno','materno','nombre','dni','sexo','email','celular','fechaNac','observacion',
    'area_id','cargo_id','cliente_id','contrato_id'];

    public function tallaje()
    {
        return $this->hasMany(tallaje::class);         
    }

}
