<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objoperacional extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'tactico_id'];

     //Relacion uno a muchos 
     public function asignacions(){
        return $this->hasMany(Asignacion::class);
    }
     //Relacion uno a muchos inversa
     public function objtactico(){
        return $this->belongsTo(Objtactico::class);
    }
}
