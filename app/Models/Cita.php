<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'hora', 'user_id'];

    public $timestamps = false;

    public function getUser()
    {
        return $this->BelongsTo(User::class);
    }


}
