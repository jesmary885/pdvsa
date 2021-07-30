<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objtactico extends Model
{
    use HasFactory;

    protected $fillable = ['description','estrategico_id'];

     //Relacion uno a muchos 
     public function asignacions(){
        return $this->hasMany(Asignacion::class);
    }
    public function objoperacionals(){
        return $this->hasMany(Objoperacional::class);
    }

      //Relacion uno a muchos inversa
      public function objestrategico(){
        return $this->belongsTo(Objestrategico::class);
    }
}
