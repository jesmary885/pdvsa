<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objestrategico extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    //Relacion uno a muchos 
    public function asignacions(){
        return $this->hasMany(Asignacion::class);
    }

    public function objtacticos(){
        return $this->hasMany(Objtactico::class);
    }
}
