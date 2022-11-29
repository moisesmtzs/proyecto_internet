<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio'];

    public $timestamps = false;

    public function citas()
    {
        return $this->belongsToMany(Cita::class);
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }

}
