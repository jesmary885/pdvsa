<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'division_id'];

     //Relacion uno a muchos inversa
     public function division(){
        return $this->belongsTo(Division::class);
    }

    //Relacion uno a muchos
    public function users(){
        return $this->hasMany(User::class);
    }
}
