<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cita extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['fecha', 'hora', 'user_id'];

    public $timestamps = false;

    public function getUser()
    {
        return $this->BelongsTo(User::class);
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class);
    }


}
