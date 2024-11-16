<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\CortoFactory;

class Cortos extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected static function newFactory(): Factory
    {
        return CortoFactory::new();
    }
}
