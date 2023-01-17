<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
