<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asignatura extends Model
{
    use HasFactory;
    protected $table = 'asignaturas';
    protected $fillable = [
        'nombre',
        'detalle',
        'patron',
    ];
    public $timestamps = false;

    public function personas(): HasMany
    {
        return $this->hasMany(Persona::class,'asignatura_id');
    }
}
