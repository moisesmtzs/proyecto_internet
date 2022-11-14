<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_original'];

    public function servicio() {
        return $this->belongsTo(Servicio::class);
    }

}
