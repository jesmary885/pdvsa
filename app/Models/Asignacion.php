<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

       //Relacion uno a muchos inversa
       public function objtactico(){
        return $this->belongsTo(Objtactico::class);
        }
        public function objoperacional(){
            return $this->belongsTo(Objoperacional::class);
        }
        public function obestrategico(){
            return $this->belongsTo(Objestrategico::class);
        }

          //Relacion uno a muchos 
        public function avances(){
        return $this->hasMany(Avance::class);
        }

         //Relacion uno a muchos inversa
       public function user(){
        return $this->belongsTo(User::class);
        }
}
