<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    public $timestamps = false;

    // protected $fillable = [];

    public function Usuarios(){
        return $this->hasMany(Usuarios::class,'usuario_rol');
    }
}
