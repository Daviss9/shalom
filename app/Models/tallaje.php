<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class tallaje extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['talla','hombro','cuello','espalda','pecho','cintura','adbomen','cadera','largoManga','puno',
                            'talleEspalda','tallePecho','largoSaco','tiro','largoPantalon','rodilla','basta','observacion','persona_id'];

    public function persona():BelongsTo
    {
        return $this->belongsTo(persona::class);         
    }

}
