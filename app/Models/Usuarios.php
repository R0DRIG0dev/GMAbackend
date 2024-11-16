<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\UsuarioFactory;

class Usuarios extends Model
{
    use HasFactory;

    // protected $fillable = [];

    public $timestamps = false;

    protected static function newFactory(): Factory {
        return UsuarioFactory::new();
    }

    public function Roles(){
        return $this->belongsTo(Roles::class,'usuario_rol');
    }
}
